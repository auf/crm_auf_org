<?php
// created: 2016-08-10 15:12:22
$dictionary["prop_proposition_activities_1_notes"] = array (
  'relationships' => 
  array (
    'prop_proposition_activities_1_notes' => 
    array (
      'lhs_module' => 'Prop_Proposition',
      'lhs_table' => 'prop_proposition',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Prop_Proposition',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);