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
<<<<<<< HEAD
        
        private WebClient client = new WebClient();
        private Markdown md = new Markdown();

        public ActionResult Index()
=======

        public ActionResult Index(string title)
>>>>>>> updated theme and controllers
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
