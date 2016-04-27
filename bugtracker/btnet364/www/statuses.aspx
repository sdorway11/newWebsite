<%@ Page language="C#"%>
<!--
Copyright 2002-2014 Corey Trager
Distributed under the terms of the GNU General Public License
-->
<!-- #include file = "inc.aspx" -->

<script language="C#" runat="server">


DataSet ds;

Security security;

void Page_Load(Object sender, EventArgs e)
{

	Util.do_not_cache(Response);
	
	security = new Security();
	security.check_security( HttpContext.Current, Security.MUST_BE_ADMIN);


	titl.InnerText = Util.get_setting("AppTitle","BugTracker.NET") + " - "
		+ "statuses";

	ds = btnet.DbUtil.get_dataset (
		@"select st_id [id],
		st_name [status],
		st_sort_seq [sort seq],
		st_style [css<br>class],
		case when st_default = 1 then 'Y' else 'N' end [default],
		st_id [hidden]
		from statuses order by st_sort_seq");

}



</script>

<html>
<head>

<title id="titl" runat="server">btnet statuses</title>
<link rel="StyleSheet" href="btnet.css" type="text/css">
<script type="text/javascript" language="JavaScript" src="sortable.js"></script>
</head>

<body>
<% security.write_menu(Response, "admin"); %>

<div class=align>
<a href=edit_status.aspx>add new status</a>
</p>
<%


if (ds.Tables[0].Rows.Count > 0)
{
	SortableHtmlTable.create_from_dataset(
		Response, ds, "edit_status.aspx?id=", "delete_status.aspx?id=");

}
else
{
	Response.Write ("No statuses in the database.");
}
%>
</div>
<% Response.Write(Application["custom_footer"]); %></body>
</html>