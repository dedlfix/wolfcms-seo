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
<h1><?php echo __( 'Suggestions' ); ?></h1>

<h2><?php echo __( 'Meta description' ); ?></h2>

<h3><?php echo __( 'Missing meta descriptions' ); ?></h3>
<table>
    <?php foreach ( $suggestions['description']['missing'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions"> 
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            <td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __( 'Duplicate meta descriptions' ); ?></h3>

<h3><?php echo __( 'Long meta descriptions' ); ?></h3>
<table>
    <?php foreach ( $suggestions['description']['long'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __( 'Short meta descriptions' ); ?></h3>

<table>
    <?php foreach ( $suggestions['description']['short'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h2><?php echo __( 'Page titles' ); ?></h2>

<h3><?php echo __( 'Missing titles' ); ?></h3>
<table>
    <?php foreach ( $suggestions['title']['missing'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __( 'Duplicate titles' ); ?></h3>

<h3><?php echo __( 'Long titles' ); ?></h3>

<table>
    <?php foreach ( $suggestions['title']['long'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __( 'Short titles' ); ?></h3>

<table>
    <?php foreach ( $suggestions['title']['short'] as $suggestion ): ?>
        <tr>
            <td>
                <a href="<?php echo get_url( 'page/edit', $suggestion->id ); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __( 'visit' ); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>