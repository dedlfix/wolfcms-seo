<?php
if (!defined('IN_CMS')) {
    exit();
}

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
<h1><?php echo __('Suggestions'); ?></h1>

<h2><?php echo __('Meta description'); ?></h2>

<h3><?php echo __('Missing meta descriptions'); echo (count($suggestions['description']['missing'])>0) ? ' <i> &#10008; (' . count($suggestions['description']['missing']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>
<table>
    <?php foreach ($suggestions['description']['missing'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions"> 
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __('Duplicate meta descriptions'); echo (count($suggestions['description']['duplicate'])>0) ? ' <i> &#10008; (' . count($suggestions['description']['duplicate']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>

    <?php
    $lastDescription = '';
    foreach ($suggestions['description']['duplicate'] as $suggestion):
        $page = Page::findById($suggestion->id);
    ?>
    <?php
    if ($lastDescription != $suggestion->description):
        echo ($lastDescription !== '') ? '</table>' : '';
        ?>

        <div class="groupheader">
        <?php echo $suggestion->description; ?>
        </div>
        <table class="group">
    <?php endif; ?>

        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>">/<?php echo $page->getUri(); ?></a>
                <div>
                    <small class="description"><?php echo (strlen($suggestion->title) > 70) ? substr($suggestion->title, 0, 70) . '...' : $suggestion->title; ?></small>
                </div>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $page->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
        <?php
        $lastDescription = $suggestion->description;
        ?>
<?php endforeach; ?>
</table>

<h3><?php echo __('Long meta descriptions'); echo (count($suggestions['description']['long'])>0) ? ' <i> &#10008; (' . count($suggestions['description']['long']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>
<table>
    <?php foreach ($suggestions['description']['long'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __('Short meta descriptions'); echo (count($suggestions['description']['short'])>0) ? ' <i> &#10008; (' . count($suggestions['description']['short']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>

<table>
    <?php foreach ($suggestions['description']['short'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h2><?php echo __('Page titles'); ?></h2>

<h3><?php echo __('Missing titles'); echo (count($suggestions['title']['missing'])>0) ? ' <i> &#10008; (' . count($suggestions['title']['missing']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>
<table>
    <?php foreach ($suggestions['title']['missing'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3><?php echo __('Duplicate titles'); echo (count($suggestions['title']['duplicate'])>0) ? ' <i> &#10008; (' . count($suggestions['title']['duplicate']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>

    <?php
    $lastTitle = '';
    foreach ($suggestions['title']['duplicate'] as $suggestion):
        $page = Page::findById($suggestion->id);
    ?>
    <?php
    if ($lastTitle != $suggestion->title):
        echo ($lastTitle !== '') ? '</table>' : '';
        ?>

        <div class="groupheader">
        <?php echo $suggestion->title; ?>
        </div>
        <table class="group">
    <?php endif; ?>

        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>">/<?php echo $page->getUri(); ?></a>
                <div>
                    <small class="description"><?php echo (strlen($suggestion->description) > 120) ? substr($suggestion->description, 0, 120) . '...' : $suggestion->description; ?></small>
                </div>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $page->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
        <?php
        $lastTitle = $suggestion->title;
        ?>
<?php endforeach; ?>
</table>


<h3><?php echo __('Long titles'); echo (count($suggestions['title']['long'])>0) ? ' <i> &#10008; (' . count($suggestions['title']['long']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>

<table>
<?php foreach ($suggestions['title']['long'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>

<h3><?php echo __('Short titles'); echo (count($suggestions['title']['short'])>0) ? ' <i> &#10008; (' . count($suggestions['title']['short']) . ')</i>' : ' <em>&#10004;</em>'; ?></h3>

<table>
<?php foreach ($suggestions['title']['short'] as $suggestion): ?>
        <tr>
            <td>
                <a href="<?php echo get_url('page/edit', $suggestion->id); ?>"><?php echo $suggestion->title; ?></a>
            </td>
            <td class="actions">
                <a href="<?php echo URL_PUBLIC . $suggestion->getUri(); ?>" target="_blank">[<?php echo __('visit'); ?>]</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>