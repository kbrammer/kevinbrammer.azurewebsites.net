using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Net;
using System.Web.Http;
using System.Text;

namespace site.Models
{

    public static class Articles
    {
        public static string GetMenu()
        {
            StringBuilder menu = new StringBuilder();
            try
            {
                string pages = HttpContext.Current.Server.MapPath("~/Assets/Articles/toc.markdown");
                string[] toc = System.IO.File.ReadAllLines(pages);

                
                foreach (string line in toc)
                {
                    menu.AppendFormat("<li><a href=\"/Home/{0}\">{1}</a>", line.Split(',')[1].Trim(), line.Split(',')[0].Trim());
                }

                return menu.ToString();
            }
            catch (Exception ex)
            {
                return ex.Message;
            }
           
        }

        public static string GetArticle(string title)
        {
            try
            {
                string page = HttpContext.Current.Server.MapPath(string.Format("~/Assets/Articles/{0}.markdown", title));
                string article = System.IO.File.ReadAllText(page);
                return Markdown.Render(article);
            }
            catch (Exception ex)
            {
                return ex.Message;
            }
            
        }

        public static string GetArticles()
        {
            try
            {
                return "";
            }
            catch (Exception ex)
            {
                return ex.Message;
            }
        }

        public static string GetRepoArticle()
        {
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/readme
            try
            {
                WebClient client = new WebClient();
                string article = client.DownloadString("https://raw.github.com/kbrammer/kevinbrammer.azurewebsites.net/master/README.md");
                return Markdown.Render(article);
            }
            catch (Exception ex)
            {
                return ex.Message;
            }
        }
    }
}