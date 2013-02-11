<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Sandbox</title>
    
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link runat="server" id="gridviewcss" href="GridViewCSSThemes/GlassBlackGridView.css" rel="stylesheet" type="text/css" />
    <script src="http://www.cyberslingers.com/weblog/themes/Cyberslinger/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-562450-1";
    urchinTracker();
    </script>
</head>

<body>
    <form id="form1" runat="server">
    <div id="header">
    <div id="header_brand"><img src="Images/cyberslingers_header_brand.png" alt="Kevin Brammer's Weblog" /></div>
  </div>
  
  <div id="menu">
    <ul>
      <li><a href="http://www.cyberslingers.com/weblog/" rel="home">Home</a></li>
    </ul>
  </div>
  
  <div id="body"> 
    <div id="ddl"> Change style: 
    <asp:DropDownList ID="ddlCss" runat="server" AutoPostBack="true" OnSelectedIndexChanged="ddlCss_SelectedIndexChanged">
    </asp:DropDownList>
    </div>
    <div>
        <asp:GridView ID="GridView1" runat="server" AllowPaging="True" AllowSorting="True"
            AutoGenerateColumns="False" CssClass="GridViewStyle" DataKeyNames="CustomerID" DataSourceID="ObjectDataSource1"
            GridLines="None">
            <Columns>
                <asp:CommandField ShowSelectButton="True" />
                <asp:BoundField DataField="CompanyName" HeaderText="CompanyName" SortExpression="CompanyName" />
                <asp:BoundField DataField="ContactName" HeaderText="ContactName" SortExpression="ContactName" />
                <asp:BoundField DataField="City" HeaderText="City" SortExpression="City" />
                <asp:BoundField DataField="Address" HeaderText="Address" SortExpression="Address" />
                <asp:BoundField DataField="CustomerID" HeaderText="CustomerID" ReadOnly="True" SortExpression="CustomerID" />
            </Columns>
            <FooterStyle CssClass="FooterStyle" />
            <RowStyle CssClass="RowStyle" />
            <EmptyDataRowStyle CssClass="EmptyRowStyle" />
            <PagerStyle CssClass="PagerStyle" />
            <SelectedRowStyle CssClass="SelectedRowStyle" />
            <HeaderStyle CssClass="HeaderStyle" />
            <EditRowStyle CssClass="EditRowStyle" />
            <AlternatingRowStyle CssClass="AltRowStyle" />
        </asp:GridView>
        <br />
        <asp:Label runat="server" ID="CSSlabel"></asp:Label>
        <asp:ObjectDataSource ID="ObjectDataSource1" runat="server" DeleteMethod="Delete"
            InsertMethod="Insert" OldValuesParameterFormatString="original_{0}" SelectMethod="GetCustomers"
            TypeName="NorthwindTableAdapters.CustomersTableAdapter" UpdateMethod="Update">
            <DeleteParameters>
                <asp:Parameter Name="Original_CustomerID" Type="String" />
            </DeleteParameters>
            <UpdateParameters>
                <asp:Parameter Name="CompanyName" Type="String" />
                <asp:Parameter Name="ContactName" Type="String" />
                <asp:Parameter Name="City" Type="String" />
                <asp:Parameter Name="Address" Type="String" />
                <asp:Parameter Name="CustomerID" Type="String" />
            </UpdateParameters>
            <InsertParameters>
                <asp:Parameter Name="CompanyName" Type="String" />
                <asp:Parameter Name="ContactName" Type="String" />
                <asp:Parameter Name="City" Type="String" />
                <asp:Parameter Name="Address" Type="String" />
                <asp:Parameter Name="CustomerID" Type="String" />
            </InsertParameters>
        </asp:ObjectDataSource>
    </div>
   </div>
    </form>
</body>
</html>
