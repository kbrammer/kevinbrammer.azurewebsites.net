using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        //create XML page

        Response.Write("<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\"?>\n");
        Response.Write("<images>\n");
        Response.Write(RecentPhotos());
        Response.Write("</images>");
    }
    public static string RecentPhotos()
    {
        FlickrNet.Flickr flickr = new FlickrNet.Flickr();
        FlickrNet.PhotoCollection photos = flickr.PhotosetsGetPhotos("72157600111054287");
        string images = "";

        foreach (FlickrNet.Photo photo in photos)
        {
            images += "<pic>\n";
            images += "<image>" + photo.MediumUrl + "</image>\n";
            images += "<caption>" + photo.Title + "</caption>\n";
            images += "<thumbnail>" + photo.ThumbnailUrl + "</thumbnail>\n";
            images += "</pic>\n";
        }

            return images;     
    }
}
