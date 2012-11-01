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
 * @version     0.1.0
 */

?>
<h1><?php echo __('Settings'); ?></h1>
<br /><br />
<div id="media_gallery">

	<?php echo (isset($errorDesc)) ? $errorDesc : ''; ?>

	<form method="post" action="<?php echo get_url('plugin/media_gallery/settings'); ?>">
		<table cellspacing="5" cellpadding="5" border="0">
            <tr>
                <td><strong><?php echo __('Parent page'); ?></strong></td>
                <td>
                    <select name="setting[parent_id]">
                    <?php foreach ($parents as $parent): ?>
                        <option value="<?php echo $parent->id; ?>"<?php if ($settings['parent_id'] == $parent->id) echo ' selected="selected"'; ?>><?php echo $parent->title; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
				<td colspan="2">
					<br />
					<input type="submit" name="save" value="<?php echo __('Save Settings'); ?>" />
				</td>
			</tr>
		</table>
	</form>
    
</div>
