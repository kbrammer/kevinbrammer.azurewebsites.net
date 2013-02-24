using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Text;
using System.Web.Http;
using MarkdownDeep;

namespace site.Controllers
{
    public class HomeController : Controller
    {        
        public ActionResult Index(string title)
        {
            if (string.IsNullOrEmpty(title)) {
                title = "Home";
            }
            ViewBag.Title = title;            
            return View();
        }
    }
}
