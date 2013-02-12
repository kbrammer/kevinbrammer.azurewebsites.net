using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using MarkdownDeep;
using Newtonsoft.Json.Serialization;

namespace site.Controllers
{
    public class PostsController : ApiController
    {

        public class Links {
            public string self { get; set; }
            public string git { get; set; }
            public string html { get; set; }
        }

        public class Content {
            public string sha { get; set; }
            public string size { get; set; }
            public string name { get; set; }
            public string path { get; set; }
            public string type { get; set; }
            public string url { get; set; }
            public string git_url { get; set; }
            public string html_url { get; set; }
            public Links _links { get; set; }
        }
        
        // GET api/posts
        public Content[] Get()
        {
            System.Net.WebClient client = new System.Net.WebClient();
            var url = "https://api.github.com/repos/kbrammer/kevinbrammer.azurewebsites.net/contents";
            var json = client.DownloadString(url);
            return Newtonsoft.Json.JsonConvert.DeserializeObject<Content[]>(json) as Content[];
        }
            
        

        //// GET api/posts/5
        //public string Get(int id)
        //{
        //    return "value";
        //}

        //// POST api/posts
        //public void Post([FromBody]string value)
        //{
        //}

        //// PUT api/posts/5
        //public void Put(int id, [FromBody]string value)
        //{
        //}

        //// DELETE api/posts/5
        //public void Delete(int id)
        //{
        //}
    }
}

