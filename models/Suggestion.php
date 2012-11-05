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
        $suggestions['description']['duplicate'] = Page::find(array(
            'where' => 'description = "" OR description IS NULL'
        ));
        $suggestions['description']['long'] = Page::find(array(
            'where' => 'LENGTH(description) > ' . (int) $settings['max_descr_length']
        ));
        $suggestions['description']['short'] = Page::find(array(
            'where' => 'LENGTH(description) < ' . (int) $settings['min_descr_length']
        ));
        
        $suggestions['title']['missing'] = Page::find(array(
            'where' => 'title = "" OR title IS NULL'
        ));
        $suggestions['title']['duplicate'] = Page::find(array(
            'where' => 'description = "" OR description IS NULL'
        ));
        $suggestions['title']['long'] = Page::find(array(
            'where' => 'LENGTH(title) > ' . (int) $settings['max_title_length']
        ));
        $suggestions['title']['short'] = Page::find(array(
            'where' => 'LENGTH(title) < ' . (int) $settings['min_title_length']
        ));
        
        return $suggestions;
    }
}