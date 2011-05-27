<form name="settings_update" id="settings_update" method="post" action="<?= base_url() ?>api/settings/modify" enctype="multipart/form-data">
<div class="content_wrap_inner">

	<div class="content_inner_top_right">
		<h3>Module</h3>
		<p><?= form_dropdown('enabled', config_item('enable_disable'), $settings['bookmarks']['enabled']) ?></p>
	</div>

	<h3>Links</h3>

	<p>Display Categories
	<?= form_dropdown('categories_display', config_item('yes_or_no'), $settings['bookmarks']['categories_display']) ?>
	</p>
	
	<p>Date
	<?= form_dropdown('date_style', config_item('date_style_types'), $settings['bookmarks']['date_style']) ?>
	</p>	

	<h3>URL Shortening</h3>

	<p>Shorten
	<?= form_dropdown('shorten_url', config_item('yes_or_no'), $settings['bookmarks']['shorten_url']) ?>
	</p>

	<p>URL Shortener
	<?= form_dropdown('url_shortener', config_item('url_shortener'), $settings['bookmarks']['url_shortener']) ?>
	</p>

</div>

<span class="item_separator"></span>

<div class="content_wrap_inner">
			
	<h3>Comments</h3>	

	<p>Allow
	<?= form_dropdown('comments_allow', config_item('yes_or_no'), $settings['bookmarks']['comments_allow']) ?>
	</p>

	<p>Comments Per-Page
	<?= form_dropdown('comments_per_page', config_item('amount_increments_five'), $settings['bookmarks']['comments_per_page']) ?>
	</p>

	<input type="hidden" name="module" value="bookmarks">

	<p><input type="submit" name="save" value="Save" /></p>

</div>
</form>

<?= $shared_ajax ?>