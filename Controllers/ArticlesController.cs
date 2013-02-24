using System;
using System.Web;
using System.Web.Mvc;
using System.Linq;
using System.Web.Optimization;
using System.Collections.Generic;
using System.Text;

using MarkdownDeep;
using site.Models;

//using Argotic.Common;
//using Argotic.Syndication;

namespace site.Controllers {
    public class ArticlesController : Controller {
        //Config
        private string ARTICLE_BASE_PATH = System.Web.Configuration.WebConfigurationManager.AppSettings["ARTICLE_BASE_PATH"];
        private string ARTICLE_SEARCHPATTERN = System.Web.Configuration.WebConfigurationManager.AppSettings["ARTICLE_SEARCHPATTERN"];
        private int CACHE_DURATION_IN_MINUTES = Convert.ToInt32(System.Web.Configuration.WebConfigurationManager.AppSettings["CACHE_DURATION_IN_MINUTES"]);
        private string DEFAULT_AUTHOR = System.Web.Configuration.WebConfigurationManager.AppSettings["DEFAULT_AUTHOR"];

        public Blog blog { get; set;}

        public ActionResult Index(string title) {
            //Get articles and menu
            if (HttpContext.Cache["BlogContent"] != null) {
                blog = (Blog)HttpContext.Cache["BlogContent"];
            }
            else {
                blog = PopulateBlogContent();
                HttpContext.Cache.Insert("BlogContent", blog, null, DateTime.UtcNow.AddMinutes(CACHE_DURATION_IN_MINUTES), System.Web.Caching.Cache.NoSlidingExpiration);
            }

            if (string.IsNullOrEmpty(title)) {
                ViewBag.Title = "Home";
                ViewBag.Articles = blog.ArticleList;
            }
            else {
                ViewBag.Title = title;
                //return a list containing only the article specified in the url
                ViewBag.Articles = new List<Article>() { blog.ArticleList.Find(c => c.Link == title) };
            }

            ViewBag.Menu = blog.MenuList;
            return View();
        }

        public Blog PopulateBlogContent() {
            Blog result = new Blog();
            List<Article> articleList = new List<Article>();
            List<Menu> menuList = new List<Menu>();

            foreach (string file in GetFiles()) {

                string filename = System.IO.Path.GetFileNameWithoutExtension(file);
                string markdown = GetMarkdown(file);

                Article a = new Article() {
                    Link = filename,
                    Title = filename.Replace('-', ' '),
                    Author = DEFAULT_AUTHOR,
                    Content = Transform(markdown)
                };

                articleList.Add(a);

                Menu m = new Menu() {
                    Link = filename,
                    Title = filename.Replace('-', ' ')
                };

                menuList.Add(m);
            }

            result.ArticleList = articleList;
            result.MenuList = menuList;
            return result;
        }

        /// <summary>
        /// Get all files in wiki directory with the extension specified in web.config
        /// </summary>
        /// <returns></returns>
        protected string[] GetFiles() {

            string[] result = { "" };

            try {
                string path = HttpContext.Server.MapPath(ARTICLE_BASE_PATH);
                result = System.IO.Directory.GetFiles(path, ARTICLE_SEARCHPATTERN);
            }
            catch (Exception) {
                //TODO:handle exception?    
            }

            return result;
        }

        /// <summary>
        /// Read markdown content from file
        /// </summary>
        /// <param name="file"></param>
        /// <returns></returns>
        protected string GetMarkdown(string file) {
            try {
                return System.IO.File.ReadAllText(file);
            }
            catch (Exception ex) {
                return ex.Message;
            }
        }

        /// <summary>
        /// Transform markdown content to HTML
        /// </summary>
        /// <param name="markdown"></param>
        /// <returns></returns>
        protected string Transform(string markdown) {
            var md = new Markdown {
                SafeMode = false,
                ExtraMode = true,
                AutoHeadingIDs = true,
                MarkdownInHtml = false,
                ExtractHeadBlocks = true,
                NewWindowForExternalLinks = true
            };
            return md.Transform(markdown);
        }

        /// <summary>
        /// GitHub Wiki Pages Atom Feed
        /// </summary>
        /// <returns></returns>
        //public ActionResult Index()
        //{
        //    if (HttpContext.Cache["Articles"] != null) {
        //        ViewBag.Articles = (AtomFeed)HttpContext.Cache["Articles"];
        //    }
        //    else {
        //        try {
        //            SyndicationResourceLoadSettings settings = new SyndicationResourceLoadSettings();
        //            settings.RetrievalLimit = 10;
        //            Uri feedUrl = new Uri("https://github.com/kbrammer/kevinbrammer.azurewebsites.net/wiki.atom");
        //            AtomFeed feed = AtomFeed.Create(feedUrl, settings);
        //            HttpContext.Cache.Insert("Articles", feed, null, DateTime.UtcNow.AddMinutes(30), System.Web.Caching.Cache.NoSlidingExpiration);
        //            ViewBag.Articles = feed;
        //        }
        //        catch (Exception) {
        //            //TODO:404
        //        }
        //    }

        //    return View();

        //}
    }
}
