<?php
/*************************************************************************************
 * eztemplate.php
 * ----------
 * Author: Jan Borsodi (jb@ez.no)
 * Copyright: (c) 2005 Jan Borsodi
 * Release Version: 1.0.0
 * CVS Revision Version: $Revision: 1.1 $
 * Date Started: 2005/17/01
 * Last Modified: $Date: 2005/17/01 10:14:00 $
 *
 * eZ template language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2004/11/27 (1.0.0)
 *  -  Initial Release
 *
 * TODO
 * ----
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'eZ template',
	'COMMENT_SINGLE' => array(),
	'COMMENT_MULTI' => array('{*' => '*}'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
		1 => array(
            'lt', 'gt', 'le',
            'ge', 'eq', 'ne', 'null',
            'not', 'true', 'false',
            'or', 'and', 'choose',
            'is_array', 'is_boolean', 'is_integer',
            'is_float', 'is_numeric', 'is_string',
            'is_object', 'is_class', 'is_null',
            'is_set', 'is_unset', 'get_type', 'get_class',
            'cond', 'first_set',
            'sum', 'sub', 'inc', 'dec',
            'div', 'mod', 'mul',
            'max', 'min',
            'abs', 'ceil', 'floor', 'round',
            'int', 'float',
            'count',
			),
        2 => array(
            'xhtml'
            ),
		3 => array(
			'section', 'section-else', 'section-exclude', 'section-include', 'delimiter',
            'switch', 'case', 'include', 'sequence', 'ldelim', 'rdelim',
			'let', 'set', 'default', 'set-block', 'append-block', 'run-once', 'cache-block', 'tool_bar', 'menu',
			'debug-timing-point', 'debug-accumulator', 'debug-trace', 'is_cached', 'from', 'item',
            'attribute_edit_gui', 'attribute_view_gui', 'attribute_result_gui',
            'attribute_pdf_gui', 'related_view_gui', 'node_view_gui',
            'content_view_gui', 'content_pdf_gui', 'shop_account_view_gui',
            'content_version_view_gui', 'collaboration_view_gui', 'collaboration_icon',
            'collaboration_simple_message_view', 'collaboration_participation_view',
            'event_edit_gui', 'event_view_gui','class_attribute_view_gui',
            'class_attribute_edit_gui'
			),
		4 => array(
            'array', 'hash', 'array_prepend', 'prepend',
            'array_append', 'append', 'array_merge', 'merge',
            'contains', 'compare', 'extract', 'extract_left', 'extract_right',
            'begins_with', 'ends_with', 'implode', 'explode',
            'repeat', 'reverse', 'insert', 'remove', 'replace',
            'unique', 'array_sum',
            'attribute', 'nl2br', 'concat', 'indent', 'si',
            'upcase',
            'downcase',
            'count_words',
            'count_chars',
            'trim',
            'break',
            'wrap',
            'upfirst',
            'upword',
            'simplify',
            'trim',
            'wash',
            'chr',
            'ord',
            'shorten',
            'pad',
            'crc32',
            'md5',
            'rot13',
            'roman',
// 			'assign', 'counter', 'cycle', 'debug', 'eval', 'fetch', 'html_checkboxes', 'html_image', 'html_options',
// 			'html_radios', 'html_select_date', 'html_select_time', 'html_table', 'math', 'mailto', 'popup_init',
// 			'popup', 'textformat'
			),
		5 => array(
            'fetch', 'fetch_alias',
            'l10n', 'locale', 'datetime', 'currentdate', 'maketime', 'makedate', 'gettime',
            'texttoimage', 'image', 'imagefile',

            'ezurl', 'ezroot', 'ezdesign', 'ezimage', 'exturl',
            'ezsys', 'ezhttp', 'ezini',
            'i18n', 'x18n',
            'month_overview',
            'autolink',
            'simpletags',
            'treemenu',
            'content_structure_tree',
            'wordtoimage',
            'mimetype_icon', 'class_icon', 'classgroup_icon', 'action_icon', 'icon',
            'flag_icon', 'icon_info',
            'ezpreference',
            'module_params',
            'topmenu',
            'ezpackage'
// 			'$template_dir', '$compile_dir', '$config_dir', '$plugins_dir', '$debugging', '$debug_tpl',
// 			'$debugging_ctrl', '$autoload_filters', '$compile_check', '$force_compile', '$caching', '$cache_dir',
// 			'$cache_lifetime', '$cache_handler_func', '$cache_modified_check', '$config_overwrite',
// 			'$config_booleanize', '$config_read_hidden', '$config_fix_newlines', '$default_template_handler_func',
// 			'$php_handling', '$security', '$secure_dir', '$security_settings', '$trusted_dir', '$left_delimiter',
// 			'$right_delimiter', '$compiler_class', '$request_vars_order', '$request_use_auto_globals',
// 			'$error_reporting', '$compile_id', '$use_sub_dirs', '$default_modifiers', '$default_resource_type'
			),
		6 => array(
// 			'append', 'append_by_ref', 'assign', 'assign_by_ref', 'clear_all_assign', 'clear_all_cache',
// 			'clear_assign', 'clear_cache', 'clear_compiled_tpl', 'clear_config', 'config_load', 'display',
// 			'fetch', 'get_config_vars', 'get_registered_object', 'get_template_vars', 'is_cached',
// 			'load_filter', 'register_block', 'register_compiler_function', 'register_function',
// 			'register_modifier', 'register_object', 'register_outputfilter', 'register_postfilter',
// 			'register_prefilter', 'register_resource', 'trigger_error', 'template_exists', 'unregister_block',
// 			'unregister_compiler_function', 'unregister_function', 'unregister_modifier', 'unregister_object',
// 			'unregister_outputfilter', 'unregister_postfilter', 'unregister_prefilter', 'unregister_resource'
			),
		7 => array(
// 			'name', 'assign', 'file', 'scope', 'global', 'key', 'once', 'script',
// 			'loop', 'start', 'step', 'max', 'show', 'values', 'value'
			),
		8 => array(
// 			'eq', 'neq', 'ne', 'lte', 'gte', 'ge', 'le', 'not', 'mod'
			),
		),
	'SYMBOLS' => array(
/*		'/', '=', '==', '!=', '>', '<', '>=', '<=', '!', '%'*/
        '|'
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
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #0600FF;',		//Functions
			2 => 'color: #008000;',		//Modifiers
			3 => 'color: #0600FF;',		//Custom Functions
			4 => 'color: #804040;',		//Variables
			5 => 'color: #008000;',		//Methods
			6 => 'color: #6A0A0A;',		//Attributes
			7 => 'color: #D36900;'		//Text-based symbols
			),
		'COMMENTS' => array(
			'MULTI' => 'color: #008080; font-style: italic;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000099; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: #D36900;'
			),
		'STRINGS' => array(
			0 => 'color: #ff0000;'
			),
		'NUMBERS' => array(
			0 => 'color: #cc66cc;'
			),
		'METHODS' => array(
			1 => 'color: #006600;'
			),
		'SYMBOLS' => array(
			0 => 'color: #D36900;'
			),
		'SCRIPT' => array(
			),
		'REGEXPS' => array(
			)
		),
	'URLS' => array(
		1 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchSectionID=5',
		2 => '',
		3 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchSectionID=5',
		4 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchSectionID=5',
		5 => 'http://ez.no/doc/content/advancedsearch?SearchText={FNAME}&SearchSectionID=5',
		6 => '',
		7 => ''
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.'
		),
	'REGEXPS' => array(
		0 => "[$][a-zA-Z_][a-zA-Z0-9_]*",
		1 => "[a-zA-Z_][a-zA-Z0-9_]*=",
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
