using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using Newtonsoft.Json.Serialization;
using MarkdownDeep;

namespace site.Controllers
{
    public class GitHubAPIController : ApiController
    {

        public class Links {
            public string self { get; set; }
            public string git { get; set; }
            public string html { get; set; }
        }

        public class Content {
            public string sha { get; set; }
            public string size { get; set; }
            public string name { get; set; }
            public string path { get; set; }
            public string type { get; set; }
            public string url { get; set; }
            public string git_url { get; set; }
            public string html_url { get; set; }
            public Links _links { get; set; }
        }
        
        public Content[] Get()
        {
            System.Net.WebClient client = new System.Net.WebClient();
            var url = "https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents";
            var json = client.DownloadString(url);
            return Newtonsoft.Json.JsonConvert.DeserializeObject<Content[]>(json) as Content[];
        }

        private string GetRepoArticle() {
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/readme
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents/Views
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents/Assets/articles
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents/Assets/articles/BeautifulSoup-Scraper.markdown
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/commits/670bb41d51097883103398afb17115e82a8a221a/comments
            try {
                WebClient client = new WebClient();
                string article = client.DownloadString("https://raw.github.com/kbrammer/kevinbrammer.azurewebsites.net/master/README.md");

                var md = new Markdown {
                    SafeMode = false,
                    ExtraMode = true,
                    AutoHeadingIDs = true,
                    MarkdownInHtml = false,
                    ExtractHeadBlocks = true,
                    NewWindowForExternalLinks = true
                };

                return md.Transform(article);
            }
            catch (Exception ex) {
                return ex.Message;
            }
        }

    }
}

