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
    	// @todo inc symbol must go after include: shuffle groups?
    	// the same is valid for mod and module_params, etc...

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
'unique',
'currentdate',
'ezhttp',
'ezhttp_hasvariable',
'ezini',
'ezini_hasvariable',
'ezmodule',
'ezpreference',
'ezsys',
'fetch',
'module_params',

'datetime',
'i18n',
'l10n',
'si',

'image',
'imagefile',
'texttoimage',

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
'true',

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
'sum',

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
'treemenu',


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
'wrap',

'exturl',
'ezdesign',
'ezimage',
'ezroot',
'ezurl',

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
'is_unset',
			),
		// Functions
        2 => array(
'debug-accumulator',
'debug-timing-point',
'debug-trace',

'cache-block',
'fetch_alias',
'include',
'ldelim',
'literal',
'rdelim',
'run-once',

'append-block',
'def',
'default',
'let',
'sequence',
'set',
'set-block',
'undef',

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
		3 => array(
//Conditional control
'if',
'switch',
//Looping
'do',
'for',
'foreach',
'while',
//Deprecated
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
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #0600FF;',		//Operators
			2 => 'color: #0600FF;',		//Functions
			3 => 'color: #0600FF;',		//Control structures
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
			0 => ''
			),
		'REGEXPS' => array(
			0 => 'color: #0000bb;',
			1 => 'color: #007700;'
			)
		),
	'URLS' => array(
		1 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchContentClassID=31',
		2 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchContentClassID=34',
		3 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchContentClassID=23',
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.'
		),
	'REGEXPS' => array(
		0 => "[$][a-zA-Z_:][a-zA-Z0-9_:]*", // variables (todo: there should be at most one colon)
		1 => "[a-zA-Z_][a-zA-Z0-9_]*=", // function parameters names OR variables in let
		1 => array(
            GESHI_SEARCH  => "([a-zA-Z_][a-zA-Z0-9_]*)=",
            GESHI_REPLACE => '\1',
            GESHI_BEFORE => '',
            GESHI_AFTER => '=',
            GESHI_MODIFIERS => ''
            )
		),
	'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
	'SCRIPT_DELIMITERS' => array(
		0 => array(
			'{' => '}'
			)
	),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		0 => true
		)
);

?>
