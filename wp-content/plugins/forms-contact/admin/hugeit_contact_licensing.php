<?php if(! defined( 'ABSPATH' )) exit;?>
<?php
/**
 * Template for Licensing page
 */

?>
<div style="width:95%">
    <p style="font-size: 13px; line-height: 1.5; margin-top: 30px;">
        <?php _e('You are using the Lite version of the Forms Plugin for WordPress. If you want to get more awesome options,
            advanced features, settings to customize every area of the plugin, then check out the Full License plugin. The
            full version of the plugin is available in 3 different packages of one-time payment.','hugeit_contact'); ?>
    </p>
    <br><br><br>
    <a  target="_blank" href="http://huge-it.com/forms/" class="button-primary" target="_blank"><?php _e('Purchase a License', 'hugeit_contact' ); ?></a>
</div>
<div class="forms">
    <div class="forms-block">
        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon multiple"></span>
                <span class="text"><?php _e('Multiple Email For Recipients', 'hugeit_contact'); ?></span>
            </a>
        </div>
        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon newsletters"></span>
                <span class="text"><?php _e('Email Newsletters', 'hugeit_contact'); ?></span>
            </a>
        </div>
        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon themes"></span>
                <span class="text"><?php _e('Themes Customization', 'hugeit_contact'); ?></span>
            </a>
        </div>
        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon advanced"></span>
                <span class="text"><?php _e('Advanced Design', 'hugeit_contact'); ?></span>
            </a>
        </div>

        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon ready"></span>
                <span class="text"><?php _e('Ready-To-Go Fields', 'hugeit_contact'); ?></span>
            </a>
        </div>
        <div class="licens">
            <a href="http://huge-it.com/forms/" target="_blank">
                <span class="icon layout"></span>
                <span class="text"><?php _e('Layout Customization', 'hugeit_contact'); ?></span>
            </a>
        </div>
    </div>
</div>
<div style="width:95%; margin-top: 30px; font-size: 13px; line-height: 1.5;">
    <p><?php _e('After the purchasing the commercial version follow this steps:','hugeit_contact'); ?></p>
    <ol style="list-style: square; padding-left: 15px;">
        <li><?php _e('Deactivate Huge IT Forms Plugin','hugeit_contact'); ?></li>
        <li><?php _e('Delete Huge IT Forms','hugeit_contact'); ?></li>
        <li><?php _e('Install the downloaded commercial version of the plugin','hugeit_contact'); ?></li>
    </ol>
</div>
<?php
