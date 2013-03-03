using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Argotic.Common;
using Argotic.Syndication;

namespace site.Services {
    public class WikiService {
        /// <summary>
        /// GitHub Wiki Pages Atom Feed
        /// </summary>
        /// <returns></returns>
        public AtomFeed GetFeed() {
            if (HttpContext.Current.Cache["Articles"] != null) {
                return (AtomFeed)HttpContext.Current.Cache["Articles"];
            }
            else {
                try {
                    SyndicationResourceLoadSettings settings = new SyndicationResourceLoadSettings();
                    settings.RetrievalLimit = 10;
                    Uri feedUrl = new Uri("https://github.com/kbrammer/kevinbrammer.azurewebsites.net/wiki.atom");
                    AtomFeed feed = AtomFeed.Create(feedUrl, settings);
                    HttpContext.Current.Cache.Insert("Articles", feed, null, DateTime.UtcNow.AddMinutes(30), System.Web.Caching.Cache.NoSlidingExpiration);
                    return feed;
                }
                catch (Exception) {
                    return new AtomFeed();
                }
            }
        }
    }
}