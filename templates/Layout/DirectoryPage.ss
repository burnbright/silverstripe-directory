<div class="container">
	<h1>$Title</h1>
	$Content
	<% if Listings %>
		<% loop Listings %>
			<% include DirectoryListing %>
		<% end_loop %>
	<% else %>
		<p class="message warning">No Listings available.</p>
	<% end_if %>
	$Form
	$PageComments
</div>
