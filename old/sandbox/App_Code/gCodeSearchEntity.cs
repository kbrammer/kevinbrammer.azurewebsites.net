using System;
using Google.GData.Client;
using Google.GData.CodeSearch;
using System.Text;

namespace gDataAPI.Entities
{
    /// <summary>
    /// Summary description for gCodeSearchEntity
    /// </summary>
    public class gCodeSearchEntity
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

        public Int32 max_results //readonly?
        {
            get { return _max_results; }
            set { _max_results = value; }
        }

        public Int32 totalPageLinks //readonly?
        {
            get { return _totalPageLinks; }
            set { _totalPageLinks = value; }
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

        public String codeSearchURI
        {
            get { return _codeSearchURI; }
            set { _codeSearchURI = value; }
        }

        public String pagerTxt
        {
            get { return _pagerTxt; }
            set { _pagerTxt = value; }
        }

        public String statsTxt
        {
            get { return _statsTxt; }
            set { _statsTxt = value; }
        }

        public String codeTxt
        {
            get { return _codeTxt; }
            set { _codeTxt = value; }
        }

        public gCodeSearchEntity(Int32 start, String queryString)
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
        }
    }
}