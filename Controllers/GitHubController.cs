using System;
using System.Net;
using System.Web.Http;
using Newtonsoft.Json;
using MarkdownDeep;
using site.Models.GitHub;

namespace site.Controllers
{
    public class GitHubController : ApiController
    {
        private WebClient client = new WebClient();
        private string access_token = "d9fecf28211ea8ccb72ac54c1e492bbf530c2a16";
        
        //public Content[] Get() {
        //    var url = "https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents?access_token=" + access_token;
        //    var json = client.DownloadString(url);
        //    return JsonConvert.DeserializeObject<Content[]>(json) as Content[];
        //}

        public Event[] Get()
        {
            var url = "https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/events?access_token=" + access_token;
            var json = client.DownloadString(url);
            return JsonConvert.DeserializeObject<Event[]>(json) as Event[];
        }

        private string GetRepoArticle() {
            try {
                WebClient client = new WebClient();
                string article = client.DownloadString("https://api.github.com/kbrammer/kevinbrammer.azurewebsites.net/master/README.md");

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

