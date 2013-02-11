using System;
using Google.GData.Client;
using Google.GData.CodeSearch;
using System.Text;

namespace gSearch.CodeSearchHelper
{
    /// <summary>
    /// Google CodeSearch Helper
    /// </summary>
    public class gCodeSearchHelper
    {
        private Int32 _startIndex;
        private Int32 _endIndex;
        private Int32 _max_results = 5;
        private Int32 _totalPageLinks = 5;
        private Int32 _prevPage;
        private Int32 _nextPage;
        private String _queryTxt;
        private String _codeSearchURI = "http://www.google.com/codesearch/feeds/search"; //hard code uri for now
        private String _pagerTxt;
        private String _statsTxt;
        private String _codeTxt;

        public Int32 startIndex
        {
            get { return _startIndex; }
            set { _startIndex = value; }
        }

        public Int32 endIndex
        {
            get { return _endIndex; }
        }

        public Int32 max_results
        {
            get { return _max_results; }
            set { _max_results = value; }
        }

        public Int32 prevPage
        {
            get { return _prevPage; }
        }

        public Int32 nextPage
        {
            get { return _nextPage; }
        }

        public String queryTxt
        {
            get { return _queryTxt; }
            set { _queryTxt = value; }
        }

        public String pagerTxt
        {
            get { return _pagerTxt; }
        }

        public String statsTxt
        {
            get { return _statsTxt; }
        }

        public String codeTxt
        {
            get { return _codeTxt; }
        }

        public gCodeSearchHelper() { }

        public gCodeSearchHelper(Int32 start, String queryString)
        {
            //Start Index Property Rules
            if (start < 1) //Start index can't be less than one
            {
                _startIndex = 1;
            }
            else
            {
                _startIndex = start;
            }

            //End Index Property Rules
            _endIndex = _startIndex + (_max_results * (_totalPageLinks - 1));

            //Previous Page Property Rules
            if (start > _max_results) //Determine if this is the first page
            {
                _prevPage = _startIndex - (_max_results * _totalPageLinks);
            }
            else
            {
                _prevPage = 1;
            }

            //Next Page Property Rules
            _nextPage = _endIndex + _max_results; //TODO: check against total results

            //Query Rules
            _queryTxt = queryString;

            //Create query and service
            CodeSearchService service = new CodeSearchService("Cyberslingers-CS-1");
            FeedQuery query = new FeedQuery();
            query.Uri = new Uri(_codeSearchURI);
            query.Query = _queryTxt;
            query.StartIndex = _startIndex;
            query.NumberToRetrieve = _max_results;

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
            _pagerTxt = "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + _prevPage + "&q=" + query.Query.ToString() + "'>&lt;&lt;Prev</a>&nbsp;";
            for (int i = 0; i < _totalPageLinks; i ++)
            {
                int _thisIndex = _startIndex + (i * _max_results);
                int _thisPage = (((_startIndex + (i * _max_results)) - 1) / _max_results) + 1;
                _pagerTxt += "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + _thisIndex + "&q=" + query.Query.ToString() + "'>" + _thisPage + "</a>&nbsp;";
            }
            _pagerTxt += "<a href='http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=" + _nextPage + "&q=" + query.Query.ToString() + "'>Next&gt;&gt;</a>&nbsp;";
            
            // Total results - TODO: Not sure why total results changes when paging...
            _statsTxt = "Results " + _startIndex + "-" + (_startIndex + _max_results) + " of about " + feed.Entries.Count;
            _statsTxt += "?si=" + start + "&q=" + queryString;
            
            // Actual search results
            _codeTxt = sb.ToString();
        }
    }
}