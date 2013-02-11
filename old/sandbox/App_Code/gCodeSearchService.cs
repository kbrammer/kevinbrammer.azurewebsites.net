using System;
using Google.GData.Client;
using Google.GData.CodeSearch;
using System.Text;

using gDataAPI.Entities;
namespace gDataAPI.Services
{
    /// <summary>
    /// Summary description for gcodeSearchService
    /// </summary>
    public class gCodeSearchService
    {
        public gCodeSearchService()
        {
            //
            // TODO: Add constructor logic here
            //
        }

        public gCodeSearchEntity gService(Int32 start, String queryString)
        {
            gCodeSearchEntity newSearch = new gCodeSearchEntity(start, queryString);
            //Create query and service
            CodeSearchService service = new CodeSearchService("Cyberslingers-CS-1");
            FeedQuery query = new FeedQuery();
            query.Uri = new Uri(newSearch.codeSearchURI);
            query.Query = newSearch.queryTxt;
            query.StartIndex = newSearch.startIndex;
            query.NumberToRetrieve = newSearch.max_results;

            // send the request
            CodeSearchFeed feed = service.Query(query);

            // Loop through entries
            StringBuilder sb = new StringBuilder();

            foreach (CodeSearchEntry entry in feed.Entries)
            {
                // File-result name and link to google cache
                sb.AppendLine("<div class='gTitleLink'><a href='" + entry.AlternateUri + "'>" + entry.FileElement.Name + "</a></div>");

                // Build code preview
                sb.AppendLine("<div class='gCode'><pre>");
                // Remove <pre> tags from individual code result matches
                StringBuilder mb = new StringBuilder();
                foreach (Match m in entry.Matches)
                {
                    mb.Append(m.LineNumber + ":" + m.LineTextElement);
                }
                mb.Replace("<pre>", "");
                mb.Replace("</pre>", "");
                sb.Append(mb.ToString());
                sb.AppendLine("</pre></div>");

                // Link to file or package
                sb.AppendLine("<div class='gPackageLink'><a href='" + entry.PackageElement.Uri + "'>" + entry.PackageElement.Name + "</a></div>");
            }

            // Pager - TODO: change postback link to dynamic reference
            newSearch.pagerTxt = "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + newSearch.prevPage + "&q=" + query.Query.ToString() + "'>&lt;&lt;Prev</a>&nbsp;";
            for (int i = 0; i < newSearch.totalPageLinks; i++)
            {
                int _thisIndex = newSearch.startIndex + (i * newSearch.max_results);
                int _thisPage = (((newSearch.startIndex + (i * newSearch.max_results)) - 1) / newSearch.max_results) + 1;
                newSearch.pagerTxt += "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + _thisIndex + "&q=" + query.Query.ToString() + "'>" + _thisPage + "</a>&nbsp;";
            }
            newSearch.pagerTxt += "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + newSearch.nextPage + "&q=" + query.Query.ToString() + "'>Next&gt;&gt;</a>&nbsp;";

            // Total results - TODO: Not sure why total results changes when paging...
            newSearch.statsTxt = "Results " + newSearch.startIndex + "-" + (newSearch.startIndex + newSearch.max_results) + " of about " + feed.TotalResults;

            // Actual search results
            newSearch.codeTxt = sb.ToString();

            return newSearch;
        }
    }
}