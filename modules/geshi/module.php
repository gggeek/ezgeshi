<?php

$Module = array( 'name' => 'GeSHi' );

$ViewList = array(
    'highlight' => array(
        'functions' => array( 'view_ezpublish_source or view_any_source' ),
        'script' => 'highlight.php',
        'default_navigation_part' => 'ezsetupnavigationpart',
        'params' => array(),
        'unordered_params' => array( 'language' => 'Language' ) )
);

$FunctionList = array(
    'view_ezpublish_source' => array(),
    'view_any_source' => array(),
);

?>