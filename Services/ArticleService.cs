using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using site.Models;

namespace site.Services {
    public class ArticleService {
        private int CACHE_DURATION_IN_MINUTES = Convert.ToInt32(System.Web.Configuration.WebConfigurationManager.AppSettings["CACHE_DURATION_IN_MINUTES"]);
        private string DEFAULT_AUTHOR = System.Web.Configuration.WebConfigurationManager.AppSettings["DEFAULT_AUTHOR"];

        public List<Article> ArticleCollection {
            get {
                
                if (HttpContext.Current.Cache["ArticleContent"] != null) {
                    return (List<Article>)HttpContext.Current.Cache["ArticleContent"];
                }
                else {
                    List<Article> result = new List<Article>();

                    foreach (string file in MarkdownService.GetMarkdownFileList()) {

                        string filename = System.IO.Path.GetFileNameWithoutExtension(file);
                        string markdown = MarkdownService.ReadMarkdownFile(file);

                        Article a = new Article() {
                            Link = filename,
                            Title = filename.Replace('-', ' '),
                            Author = DEFAULT_AUTHOR,
                            Content = MarkdownService.Transform(markdown)
                        };

                        result.Add(a);
                    }

                    HttpContext.Current.Cache.Insert("ArticleContent", result, null, DateTime.UtcNow.AddMinutes(CACHE_DURATION_IN_MINUTES), System.Web.Caching.Cache.NoSlidingExpiration);
                    return result;
                }
            }
        }

        public List<Menu> MenuCollection {
            get {

                if (HttpContext.Current.Cache["MenuContent"] != null) {
                    return (List<Menu>)HttpContext.Current.Cache["MenuContent"];
                }
                else {
                    List<Menu> result = new List<Menu>();

                    foreach (string file in MarkdownService.GetMarkdownFileList()) {

                        string filename = System.IO.Path.GetFileNameWithoutExtension(file);
                        string markdown = MarkdownService.ReadMarkdownFile(file);

                        Menu m = new Menu() {
                            Link = filename,
                            Title = filename.Replace('-', ' ')
                        };

                        result.Add(m);
                    }

                    HttpContext.Current.Cache.Insert("MenuContent", result, null, DateTime.UtcNow.AddMinutes(CACHE_DURATION_IN_MINUTES), System.Web.Caching.Cache.NoSlidingExpiration);
                    return result;
                }
            }
        }
                
    }
}