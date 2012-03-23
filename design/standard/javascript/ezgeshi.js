/**
 Utilities for usage with the ezgeshi extension
 Requires JQuery
 */
(function( $ )
{
    $(document).ready(
        function()
        {
            // replace all debug links to visual/templateview with links to geshi template view
            // can not be done, since we don't have the complete path to the template
            /*$('#debug a[href*="/visual/templateview/"]').each(
                function( index )
                {
                    var href = $(this).attr( "href" );
                    var newHref = href.replace( '/visual/templateview/', '/geshi/highlight/' );
                    $(this).attr( "href", newHref );
                }
            )*/


            // replace all links to visual/edit with links to geshi template view
            $('#debug a[href*="/visual/templateedit/"]').each(
                function( index )
                {
                    $(this).attr( "href", $(this).attr( "href" ).replace( '/visual/templateedit/', '/geshi/highlight/' ) );
                }
            )
            // and make this apparent in the "edit" buttons title in debug table
            $('#debug a[ href*="/geshi/highlight/"] > img').each(
                function( index )
                {
                    $(this).attr( "alt", "View template" );
                    $(this).attr( "title", "View template" );
                    $(this).attr( "src", $(this).attr( "src" ).replace( '/edit.gif', '/find.png' ) );
                }
            )
            $("#templateusage th:contains('Edit')").html('View');

            // @bug will not work if in non-vhost mode but with no index.php in path
            var prefix = '';
            if ( document.location.pathname.indexOf( 'index.php' ) != -1 )
            {
                prefix = document.location.pathname.substr( 0, document.location.pathname.indexOf( '/', document.location.pathname.indexOf( 'index.php' ) + 10 ) );
            }

            // add links to included php files list (from ez 2012.3 / 4.7)
            // @todo we should remove to remove path to eZ from the link
            $('#debug_includes td').each(
                function( index )
                {

                    if ( $(this).html().substring( 0, 3 ) != '<b>' )
                    {
                        $(this).html( '<a href="' + prefix + '/geshi/highlight/' + $(this).html().replace( /\\/g, '/' ) + '">'  + $(this).html() + '</a>' );
                    }
                }
            )

            // add links to css/js files included by ezjscore
            $('#ezjscpackerusage td:last-child').each(
                function( index )
                {
                    var list = $(this).html().split( /<br>/g );
                    //alert ( typeof list );
                    for ( var i = 0; i < list.length; i++ )
                    {
                        list[i] = '<a href="' + prefix + '/geshi/highlight/' + list[i].replace( /\\/g, '/' ) + '">'  + list[i] + '</a>'
                    }
                    //alert(alist);
                    $(this).html( list.join( '<br/>' ) );
                }
            )

            // last but not least, in error messages that mention tpl files
            $('#debug table[title="Table for actual debug output, shows notices, warnings and errors"] tr[class="error"]').each(
                function( index )
                {
                    var file = $(this).next().find( 'pre' ).html().match( /@ .+:[0-9]+\[[0-9]+\]/ );
                    if ( file != null )
                    {
                        file = file[0].substr( 2, file[0].indexOf( ':' ) -2 );
                        msg.html( msg.html().replace( file, '<a href="' + prefix + '/geshi/highlight/' + file + '">' + file + '</a>' ) );
                    }
                }
            )
        }
    );

})(jQuery);
