<?php
// created: 2016-08-12 10:36:41
$dictionary["aos_quotes_activities_1_tasks"] = array (
  'relationships' => 
  array (
    'aos_quotes_activities_1_tasks' => 
    array (
      'lhs_module' => 'AOS_Quotes',
      'lhs_table' => 'aos_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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