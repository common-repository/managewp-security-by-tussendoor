<div class="wrap managewp_security">
	<div class="section">
		<div class="grid-12">
			<h2><?php _e('ManageWP Security settings', 'managewp_security') ?></h2>
			<?php if( $this->message ): $this->show_message(); endif; ?>
			<form method="post" action="admin.php?page=managewp_security_settings">
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row"><label for="managewp_security_cron"><?php _e('Interval', 'managewp_security') ?></label></th>
						<td>
							<small><?php _e('Select the interval and the users from whom the password has to be reset.', 'managewp_security'); ?></small><br>
							<select class="widefat" id="managewp_security_cron" name="managewp_security_cron">
								<option value="disabled" <?php selected('disabled', get_option('managewp_security_cron')); ?>> - <?php _e('Disabled', 'managewp_security'); ?> - </option>
								<option value="daily" <?php selected('daily', get_option('managewp_security_cron')); ?>><?php _e('Daily', 'managewp_security'); ?></option>
								<option value="weekly" <?php selected('weekly', get_option('managewp_security_cron')); ?>><?php _e('Weekly', 'managewp_security'); ?></option>
								<option value="monthly" <?php selected('monthly', get_option('managewp_security_cron')); ?>><?php _e('Monthly', 'managewp_security'); ?></option>
							</select>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><label for="managewp_security_users"><?php _e('Users', 'managewp_security') ?></label></th>
						<td>
							<select class="widefat" id="managewp_security_users" name="managewp_security_users[]" multiple="multiple">
								<?php $users = get_users(); ?>
								<?php foreach( $users as $user ): ?>
									<?php echo '<option value="'.$user->ID.'" '.(in_array($user->ID, get_option('managewp_security_users')) ? 'selected="selected"' : '').'>'.$user->data->display_name.'</option>'; ?>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
				</table>
				<p class="submit">
					<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save changes', 'managewp_security') ?>">
				</p>
			</form>
		</div>
	</div>

	<div class="section footer">
		<div class="grid-8">
			<h2>Vragen, support of ondersteuning?</h2>
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTussendoorHQ&amp;width=268&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=401010490009584" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:180px;" allowtransparency="true"></iframe>
			<p>Like ons op Facebook</p>
		</div>
		<div class="grid-4">
			<h2>Meer plugins?</h2>
			<ul class="more-plugins">
				<li><a href="http://wordpress.org/plugins/tussendoor-shopp-12-nl" target="_blank">Tussendoor Shopp 1.2.* NL / Dutch plugin</a></li>
				<li><a href="http://wordpress.org/plugins/minimum-length-for-contact-form-7" target="_blank">Contact Form 7 minlength extension</a></li>
				<li><a href="http://codecanyon.net/item/uberwidget-wordpress-sidebar-widget-plugin/3444977?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Uberwidget! Wordpress sidebar &amp; widget plugin</a></li>
				<li><a href="http://codecanyon.net/item/combine-messages/3177125?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Combine messages</a></li>
				<li><a href="http://codecanyon.net/item/anywall/403570?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Anywall</a></li>
				<li><a href="http://codecanyon.net/item/landingpages/301422?WT.ac=portfolio_item&amp;WT.seg_1=portfolio_item&amp;WT.z_author=Tussendoor&amp;ref=Tussendoor" target="_blank">Landingpages</a></li>
				<li><a href="http://www.tussendoor.nl/wordpress-plugins/" target="_blank">Tussendoor plugins</a></li>
			</ul>
		</div>
	</div>
</div>