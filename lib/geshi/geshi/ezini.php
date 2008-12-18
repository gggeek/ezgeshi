<?php
/*************************************************************************************
 * ini.php
 * --------
 * Author: deguix (cevo_deguix@yahoo.com.br)
 * Author: ggiunta (gg@ez.no)
 * Copyright: (c) 2005 deguix
 * Release Version: 1.0.8.1
 * Date Started: 2005/03/27
 *
 * eZ Publish INI language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/12/17
 *   -  complete revamp of syntax rules, now 100% regexp based:
 *     - fixed highlighting of array values where the key is a string
 *     - do not highlight lines that will not be parsed by eZINI
 *     - added highlight of spaces around ini values where considered likely cause of errors
 * 2008/02/22
 *   -  changed syntax to suit ezP own style of ini files (was 'standard ini' syntax)
 * 2005/12/28 (1.0.1)
 *   -  Removed unnecessary keyword style index
 *   -  Added support for " strings
 * 2005/04/05 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2008/12/17)
 * -------------------------
 *   -  Add highlighting of charset declarator
 *   -  Verify why usage of semicolon makes strings bold
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'eZ Publish ini',
    'COMMENT_SINGLE' => array(), // moved to regexp to avoid a geshi bug
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        ),
    'SYMBOLS' => array(
        '[', ']', '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            ),
        'COMMENTS' => array(
            0 => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => ''
            ),
        'STRINGS' => array(
            0 => 'color: #933;'
            ),
        'NUMBERS' => array(
            0 => '',
            ),
        'METHODS' => array(
            0 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066; font-weight:bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #666666; font-style: italic;', // comments
            1 => 'background-color: yellow;', // error
            2 => 'background-color: yellow;', // error
            3 => 'background-color: yellow;', // error
            4 => 'background-color: yellow;', // error
            5 => 'color: #000099;', //background-color: green;', // setting name
            6 => 'color: #000099;', //background-color: green;', // setting name
            7 => 'background-color: yellow;', // error
            8 => 'background-color: yellow;', // error
            9 => 'background-color: yellow;', // error
            10 => 'color: #000066; font-weight:bold;', //'background-color: blue; color: white;', // ini block
            11 => 'color: #660066;', //background-color: red;', // setting value
            12 => 'color: #ff0000;', //background-color: pink;', // setting key name
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => array( // comment
            GESHI_SEARCH => '^(#.*)$',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        1 => array( // bad ini block: whitespace before it...
            GESHI_SEARCH => '^([ \t]+\[)([^\]]+\][ \t]*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),
        2 => array( // bad line: space before setting name
            GESHI_SEARCH => '^([ \t]+[\w_*@-])(.*)$',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => '2'
            ),
        3 => array( // bad line: space after setting name
            GESHI_SEARCH => '^([\w_*@-]*)([\w_*@-][ \t]+)(.*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        4 => array( // bad line: space after array key
            GESHI_SEARCH => '^([\w_*@-]+\[[^\]]*)(\][ \t]+)(.*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        5 => array( // config line: setting name for array resets
            GESHI_SEARCH => '^([\w_*@-]+)\[\]$',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => '[]'
            ),
        6 => array( // config line: setting name for valid lines
            GESHI_SEARCH => '^([\w_*@-]+)((?:\[[^\]]*\])?=.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),
        7 => array( // most likely bad line: space after = sign
            GESHI_SEARCH => '^([^#=]+)(=[ \t]+.?)(.*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        8 => array( // most likely bad line: space after setting value
            GESHI_SEARCH => '^([^#=]+=)([^ \t\n]+[ \t]+)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        9 => array( // most likely bad line: space at beginning or end of array key
            GESHI_SEARCH => '^([^\[#]+)(\[[ \t]+[^\]]*\]|\[[^\]]*[ \t]+\])(.*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        10 => array( // ini block: no whitespace allowed before it on the line, only whitespace allowed afterwards...
            GESHI_SEARCH => '^(\[[^\]]+\])([ \t]*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),
        11 => array( // config line: value with no initial or trailing whitespace
            GESHI_SEARCH => '^([^#=]+=)([^ \t\n]+.*[^ \t\n]+|[^ \t\n])$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        12 => array( // config line: array key with no initial or trailing whitespace
            GESHI_SEARCH => '^([^#\]]+\[)([^ \]]+[^\]]*[^ \]]+|[^ \]])(\]=)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
