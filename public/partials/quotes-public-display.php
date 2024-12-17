<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://saulmoniquedev.com/
 * @since      1.0.0
 *
 * @package    Quotes
 * @subpackage Quotes/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="popup-outside">
    <div class="inner-popup">
        <form action="<?php echo esc_url(admin_url("admin-post.php")); ?> " method="post">
            <input type="hidden" name="action" value="handle_form_submission" >
            <label for="name">Name<input name="name" type="text" ></label>
            <label for="last-name">Last name<input name="last-name" type="text" ></label>
            <label for="phone">Phone<input name="phone" type="tel" ></label>
            <input type="submit" value="SEND">
        </form>
    </div>
</div>