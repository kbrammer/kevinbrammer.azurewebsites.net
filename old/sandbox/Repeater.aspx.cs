using System;
using System.Data;
using System.Configuration;
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
        Repeater1.DataSource = NorthwindCustomers();
        Repeater1.DataBind();
    }

    public Northwind.CustomersDataTable NorthwindCustomers()
    {
        NorthwindTableAdapters.CustomersTableAdapter ta = new NorthwindTableAdapters.CustomersTableAdapter();
        Northwind.CustomersDataTable customers = ta.GetCustomers();
        //assign non-dynamic or dynamic templates to repeater control
        Repeater1.HeaderTemplate = new MyTemplate(customers, ListItemType.Header); //dynamic
        Repeater1.ItemTemplate = new MyTemplate(customers, ListItemType.Item); //dynamic
        //Repeater1.AlternatingItemTemplate = new MyTemplate(customers, ListItemType.AlternatingItem);
        Repeater1.FooterTemplate = new MyTemplate(ListItemType.Footer); //non-dynamic
        return ta.GetCustomers();
    }

    //See http://msdn2.microsoft.com/en-us/library/aa289501(VS.71).aspx for more information on dynamic templates

    private class MyTemplate : ITemplate
    {
        int itemcount; //if you use static like MSDN example then itemcount doesn't reset to zero on page reload
        bool dynamic = false;
        ListItemType templateType;
        Northwind.CustomersDataTable getCustomers;
        Northwind.CustomersRow customer;
        public MyTemplate(Northwind.CustomersDataTable customers, ListItemType type) //constructor for databound template
        {
            getCustomers = customers;
            templateType = type;
            dynamic = true;          
        }
        public MyTemplate(ListItemType type) //overloaded constructor for non-dynamic template
        {
            templateType = type;
        }
        public void InstantiateIn(System.Web.UI.Control container)
        {
            if (dynamic) //only assign customer row for databound templates
            {
                if (itemcount < getCustomers.Count) //very basic error handling :-)
                {
                    customer = getCustomers[itemcount];
                }
                else
                {
                    customer = getCustomers[0]; 
                }
            }
            Literal lc = new Literal();
            switch (templateType)
            {
                case ListItemType.Header:
                    lc.Text = "<table class=\"sandbox\">";
                    lc.Text += "<th>#</th>";
                    lc.Text += "<th>" + getCustomers.ContactNameColumn.ColumnName + "</th>";
                    lc.Text += "<th>" + getCustomers.CompanyNameColumn.ColumnName + "</th>";
                    lc.Text += "<th>" + getCustomers.CityColumn.ColumnName + "</th>";
                    lc.Text += "<th>" + getCustomers.AddressColumn.ColumnName + "</th>";
                    break;
                case ListItemType.Item:
                    lc.Text = "<tr>";
                    lc.Text += "<td>" + itemcount.ToString() + "</td>";
                    lc.Text += "<td>" + customer.ContactName + "</td>";
                    lc.Text += "<td>" + customer.CompanyName + "</td>";
                    lc.Text += "<td>" + customer.City + "</td>";
                    lc.Text += "<td>" + customer.Address + "</td>";
                    lc.Text += "</tr>";
                    itemcount += 1; //only increment itemcount for item or alternating item templates
                    break;
                case ListItemType.AlternatingItem:
                    lc.Text = "";
                    itemcount += 1;
                    break;
                case ListItemType.Footer:
                    lc.Text = "</table>";
                    break;
            }
            container.Controls.Add(lc);
        }
    }
}
