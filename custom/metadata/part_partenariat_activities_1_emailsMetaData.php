<?php
// created: 2016-08-10 15:12:52
$dictionary["part_partenariat_activities_1_emails"] = array (
  'relationships' => 
  array (
    'part_partenariat_activities_1_emails' => 
    array (
      'lhs_module' => 'part_Partenariat',
      'lhs_table' => 'part_partenariat',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'part_Partenariat',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);