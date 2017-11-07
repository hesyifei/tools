<?php
/******************************* Navbar Of All Tools *******************************/
/*
Function: get_navbar($title)

Variable: 
$title (*)

E.G.: 
$title = "My Tools"

Hint: 
This function usually used by it own. It always go with get_header.
*/
?>
<?php function get_navbar($title) { ?>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"><?php echo $title; ?></a></li>
				<li><a href="https://www.arefly.com/about/" title="<?php echo sprintf(_('About %s'), get_option("site_name")); ?>" target="_blank"><?php echo _("About"); ?></a></li>
				<li><a href="https://www.arefly.com/guest-book/" title="<?php echo _("Guest Book"); ?>" target="_blank"><?php echo _("Guest Book"); ?></a></li>
				<li><a href="<?php echo get_option("tools_url"); ?>" title="<?php echo _("All Tools"); ?>" target="_blank"><?php echo _("All Tools"); ?></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo get_option("site_url"); ?>" title="<?php echo get_option("site_name"); ?>" target="_blank"><?php echo sprintf(_('Back To %s'), get_option("site_name")); ?></a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<?php } ?>
