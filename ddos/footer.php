<script id="t-img" type="text/template">
	<img style="display: none;" id="img-<%= i %>" src="<%= url %>" />
</script>
<script id="t-sites" type="text/template">
<% _.each(sites, function (site) { %>
<tr>
	<td class="text-left" style="padding-right: 15px;"><%= site.url %></td>
	<td class="text-left" style="padding-right: 15px;">攻擊了 <%= site.requested %> 次網頁</td>
	<td class="text-left" style="padding-right: 15px;"><button onclick="toggleStop(<%= site.id %>)" class="btn btn-<%= site.disabled ? "success" : "danger" %>"><%= site.disabled ? "啟用" : "停用" %></td>
</tr>
<% }); %>
</script>