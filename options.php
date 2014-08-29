<div class="wrap">
<?php screen_icon();
      $domain_name =  preg_replace('/^www\./','',$_SERVER['SERVER_NAME']); ?>
  <h2>Mobile Detect</h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
  <form action="options.php" method="post" id="<?php echo $avrgmobdtctID; ?>_options_form" name="<?php echo $avrgmobdtctID; ?>_options_form">
<?php settings_fields($avrgmobdtctID.'_options'); ?>
        <label for="avrgmobdtct_redirect" ><strong>Mobile Redirect<span class="hideswitch"> Active</span>:</strong></label>
        <div style="display: inline;" class="offonswitch">
          <input type="checkbox" name="avrgmobdtct_redirect" class="offonswitch-checkbox" id="avrgmobdtct_redirect" value="1" <?php checked( '1', get_option('avrgmobdtct_redirect') ); ?> />
          <label class="offonswitch-label" for="avrgmobdtct_redirect">
            <div class="offonswitch-inner"></div>
            <div class="offonswitch-switch"></div>
          </label>
        </div>
      <p>
        <label for="the_mobile_site_uri" ><span class="dashicons dashicons-smartphone"></span> <strong>Mobile Website URL:</strong></label><br />
        <input id="the_mobile_site_uri" class="regular-text" type="text" name="the_mobile_site_uri" value="<?php
        if (!get_option('the_mobile_site_uri')){ echo 'http://'; }
        else { esc_attr_e( get_option('the_mobile_site_uri') ); }
        ?>" />
      </p>
      <p>
        <label for="non_mobile_site_uri" ><span class="dashicons dashicons-desktop"></span> <strong>Desktop Website URI:</strong></label><br />
        http://<input id="non_mobile_site_uri" class="all-options" type="text" name="non_mobile_site_uri" value="<?php
        if (!get_option('non_mobile_site_uri')){ echo $domain_name; }
        else { esc_attr_e( get_option('non_mobile_site_uri') ); }
        ?>" />/
      </p>
      <p><strong>Mobile Website Link Shortcode:</strong><br />
      <span class="shortcode">[mobilesitelink text="Override" class="override" page="override"]</span><br />
      <span class="shortcode">[mobilesitebutton text="Override" class="override" page="override"]</span><br />
      <span class="description">(mobilesitebutton only appears on mobile devices)</span></p>
<?php submit_button(); ?>
      <p class="description"><strong>Note:</strong> This version of Average Mobile Detect does not fully support subdomains in the Desktop Website URI field. This field is used to set the cookie for your desktop website, which tells it whether to redirect the device or not. However, you can still use a website that resides on a subdomain. To do this, omit all characters that come before the first period, but leave the period there (example: .your-website.com). Be aware that this will set the cookie for all subdomains pertaining to the root domain name (so in our example, the cookie would be set for all of these: m.your-website.com, www.your-website.com, other.your-website.com, even-unregistered-subdomains.your-website.com, etc.).</p>
  </form>
      </div> <!-- post-body-content -->
      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">
            <h2>Support Tickets</h2>
            <p>If you need custom support for this plugin (Average Mobile Detect) or any other Average plugin, you can purchase help with a support ticket below. Support tickets are responded to within 24 hours, but we answer them as soon as possible.</p>
            <p><strong>How it works</strong></p>
            <ol>
              <li>Purchase a support ticket below</li>
              <li>I contact you as soon as I can (no less than 24 hours) and help resolve your issue</li>
              <li>That's it!</li>
            </ol>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
  <input name="hosted_button_id" type="hidden" value="45JKXJDBN9AME" />
              <table><tbody><tr>
                <td><input name="on0" type="hidden" value="Please give your ticket a name" />Please give your ticket a name</td>
                </tr>
                <tr>
                  <td><input maxlength="200" name="os0" type="text" /></td>
                </tr>
                <tr>
                  <td><input name="on1" type="hidden" value="Best way to contact you" />Best way to contact you</td>
                </tr>
                <tr>
                  <td><input maxlength="200" name="os1" type="text" /></td>
                </tr></tbody></table>
              <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" type="image" />
              <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
            </form>
            <p><strong>Note</strong>: This is for&nbsp;<em>custom</em>&nbsp;needs for help, not problems with the plugin, or instructions that should already be explain in the description. If you feel there are important details omitted from the <a href="http://wordpress.org/plugins/average-wysiwyg-helper/" target="_blank">Description</a>, <a href="http://wordpress.org/plugins/average-wysiwyg-helper/installation/" target="_blank">Installation</a> steps, etc. of the plugin, please report them in the <a href="http://wordpress.org/support/plugin/average-wysiwyg-helper" target="_blank">Support forum</a>. Thanks!</p>
      </div> <!-- #postbox-container-1 .postbox-container -->
    </div> <!-- #post-body .metabox-holder .columns-2 -->
    <br class="clear">
  </div> <!-- #poststuff -->
</div>