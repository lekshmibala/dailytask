<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="WebApplication2.login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 39%;
        }
        .auto-style2 {
            width: 155px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <table class="auto-style1">
            <tr>
                <td colspan="2">
                    <asp:Label ID="Label1" runat="server" Text="login form"></asp:Label>
             </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style2">
                   <center> <asp:Label ID="Label2" runat="server" Text="username"></asp:Label>
                </center></td>
                <td>
                    <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">
                  
                      <center> <asp:Label ID="Label4" runat="server" Text="password"></asp:Label>
                       </center> </td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td class="auto-style2" colspan="2">
                   <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="submit" Width="93px" style="margin-left: 72px" />
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
    </form>
</body>
</html>
