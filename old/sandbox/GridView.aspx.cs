using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
      if (!IsPostBack) 
        { 
            foreach(string sFile in  
                System.IO.Directory.GetFiles( Server.MapPath("GridViewCSSThemes"), "*.css" )) 
            { 
                string sJustFile = new System.IO.FileInfo(sFile).Name; 
                ddlCss.Items.Add(sJustFile); 
            } 
            ddlCss.SelectedIndex = 0; 
            ddlCss_SelectedIndexChanged(null, null); 
        }   
    }
	protected void ddlCss_SelectedIndexChanged(object sender, EventArgs e) 
    { 
        gridviewcss.Href = "GridViewCSSThemes/" + ddlCss.SelectedItem.Text; 
		CSSlabel.Text = "<a href='GridViewCSSThemes/" + ddlCss.SelectedItem.Text + "' target='blank'>View CSS</a>&nbsp;|&nbsp;<a href='GridViewCSSThemes/GridViewCSSThemes.zip' target='blank'>Download Themes</a>";
    } 

    
}
