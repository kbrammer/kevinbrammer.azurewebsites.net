using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using MarkdownDeep;

namespace site.Models {
    public class Article {
        public string Link { get; set; }
        public string Title { get; set; }
        public DateTime PublishedOn { get; set; }
        public string Author { get; set; }
        public string[] Tags { get; set; }
        public string[] Categories { get; set; }
        public string Content { get; set; }
    }
}