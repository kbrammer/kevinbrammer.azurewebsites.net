<%@ Page Language="C#" AutoEventWireup="true" CodeFile="CodeSearch.aspx.cs" Inherits="CodeSearch" EnableViewState="True" ValidateRequest="False" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Google Code Search</title>
    <link href="CodeSearch.css" rel="stylesheet" type="text/css" />
    <script src="urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-562450-1";
    urchinTracker();
    </script>
</head>
<body>
    <form id="form1" runat="server">
    <div class="gTitle"><a href="http://www.cyberslingers.com/pt/blog/Default.aspx" >
        <img alt="www.cyberslingers.com" longdesc="www.cyberslingers.com" 
            src="Images/cyberslingers_header_brand.png" 
            style="width: 270px; height: 85px" border=0/></a></div>
    <div class="gStats">
        <div class="gStats-left">
            <asp:Literal ID="lblPager" runat="server" ></asp:Literal>
            </div>
            <div class="gSearchBox">
            <asp:TextBox ID="tbQuery" runat="server" Width="257px"></asp:TextBox>
        &nbsp;<asp:DropDownList ID="ddlLang" runat="server">
            <asp:ListItem Value="">Language</asp:ListItem>
            <asp:ListItem Value=" file:\.cs$">C#</asp:ListItem>
            <asp:ListItem Value=" file:\.php$">PHP</asp:ListItem>
            <asp:ListItem Value=" file:\.vb$">Visual Basic</asp:ListItem>
            <asp:ListItem Value=" file:\.css$">CSS</asp:ListItem>
            <asp:ListItem Value=" file:\.js$">Javascript</asp:ListItem>
        </asp:DropDownList>
&nbsp;<asp:Button ID="btnSearch" runat="server" Text="Search" 
            onclick="btnSearch_Click" Height="22px" />
            
        </div>
        <div class="gStats-right">
            <asp:Label ID="lblStats" runat="server" >Status: Ready</asp:Label>
        </div>
        <div class="gStats-clear"></div>
    </div>
    <div class="gResults">
    <asp:Literal ID="litCode" runat="server" Mode="PassThrough" ></asp:Literal>
    </div>
    </form>
</body>
</html>
