using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using MarkdownDeep;
using System.Net;
using System.Web.Http;

namespace site.Controllers
{
    public class HomeController : Controller
    {
        private WebClient client = new WebClient();
        private Markdown md = new Markdown();
        public ActionResult Index()
        {
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents
            //https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/readme
            var markdowndoc = client.DownloadString("https://raw.github.com/kbrammer/kevinbrammer.azurewebsites.net/master/README.md");
            ViewBag.ReadMe = md.Transform(markdowndoc);
            return View();
        }
    }
}
