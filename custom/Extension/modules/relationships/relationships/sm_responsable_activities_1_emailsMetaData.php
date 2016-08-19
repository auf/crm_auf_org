<?php
// created: 2015-12-22 14:51:55
$dictionary["sm_responsable_activities_1_emails"] = array (
  'relationships' => 
  array (
    'sm_responsable_activities_1_emails' => 
    array (
      'lhs_module' => 'sm_Responsable',
      'lhs_table' => 'sm_responsable',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
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