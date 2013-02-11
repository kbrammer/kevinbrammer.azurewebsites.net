using System;


public partial class Gallery : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        PhotoRepeater.DataSource = RecentPhotos();
        PhotoRepeater.DataBind();
    }
    public static FlickrNet.PhotoCollection RecentPhotos()
    {
        FlickrNet.Flickr flickr = new FlickrNet.Flickr();
        FlickrNet.Photoset set = flickr.PhotosetsGetPhotos("72157600111054287");
        return set.PhotoCollection;
    }
}
