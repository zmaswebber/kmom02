<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Home',   
            'url'   => '',  
            'title' => 'Some title 1'
        ],
 
        // This is a menu item
        'redovisning'  => [
            'text'  => 'Redovisning',   
            'url'   => 'redovisning',   
            'title' => 'Some title 2',

        ],
 
        // This is a menu item
        'Source' => [
            'text'  =>'About', 
            'url'   =>'source',  
            'title' => 'Some title 3'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
