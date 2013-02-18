using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace site.Models
{
    public static class Markdown
    {
        public static string Render(string content)
        {
            var md = new MarkdownDeep.Markdown
            {
                SafeMode = false,
                ExtraMode = true,
                AutoHeadingIDs = true,
                MarkdownInHtml = false,
                ExtractHeadBlocks = true,
                NewWindowForExternalLinks = true
            };

            return md.Transform(content);
        }
    }
}