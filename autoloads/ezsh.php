<?php

class eZSH
{

    function operatorList()
    {
        return array( 'ezsh' );
    }

    function namedParameterPerOperator()
    {
        return true;
    }

    function namedParameterList()
    {
        return array( 'ezsh' => array( 'source' => array( 'type' => 'string',
                                                          'required' => true ),
                                       'language' => array( 'type' => 'string',
                                                            'required' => false,
                                                            'default' => 'php' ) ) );
    }

    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {
        $source = $namedParameters['source'];
        $language = $namedParameters['language'];

        switch ( $operatorName )
        {
            case 'ezsh':
            {
                //include_once( 'extension/ezsh/lib/geshi/geshi.php' );

                $geshi = new GeSHi( $source, $language );
                $operatorValue = $geshi->parse_code();
                // temp fix for weird results from ezini lang results
                if ( substr( $operatorValue, 0, 90 ) == '<pre class="ezini" style="font-family:monospace;">span style="background-color: yellow;"> ')
                {
                    $operatorValue = '<pre class="ezini" style="font-family:monospace;"><span>' . substr( $operatorValue, 90 );
                }
                $error = $geshi->error();
                if ( $error != false )
                {
                    eZDebug::writeWarning( 'In tpl operator ezsh: ' . strip_tags( $error ), __METHOD__ );
                }
            } break;
        }
    }
}

?>