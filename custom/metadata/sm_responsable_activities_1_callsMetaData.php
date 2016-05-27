<?php
// created: 2015-12-22 14:51:54
$dictionary["sm_responsable_activities_1_calls"] = array (
  'relationships' => 
  array (
    'sm_responsable_activities_1_calls' => 
    array (
      'lhs_module' => 'sm_Responsable',
      'lhs_table' => 'sm_responsable',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'sm_Responsable',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);