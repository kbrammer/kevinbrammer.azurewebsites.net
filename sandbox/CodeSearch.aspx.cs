using System;
using Google.GData.Client;
using Google.GData.CodeSearch;
using System.Text;

using gSearch.CodeSearchHelper;
using gDataAPI.Services;
using gDataAPI.Entities;

public partial class CodeSearch : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Request.QueryString["si"]!=null && Request.QueryString["q"]!=null)
        {
            try
            {
                Int32 start = Convert.ToInt32(Request.QueryString["si"]);
                String queryString = Request.QueryString["q"];
                
                //gCodeSearchHelper gSearch = new gCodeSearchHelper(start, queryString);
                gCodeSearchService gService = new gCodeSearchService();
                gCodeSearchEntity gSearch = gService.gService(start, queryString);
                lblPager.Text = gSearch.pagerTxt;
                lblStats.Text = gSearch.statsTxt;
                litCode.Text = gSearch.codeTxt;
            }
            catch (Exception ex)
            {
                lblStats.Text = ex.Message;
            }
        }
    }

    protected void btnSearch_Click(object sender, EventArgs e)
    {
        Response.Redirect("http://www.cyberslingers.com/Sandbox/CodeSearch.aspx?si=1&q=" + tbQuery.Text + ddlLang.SelectedValue);
    }
}