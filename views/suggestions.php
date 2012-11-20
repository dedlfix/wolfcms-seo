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
 * @author      Nic Wortel <nic.wortel@nth-root.nl>
 * @copyright   Nic Wortel, 2012
 * @version     0.2.1
 */

?>
<h1><?php echo __('Suggestions'); ?></h1>

<h2><?php echo __('Meta description'); ?></h2>

<h3><?php echo __('Missing meta descriptions'); ?></h3>

<ul>
    <?php foreach ($suggestions['description']['missing'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h3><?php echo __('Duplicate meta descriptions'); ?></h3>

<h3><?php echo __('Long meta descriptions'); ?></h3>

<ul>
    <?php foreach ($suggestions['description']['long'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h3><?php echo __('Short meta descriptions'); ?></h3>

<ul>
    <?php foreach ($suggestions['description']['short'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h2><?php echo __('Page titles'); ?></h2>

<h3><?php echo __('Missing titles'); ?></h3>

<ul>
    <?php foreach ($suggestions['title']['missing'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h3><?php echo __('Duplicate titles'); ?></h3>

<h3><?php echo __('Long titles'); ?></h3>

<ul>
    <?php foreach ($suggestions['title']['long'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>

<h3><?php echo __('Short titles'); ?></h3>

<ul>
    <?php foreach ($suggestions['title']['short'] as $suggestion): ?>
    <li><a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a></li>
    <?php endforeach; ?>
</ul>