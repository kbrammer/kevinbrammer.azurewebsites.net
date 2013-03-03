using System;
using System.Web;
using System.Web.Mvc;
using System.Linq;
using System.Web.Optimization;
using System.Collections.Generic;
using System.Text;

using MarkdownDeep;
using site.Models;
using site.Services;

namespace site.Controllers {
    public class ArticlesController : Controller {
        private ArticleService ArticleClient;

        public ArticlesController(){
            ArticleClient = new ArticleService();
        }

        public ActionResult Index(string title) {
           
            if (string.IsNullOrEmpty(title)) {
                ViewBag.Title = "Home";
                ViewBag.Articles = ArticleClient.ArticleCollection;
            }
            else {
                ViewBag.Title = title;
                //return a list containing only the article specified in the url
                ViewBag.Articles = new List<Article>() { ArticleClient.ArticleCollection.Find(c => c.Link == title) };
            }

            ViewBag.Menu = ArticleClient.MenuCollection;
            return View();
        }

        

        
    }
}
