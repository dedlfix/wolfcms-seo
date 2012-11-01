<?php
header("Content-Type: application/xml");

function snippet_xml_sitemap($parent)
{
    $out = '';
    $childs = $parent->children();
    if (count($childs) > 0)
    {
        foreach ($childs as $child)
        {
            if($child->getLoginNeeded() == Page::LOGIN_REQUIRED)
            {
                continue;
            }
            $out .= "        <url>\n";
            $out .= "            <loc>".$child->url()."</loc>\n";
            $out .= "            <lastmod>".$child->date('%Y-%m-%d', 'updated')."</lastmod>\n";
            $out .= "            <changefreq>".($child->hasContent('changefreq') ? $child->content('changefreq'): 'weekly')."</changefreq>\n";
            $out .= "            <priority>0.5</priority>\n";
            $out .= "        </url>\n";
            $out .= snippet_xml_sitemap($child);
        }
    }
    return $out;
}

$home = Page::find('/');
?>
<?php echo '<?'; ?>xml version="1.0" encoding="UTF-8" <?php echo '?>'; ?> 
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc><?php echo $home->url(); ?></loc>
            <lastmod><?php echo $home->date('%Y-%m-%d', 'updated'); ?></lastmod>
            <changefreq><?php echo ($home->hasContent('changefreq') ? $home->content('changefreq'): 'weekly'); ?></changefreq>
            <priority>1.0</priority>
        </url>
<?php echo snippet_xml_sitemap(Page::find('/')); ?>
    </urlset>