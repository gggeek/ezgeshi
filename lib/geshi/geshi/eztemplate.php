<?php
/*************************************************************************************
 * eztemplate.php
 * ----------
 * Author: Jan Borsodi (jb@ez.no)
 * Author: G Giunta (gg@ez.no)
 * Copyright: (c) 2005 Jan Borsodi
 * Release Version: 1.2.0
 * SVN Revision Version: $Id: $
 * Date Started: 2005/17/01
 * Last Modified: $Date: 2005/17/01 10:14:00 $
 *
 * eZ template language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/02/23 (1.2.0)
 *  -  Modified links to help pages
 *  -  shrank keywords to 3 classes, as in the eZ Publish 4 online docs. Took keywords from there
 *  -  changed color schema to match the default php color schema (as highlighted by php self)
 * 2004/11/27 (1.0.0)
 *  -  Initial Release
 *
 * TODO
 * ----
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'eZ Publish template',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('{*' => '*}'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /// @todo inc symbol must go after include: shuffle groups?
        //        the same is valid for mod and module_params, etc...

        // Operators
        1 => array(
'append',
'array',
'array_sum',
'begins_with',
'compare',
'contains',
'ends_with',
'explode',
'extract',
'extract_left',
'extract_right',
'hash',
'implode',
'insert',
'merge',
'prepend',
'remove',
'repeat',
'reverse',
'unique' ),

        2 => array(
'currentdate',
'ezhttp',
'ezhttp_hasvariable',
'ezini',
'ezini_hasvariable',
'ezmodule',
'ezpreference',
'ezsys',
'fetch',
'module_params' ),

        3 => array(
'datetime',
'i18n',
'l10n',
'si' ),

        4 => array(
'image',
'imagefile',
'texttoimage' ),

        5 => array(
'and',
'choose',
'cond',
'eq',
'false',
'first_set',
'ge',
'gt',
'le',
'lt',
'ne',
'not',
'null',
'or',
'true' ),

        6 => array(
'abs',
'ceil',
'dec',
'div',
'floor',
'inc',
'max',
'min',
'mod',
'mul',
'rand',
'round',
'sub',
'sum' ),

        7 => array(
'action_icon',
'attribute',
'classgroup_icon',
'class_icon',
'content_structure_tree',
'ezpackage',
'flag_icon',
'gettime',
'icon_info',
'makedate',
'maketime',
'mimetype_icon',
'month_overview',
'pdf',
'roman',
'topmenu',
'treemenu' ),

        8 => array(
'append',
'autolink',
'begins_with',
'break',
'chr',
'compare',
'concat',
'contains',
'count_chars',
'count_words',
'crc32',
'downcase',
'ends_with',
'explode',
'extract',
'extract_left',
'extract_right',
'indent',
'insert',
'md5',
'nl2br',
'ord',
'pad',
'prepend',
'remove',
'repeat',
'reverse',
'rot13',
'shorten',
'simpletags',
'simplify',
'trim',
'upcase',
'upfirst',
'upword',
'wash',
'wordtoimage',
'wrap' ),

        9 => array(
'exturl',
'ezdesign',
'ezimage',
'ezroot',
'ezurl' ),

        10 => array(
'count',
'float',
'get_class',
'get_type',
'int',
'is_array',
'is_boolean',
'is_class',
'is_float',
'is_integer',
'is_null',
'is_numeric',
'is_object',
'is_set',
'is_string',
'is_unset' ),

        // Functions
        11 => array(
'debug-accumulator',
'debug-timing-point',
'debug-trace' ),

        12 => array(
'cache-block',
'fetch_alias',
'include',
'ldelim',
'literal',
'rdelim',
'run-once' ),

        13 => array(
'append-block',
'def',
'default',
'let',
'sequence',
'set',
'set-block',
'undef' ),

    14 => array(
'attribute_edit_gui',
'attribute_pdf_gui',
'attribute_result_gui',
'attribute_view_gui',
'class_attribute_edit_gui',
'class_attribute_view_gui',
'collaboration_icon',
'collaboration_participation_view',
'collaboration_simple_message_view',
'collaboration_view_gui',
'content_pdf_gui',
'content_version_view_gui',
'content_view_gui',
'event_edit_gui',
'node_view_gui',
'related_view_gui',
'shop_account_view_gui',
'tool_bar',

'delimiter' // outside of docs, but still in use
            ),

        // Control structures
        15 => array(
//Conditional control
'if',
'switch' ),

        16 => array( //Looping
'do',
'for',
'foreach',
'while' ),

        17 => array( //Deprecated
'section',
            ),
        ),
    'SYMBOLS' => array(
        '|', '(', '[', ')', ']', '=', '/'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        11 => false,
        12 => false,
        13 => false,
        14 => false,
        15 => false,
        16 => false,
        17 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF;',        //Operators
            2 => 'color: #0600FF;',
            3 => 'color: #0600FF;',
            4 => 'color: #0600FF;',
            5 => 'color: #0600FF;',
            6 => 'color: #0600FF;',
            7 => 'color: #0600FF;',
            8 => 'color: #0600FF;',
            9 => 'color: #0600FF;',
            10 => 'color: #0600FF;',
            11 => 'color: #0600FF;',        //Functions
            12 => 'color: #0600FF;',
            13 => 'color: #0600FF;',
            14 => 'color: #0600FF;',
            15 => 'color: #0600FF;',        //Control structures
            16 => 'color: #0600FF;',
            17 => 'color: #0600FF;',
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #808080; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff8800;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #dd0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => ''
            ),
        'REGEXPS' => array(
            0 => 'color: #0000bb;',
            1 => 'color: #007700;',
            2 => 'color: #dd0000;'
            )
        ),
    'URLS' => array(
        1 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/arrays/{FNAME}',
        2 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/data_and_information_extraction/{FNAME}',
        3 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/formatting_and_internationalization/{FNAME}',
        4 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/images/{FNAME}',
        5 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/logical_operations/{FNAME}',
        6 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/mathematics/{FNAME}',
        7 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/miscellaneous/{FNAME}',
        8 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/strings/{FNAME}',
        9 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/urls/{FNAME}',
        10 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_operators/variable_and_type_handling/{FNAME}',

        11 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_functions/debugging/{FNAME}',
        12 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_functions/miscellaneous/{FNAME}',
        13 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_functions/variables/{FNAME}',
        14 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_functions/visualization/{FNAME}',

        15 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_control_structures/conditional_control/{FNAME}',
        16 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_control_structures/looping/{FNAME}',
        17 => 'http://ez.no/doc/ez_publish/technical_manual/4_x/reference/template_control_structures/deprecated/{FNAME}',

        ),
    'OOLANG' => false, // because we split on our own to highlight $x.y.z
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        /**
        * variables
        * @todo: there should be at most one colon
        * @todo: what about sub-elements of arrays?
        */
        0 => "[$][a-zA-Z_:][a-zA-Z0-9_:.]*",
        /// function parameters names OR variables in let/default
        1 => array(
            GESHI_SEARCH  => "([a-zA-Z_][a-zA-Z0-9_]*[ ]*)=",
            GESHI_REPLACE => '\1',
            GESHI_BEFORE => '',
            GESHI_AFTER => '=',
            GESHI_MODIFIERS => ''
            ),
        /// strings without quotes used on right hand of assignments
        2 => array(
            GESHI_SEARCH  => "=([ ]*[^$ '\"]+[^ ]*)",
            GESHI_REPLACE => '\1',
            GESHI_BEFORE => '=',
            GESHI_AFTER => '',
            GESHI_MODIFIERS => ''
        )
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '{literal}' => '{/literal}'
            ),
        1 => array(
            '{' => '}'
            )
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false,
        1 => true
        )
);

?>
