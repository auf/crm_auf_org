<?php
// created: 2016-08-10 15:08:56
$dictionary["opportunities_prop_proposition_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_prop_proposition_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Prop_Proposition',
      'rhs_table' => 'prop_proposition',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_prop_proposition_1_c',
      'join_key_lhs' => 'opportunities_prop_proposition_1opportunities_ida',
      'join_key_rhs' => 'opportunities_prop_proposition_1prop_proposition_idb',
    ),
  ),
  'table' => 'opportunities_prop_proposition_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'opportunities_prop_proposition_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_prop_proposition_1prop_proposition_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_prop_proposition_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_prop_proposition_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_prop_proposition_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_prop_proposition_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_prop_proposition_1prop_proposition_idb',
      ),
    ),
  ),
);