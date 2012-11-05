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
 * @version     0.2.1
 */

?>
<h1><?php echo __('Settings'); ?></h1>

<form method="post" action="<?php echo get_url('plugin/seo/settings'); ?>">
<table cellspacing="5" cellpadding="5" border="0">
    <tr>
        <td><strong><label for="min_title"><?php echo __('Minimum title length'); ?></label></strong></td>
        <td>
            <input type="text" id="min_title" name="setting[min_title_length]" value="<?php echo $settings['min_title_length']; ?>" />
        </td>
    </tr>
    <tr>
        <td><strong><label for="max_title"><?php echo __('Maximum title length'); ?></label></strong></td>
        <td>
            <input type="text" id="max_title" name="setting[max_title_length]" value="<?php echo $settings['max_title_length']; ?>" />
        </td>
    </tr>
    <tr>
        <td><strong><label for="min_descr"><?php echo __('Minimum description length'); ?></label></strong></td>
        <td>
            <input type="text" id="min_descr" name="setting[min_descr_length]" value="<?php echo $settings['min_descr_length']; ?>" />
        </td>
    </tr>
    <tr>
        <td><strong><label for="max_descr"><?php echo __('Maximum description length'); ?></label></strong></td>
        <td>
            <input type="text" id="max_descr" name="setting[max_descr_length]" value="<?php echo $settings['max_descr_length']; ?>" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="save" value="<?php echo __('Save Settings'); ?>" />
        </td>
    </tr>
</table>
</form>
