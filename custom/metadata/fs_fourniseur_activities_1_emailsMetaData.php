<?php
// created: 2016-08-18 15:34:00
$dictionary["fs_fourniseur_activities_1_emails"] = array (
  'relationships' => 
  array (
    'fs_fourniseur_activities_1_emails' => 
    array (
      'lhs_module' => 'fs_fourniseur',
      'lhs_table' => 'fs_fourniseur',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'fs_fourniseur',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);