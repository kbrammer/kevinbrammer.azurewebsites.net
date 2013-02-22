using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using site.Models;

namespace site.Controllers
{
    public class HomeController : Controller
    {

        public ActionResult Index(string title)
        {

            if (string.IsNullOrEmpty(title))
                title = "Home";
            ViewBag.Article = Articles.GetArticle(title);
            ViewBag.Title = title;
            ViewBag.Menu = Articles.GetMenu();
            
            return View();
        }

        
    }

   
}
