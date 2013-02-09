<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Gallery.aspx.cs" Inherits="Gallery" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Sandbox</title>
    
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link runat="server" id="gridviewcss" href="GridViewCSSThemes/GlassBlackGridView.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" />
    <script src="http://www.cyberslingers.com/weblog/themes/Cyberslinger/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-562450-1";
    urchinTracker();
    </script>
    <script src="SmoothGallery/scripts/mootools.v1.11.js" type="text/javascript"></script>
    <script src="SmoothGallery/scripts/jd.gallery.js" type="text/javascript"></script>
</head>

<body>
    <form id="form1" runat="server">
    <div id="header">
    <div id="header_brand"><img src="Images/cyberslingers_header_brand.png" alt="Kevin Brammer's Weblog" /></div>
  </div>
  
  <div id="menu">
    <ul>
      <li><a href="http://www.cyberslingers.com/weblog/" rel="home">Home</a></li>
      <li><a href="http://www.cyberslingers.com/weblog/archive.aspx">Archive</a></li>
      <li><a href="http://www.cyberslingers.com/weblog/contact.aspx">Contact</a></li>
      <li><a href="http://www.cyberslingers.com/weblog/syndication.axd" class="feed"><img src="Images/rssButton.gif" alt="Feed" />Subscribe</a></li>
    </ul>
  </div>
  
  <div id="body"> 
  Gallery made possible with <a href="http://www.flickr.com">Flickr</a>, <a href="http://smoothgallery.jondesign.net">SmoothGallery</a> and <a href="http://www.codeplex.com/FlickrNet/">
        FlickrNet</a> API<br /><br />
  <div id="myGallery">
        <asp:Repeater runat="server" ID="PhotoRepeater">
            <ItemTemplate>
                <div class="imageElement">
                    <h3><%# Eval("Title") %></h3>
                    <p>Copyright 2007 Kevin Brammer</p>
                    <a href="<%# Eval("WebUrl") %>" title="open image" class="open"></a>
                    <img src="<%# Eval("MediumUrl") %>" alt="<%# Eval("RawTags") %>" class="full" />
                    <img src="<%# Eval("SquareThumbnailUrl") %>" class="thumbnail" />
                </div>
            </ItemTemplate>
        </asp:Repeater>
     </div>
     <script type="text/javascript">
         function startGallery() {
             var myGallery = new gallery($('myGallery'), {
                 timed: false
             });
         }
         window.addEvent('domready', startGallery);
    </script>
  </div>
    </form>
</body>
</html>
