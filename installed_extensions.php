<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 6; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'English Canadian COA - General',
    'package' => 'chart_en_CA-general',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_CA-general.sql',
  ),
  1 => 
  array (
    'name' => 'English French coa',
    'package' => 'chart_en_FR-general',
    'version' => '2.3.0-8',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_FR-general.sql',
  ),
  2 => 
  array (
    'name' => 'English Indian COA - New.',
    'package' => 'chart_en_IN-general',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_IN-new.sql',
  ),
  3 => 
  array (
    'name' => 'English Singapore 4 digits COA',
    'package' => 'chart_en_SG-general',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_SG-new.sql',
  ),
  4 => 
  array (
    'name' => 'US chart of accounts for service company.',
    'package' => 'chart_en_US-service',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-service.sql',
  ),
  5 => 
  array (
    'name' => 'English South African 5 digits COA - New',
    'package' => 'chart_en_ZA-general',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_ZA-new.sql',
  ),
);
?>