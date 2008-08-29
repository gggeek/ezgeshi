<?php

class ezshInfo
{
    function info()
    {
        return array( 'Name' => "eZ Geshi (a.k.a. eZSH, a.k.a. eZ Syntax Highlighter)",
                      'Version' => "1.2",
                      'Copyright' => "Copyright (C) 2005-2006 Lukasz Serwatka",
                      'License' => "GNU General Public License v2.0",
                      'Includes the following third-party software' => array( 'Name' => 'GeSHi - Generic Syntax Highlighter',
                                                                              'Version' => '1.0.8',
                                                                              'License' => 'GNU General Public License v2.0',
                                                                              'For more information' => 'http://qbnz.com/highlighter/' )
                      );
    }
}

?>
