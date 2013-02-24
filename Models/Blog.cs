using System;
using System.Web;
using System.Collections.Generic;


using site.Models;

namespace site.Models {
    public class Blog {
        public List<Article> ArticleList { get; set; }
        public List<Menu> MenuList { get; set; }
    }
}