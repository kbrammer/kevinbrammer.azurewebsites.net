using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace site.Models {
    public class Menu {
        public string Link { get; set; }
        public string Title { get; set; }
        public string[] Tags { get; set; } //not used
        public string[] Categories { get; set; } //not used
    }
}