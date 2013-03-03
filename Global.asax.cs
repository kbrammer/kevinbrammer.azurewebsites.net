using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Http;
using System.Web.Mvc;
using System.Web.Optimization;
using System.Web.Routing;
using site.Services;
using site.Models;

namespace site
{

    public class WebApiApplication : System.Web.HttpApplication
    {
        public List<Article> ArticleCollection { get; set; }
        public List<Menu> MenuCollection { get; set; }

        protected void Application_Start()
        {
            AreaRegistration.RegisterAllAreas();
            WebApiConfig.Register(GlobalConfiguration.Configuration);
            FilterConfig.RegisterGlobalFilters(GlobalFilters.Filters);
            RouteConfig.RegisterRoutes(RouteTable.Routes);
            //ArticleConfig.RegisterArticles(ArticleService.Articles);
            //BundleConfig.RegisterBundles(BundleTable.Bundles);
        }
    }
}