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

        }
    );

})(jQuery);