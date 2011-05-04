<?php
/*************************************************************************************
 * pig.php
 * ---------
 * Author: Eric Lubow (eric@lubow.org)
 * Copyright: (c) 2011 Eric Lubow (http://eric.lubow.org/)
 * Release Version: 1.0.8.9
 * Date Started: 2011-02-22
 *
 * Pig language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/02/22 (1.0.0)
 *  -  First Release
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
    'LANG_NAME' => 'Pig',
    'COMMENT_SINGLE' => array(1 =>'--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => 1,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'AND', 'ANY', 'ALL', 'ARRANGE', 'AS', 'ASC', 'AVG', 'BINSTORAGE', 'BY',
            'CACHE', 'CAT', 'CD', 'COGROUP', 'CONCAT', 'copyFromLocal','copyToLocal',
            'COUNT', 'CP', 'CROSS', '%DECLARE', '%DEFAULT', 'DEFINE', 'DESC', 'DESCRIBE', 'DIFF',
            'DISTINCT', 'DU', 'DUMP', 'E', 'EVAL', 'EXEC', 'EXPLAIN', 'F', 'FILTER',
            'FLATTEN', 'FOREACH', 'FULL', 'GENERATE', 'GROUP', 'HELP', 'ILLUSTRATE',
            'INNER', 'INPUT', 'INTO', 'IsEmpty', 'JOIN', 'KILL', 'L', 'LEFT', 'LIMIT', 'LOAD',
            'LS', 'MAP', 'MAX', 'MIN', 'MKDIR', 'MV', 'ORDER', 'OUTER',
            'OUTPUT', 'PARALLEL', 'PIG', 'PIGDUMP', 'PIGSTORAGE', 'PWD', 'QUIT', 'REGISTER', 'RIGHT',
            'RM', 'RMF', 'RUN', 'SAMPLE', 'SET', 'SHIP', 'SIZE', 'SPLIT', 'STDERR', 'STDIN', 'STDOUT',
            'STORE', 'STREAM', 'SUM', 'TEXTLOADER', 'TOKENIZE', 'THROUGH', 'UNION', 'USING',
            ),
        3 => array(
            // Values (Constants)
            'FALSE','NULL','TRUE',
            ),
        4 => array(
            // Data Types
            'BAG', 'BYTEARRAY', 'CHARARRAY', 'DOUBLE', 'FLOAT', 'INT', 'LONG', 'TUPLE'
            ),
        10 => array(
            // Operators
            'IS', 'IS NOT', 'NOT', 'OR'
            ),
        12 => array(
            // Control Flow (functions)
            'IF'
            ),
        13 => array(
            // String Functions
            'MATCHES', 'REPLACE'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '=', '!=', '<', '>', '|', ',', '.', '+', '-', '*', '/', '!', '%', '?', '$',
        '#', '::', '[', ']', '{', '}'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        3 => false,
        4 => false,
        10 => false,
        12 => false,
        13 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html',
        3 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html',
        4 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html',
        10 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html',
        12 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html',
        13 => 'http://pig.apache.org/docs/r0.7.0/piglatin_ref2.html'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
