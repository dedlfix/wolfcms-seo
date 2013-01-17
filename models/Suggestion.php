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

class Suggestion extends Record {
    const TABLE_NAME = 'page';
    
    public static function findAll() {
        $suggestions = array();
        $settings = Plugin::getAllSettings('seo');
        
        $suggestions['description'] = array();
        $suggestions['title']       = array();
        
        $suggestions['description']['missing'] = Page::find(array(
            'where' => 'description = "" OR description IS NULL'
        ));
        $suggestions['description']['duplicate'] = Record::query('
            SELECT id, slug, breadcrumb, title, page.description FROM page
            INNER JOIN (SELECT description FROM page
            GROUP BY description HAVING count(id) > 1) dup ON page.description = dup.description ORDER BY description')
                ->fetchAll(PDO::FETCH_CLASS);
        $suggestions['description']['long'] = Page::find(array(
            'where' => 'LENGTH(description) > ' . (int) $settings['max_descr_length']
        ));
        $suggestions['description']['short'] = Page::find(array(
            'where' => 'LENGTH(description) < ' . (int) $settings['min_descr_length']
        ));
        
        $suggestions['title']['missing'] = Page::find(array(
            'where' => 'title = "" OR title IS NULL'
        ));
        $suggestions['title']['duplicate'] = Record::query('
            SELECT id, slug, breadcrumb, description, page.title FROM page
            INNER JOIN (SELECT title FROM page
            GROUP BY title HAVING count(id) > 1) dup ON page.title = dup.title ORDER BY title')
                ->fetchAll(PDO::FETCH_CLASS);
        $suggestions['title']['long'] = Page::find(array(
            'where' => 'LENGTH(title) > ' . (int) $settings['max_title_length']
        ));
        $suggestions['title']['short'] = Page::find(array(
            'where' => 'LENGTH(title) < ' . (int) $settings['min_title_length']
        ));
        
        return $suggestions;
    }
}