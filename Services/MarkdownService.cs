using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using MarkdownDeep;

namespace site.Services {
    public static class MarkdownService {
        private static string ARTICLE_BASE_PATH = System.Web.Configuration.WebConfigurationManager.AppSettings["ARTICLE_BASE_PATH"];
        private static string ARTICLE_SEARCHPATTERN = System.Web.Configuration.WebConfigurationManager.AppSettings["ARTICLE_SEARCHPATTERN"];

        /// <summary>
        /// Transform markdown content to HTML
        /// </summary>
        /// <param name="markdown"></param>
        /// <returns></returns>
        public static string Transform(string markdown) {
            var md = new Markdown {
                SafeMode = false,
                ExtraMode = true,
                AutoHeadingIDs = true,
                MarkdownInHtml = false,
                ExtractHeadBlocks = true,
                NewWindowForExternalLinks = true
            };
            return md.Transform(markdown);
        }

        /// <summary>
        /// Find files recursively matching search pattern
        /// </summary>
        /// <returns></returns>
        public static string[] GetMarkdownFileList() {

            string[] result = { "" };

            try {
                string path = HttpContext.Current.Server.MapPath(ARTICLE_BASE_PATH);
                result = System.IO.Directory.GetFiles(path, ARTICLE_SEARCHPATTERN);
            }
            catch (Exception) {
                //TODO:handle exception?    
            }

            return result;
        }

        /// <summary>
        /// Return markdown as string
        /// </summary>
        /// <param name="file"></param>
        /// <returns></returns>
        public static string ReadMarkdownFile(string file) {
            try {
                return System.IO.File.ReadAllText(file);
            }
            catch (Exception ex) {
                return ex.Message;
            }
        }
    }
}