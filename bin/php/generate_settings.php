#!/usr/bin/env php
<?php

require 'autoload.php';

//include_once( 'kernel/classes/ezscript.php' );
//include_once( 'lib/ezutils/classes/ezcli.php' );
include_once( 'extension/ezsh/lib/geshi/geshi.php' );

$cli = eZCLI::instance();

$scriptSettings = array();
$scriptSettings['description'] = 'Generate content settings from the GeSHi language files';
$scriptSettings['use-session'] = true;
$scriptSettings['use-modules'] = true;
$scriptSettings['use-extensions'] = true;

$script = eZScript::instance( $scriptSettings );
$script->startup();

$config = '';
$argumentConfig = '';
$optionHelp = false;
$arguments = false;
$useStandardOptions = true;

$options = $script->getOptions( $config, $argumentConfig, $optionHelp, $arguments, $useStandardOptions );
$script->initialize();

$languageDirPath = 'extension/ezsh/lib/geshi/geshi';
$handle = opendir( $languageDirPath );

$langs = array();

while ( false !== ( $file = readdir( $handle ) ) )
{
    if ( $file == '.' || $file == '..' )
    {
        continue;
    }

    //$cli->output( $file );

    $languageFilePath = $languageDirPath . '/' . $file;

    $language_data = array();
    ob_start();
    include( $languageFilePath );
    ob_end_clean();
    if ( isset( $language_data['LANG_NAME'] ) )
    {
        $langIdentifier = basename( $file, '.php' );
        $langs[$langIdentifier] = $language_data['LANG_NAME'];
    }
}

natcasesort( $langs );

$cli->output( '[literal]' );
foreach ( $langs as $identifier => $name )
{
    $cli->output( 'AvailableClasses[]=' . $identifier );
}

$cli->output( '' );

foreach ( $langs as $identifier => $name )
{
    $cli->output( 'ClassDescription[' . $identifier . ']=' . $name );
}

$script->shutdown( 0 );

?>