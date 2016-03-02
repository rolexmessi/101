<?php
global $spp_settings;
$spp_settings = new stdClass;

// You can have more than one rewrite rule now
$spp_settings->url_rewrites = array( 
    'tag' => array('separator' => '-', 'rule' => 'tags/(.*)', 'index' => 1, 'permalink' => 'tags/{{ term }}' ), //0

    'index_image' => array('separator' => '-', 'rule' => 'tag/(.*)', 'index' => 1, 'permalink' => 'tag/{{ term }}' ),
    'single_image' => array('separator' => '-', 'rule' => 'images/(.*)', 'index' => 1, 'permalink' => 'images/{{ term }}' ), //3    
    
    
    'index_video' => array('separator' => '-', 'rule' => 'tag/(.*)', 'index' => 1, 'permalink' => 'tag/{{ term }}' ), //5
    'single_video' => array('separator' => '-', 'rule' => 'videos/(.*)', 'index' => 1, 'permalink' => 'videos/{{ term }}' ),

    // separator, rewrite, preg_index
	);

// Default filters before displayed
$spp_settings->default_filters = array(
    'remove' => array('Instantly connect to whats most important to you.', '...', '..'),
    );

// if set to true, StupidPie will only store search terms if visitor is coming from specific country i.e: array('US','UK','DE')
$spp_settings->country_targeting = array();

// filter bad domains here
$spp_settings->bad_urls = array('youporn.com', 'facebook.com', 'snapchaton.com');

// this words will be automatically removed, and if the title contains these words, it will return 404 not found
$spp_settings->bad_words = 'kripalu';
