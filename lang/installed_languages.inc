<?php

/* How to make new entries here for non-packaged languages:

-- 'code' should match the name of the directory for the language under \lang
.-- 'name' is the name that will be displayed in the language selection list (in Users and Display Setup)
-- 'rtl' only needs to be set for right-to-left languages like Arabic and Hebrew
-- 'encoding' used in translation file
-- 'version' always set to '' for manually installed languages.
-- 'path' installation path related to FA root (e.g. 'lang/en_US').
*/


$installed_languages = array (
  0 => 
  array (
    'code' => 'C',
    'name' => 'English',
    'encoding' => 'iso-8859-1',
  ),
  1 => 
  array (
    'name' => 'English (IN)',
    'package' => 'en_IN',
    'code' => 'en_IN',
    'encoding' => 'iso-8859-1',
    'version' => '2.3.15-1',
    'path' => 'lang/en_IN',
  ),
  2 => 
  array (
    'name' => 'English (NZ)',
    'package' => 'en_NZ',
    'code' => 'en_NZ',
    'encoding' => 'iso-8859-1',
    'version' => '2.3.2-4',
    'path' => 'lang/en_NZ',
  ),
  3 => 
  array (
    'name' => 'English (US)',
    'package' => 'en_US',
    'code' => 'en_US',
    'encoding' => 'iso-8859-1',
    'version' => '2.3.12-1',
    'path' => 'lang/en_US',
  ),
  4 => 
  array (
    'name' => 'English (South Africa)',
    'package' => 'en_ZA',
    'code' => 'en_ZA',
    'encoding' => 'iso-8859-1',
    'version' => '2.3.17-1',
    'path' => 'lang/en_ZA',
  ),
);

$dflt_lang = 'C';
?>
