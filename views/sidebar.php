<?php
if (!defined('IN_CMS')) { exit(); }

/**
 * SEO
 * 
 * Plugin for Search Engine Optimalization in Wolf CMS
 * 
 * @package     Plugins
 * @subpackage  SEO
 * 
 * @author      Nic Wortel <nd.wortel@gmail.com>
 * @copyright   Nic Wortel, 2012
 * @version     0.2.0
 */

?>
<p class="button">
    <a href="<?php echo get_url("plugin/seo"); ?>">
        <img width="32" height="32" src="<?php echo URL_PUBLIC; ?>wolf/icons/file-php-32.png" align="middle" alt="<?php echo __('Suggestions'); ?>" />
        <?php echo __('Suggestions'); ?>
    </a>
</p>
<p class="button">
    <a href="<?php echo get_url("plugin/seo/settings"); ?>">
        <img width="32" height="32" src="<?php echo URL_PUBLIC; ?>wolf/icons/settings-32.png" align="middle" alt="<?php echo __('Settings'); ?>" />
        <?php echo __('Settings'); ?>
    </a>
</p>
<div class="box">
    <h2><?php echo __('SEO plugin'); ?></h2>
    <p><?php echo __('Plugin for Search Engine Optimalization in Wolf CMS.'); ?></p>
</div>