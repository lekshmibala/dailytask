<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="reg.aspx.cs" Inherits="WebApplication2.reg" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 84%;
        }
        .auto-style3 {
            height: 23px;
            }
        .auto-style4 {
            width: 356px;
        }
        .body{
            background-color:palegreen;
        }
        .auto-style5 {
            height: 23px;
            }
        .auto-style8 {
            width: 356px;
            height: 47px;
        }
        .auto-style9 {
            width: 445px;
            height: 47px;
        }
        .auto-style10 {
            height: 23px;
            width: 445px;
        }
        .auto-style11 {
            width: 445px;
        }
    </style>
</head>
<body >
    <form id="form1" runat="server">
        <center>
        <table class="auto-style1" border="1"  >
            <tr>
                <td class="auto-style3"  colspan="2">
                    <center><asp:Label ID="Label1" runat="server" Text="Registration form"></asp:Label>
               </center> </td>
            </tr>
            <tr>
                <td class="auto-style5">
                    <asp:Label ID="Label2" runat="server" Text="Name"></asp:Label>
                </td>
                <td class="auto-style10">
                    <asp:TextBox ID="TextBox1" runat="server" Width="161px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Required*" ControlToValidate="TextBox1"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label3" runat="server" Text="Address"></asp:Label>
                </td>
                <td class="auto-style11">
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="MultiLine"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ErrorMessage="Required*" ControlToValidate="TextBox2"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label4" runat="server" Text="Gender"></asp:Label>
                </td>
                <td class="auto-style11">
                    <asp:RadioButtonList ID="RadioButtonList1" runat="server" OnSelectedIndexChanged="RadioButtonList1_SelectedIndexChanged">
                        <asp:ListItem>Male</asp:ListItem>
                        <asp:ListItem>Female</asp:ListItem>
                    </asp:RadioButtonList>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ErrorMessage="Required*" ControlToValidate="RadioButtonList1"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label5" runat="server" Text="Course"></asp:Label>
                </td>
                <td class="auto-style11">
                    <asp:DropDownList ID="DropDownList1" runat="server">
                        <asp:ListItem>mca</asp:ListItem>
                        <asp:ListItem>bca</asp:ListItem>
                        <asp:ListItem>betch</asp:ListItem>
                    </asp:DropDownList>
                </td>
            </tr>
            <tr>
                <td class="auto-style8">
                    <asp:Label ID="Label6" runat="server" Text="Email"></asp:Label>
                </td>
                <td class="auto-style9">
                    <asp:TextBox ID="TextBox4" runat="server" Width="168px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Required*" ControlToValidate="TextBox4"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style5">
                    <asp:Label ID="Label7" runat="server" Text="Username"></asp:Label>
                </td>
                <td class="auto-style10">
                    <asp:TextBox ID="TextBox5" runat="server" OnTextChanged="TextBox5_TextChanged" Width="167px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Required*" ControlToValidate="TextBox5"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label8" runat="server" Text="password"></asp:Label>
                </td>
                <td class="auto-style11">
                    <asp:TextBox ID="TextBox6" runat="server" Width="165px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Required*" ControlToValidate="TextBox6"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label9" runat="server" Text="Confirm password"></asp:Label>
                </td>
                <td class="auto-style11">
                    <asp:TextBox ID="TextBox7" runat="server" Width="165px"></asp:TextBox>
                    <asp:CompareValidator ID="CompareValidator2" runat="server" ControlToCompare="TextBox6" ControlToValidate="TextBox7" ErrorMessage="password doesn't match"></asp:CompareValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style5">
                    <asp:Label ID="Label10" runat="server" Text="Image"></asp:Label>
                </td>
                <td class="auto-style10">
                    <asp:FileUpload ID="FileUpload1" runat="server" />
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" ErrorMessage="Required*" ControlToValidate="FileUpload1"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style5" colspan="2">
                   <center style="width: 294px"> 
                       <asp:CheckBoxList ID="CheckBoxList1" runat="server" style="margin-left: 0px">
                           <asp:ListItem>I accept the terms and conditions</asp:ListItem>
                       </asp:CheckBoxList>
                </center></td>
            </tr>
            <tr>
                <td class="auto-style5" colspan="2">
                  <center>  <asp:Button ID="Button1" runat="server" Text="Register" style="margin-left: 125px" Width="198px" />
               </center> </td>
            </tr>
        </table>
            </center>
    </form>
</body>
</html>
