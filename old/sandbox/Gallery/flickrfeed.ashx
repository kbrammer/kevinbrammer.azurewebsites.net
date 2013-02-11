<%@ WebHandler Language="C#" Class="Handler" %>

using System;
using System.Web;
using FlickrNet;

public class Handler : IHttpHandler
{
    public void ProcessRequest(HttpContext context)
    {
        String output;
        context.Response.ContentType = "text/xml";
        context.Response.ContentEncoding = System.Text.Encoding.UTF8;
        
        // Assign the XML document
        output = XMLdata();

        context.Response.Cache.SetExpires(DateTime.Now.AddSeconds(600));
        context.Response.Cache.SetCacheability(HttpCacheability.Public);
        context.Response.Write(output);
    }

    public bool IsReusable
    {
        get { return true; }
    }

    public String XMLdata()
    {
        // Get data
        
        Flickr flickr = new Flickr();
        Photoset photos = flickr.PhotosetsGetPhotos("72157600111054287");

        // Create XML document
        XmlOutput xo = new XmlOutput()
        .XmlDeclaration()
        .Node("images").Within();

        foreach (Photo pic in photos.PhotoCollection)
        {
            String _title = "";
            String _image = "";
            String _thumbnail = "";
            String _description = "";

            if (pic.Title != "")
            {
                _title = pic.Title;
            }
            if (pic.MediumUrl != "")
            {
                _image = pic.MediumUrl;
            }
            if (pic.ThumbnailUrl != "")
            {
                _thumbnail = pic.ThumbnailUrl;
            }
            if (pic.PhotoId != "")
            {
                PhotoInfo pinfo = flickr.PhotosGetInfo(pic.PhotoId);
                _description = pinfo.Description;
            }
            xo.Node("pic").Within()
            .Node("title").InnerText(_title)
            .Node("image").InnerText(_image)
            .Node("thumbnail").InnerText(_thumbnail)
            .Node("description").InnerText(_description)
            .EndWithin();
        }
        return xo.GetOuterXml();
    }
} 