<?php
// created: 2016-08-12 10:36:40
$dictionary["aos_quotes_activities_1_calls"] = array (
  'relationships' => 
  array (
    'aos_quotes_activities_1_calls' => 
    array (
      'lhs_module' => 'AOS_Quotes',
      'lhs_table' => 'aos_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'AOS_Quotes',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);