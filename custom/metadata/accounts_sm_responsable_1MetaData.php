<?php
// created: 2015-12-21 14:04:34
$dictionary["accounts_sm_responsable_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_sm_responsable_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'sm_Responsable',
      'rhs_table' => 'sm_responsable',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_sm_responsable_1_c',
      'join_key_lhs' => 'accounts_sm_responsable_1accounts_ida',
      'join_key_rhs' => 'accounts_sm_responsable_1sm_responsable_idb',
    ),
  ),
  'table' => 'accounts_sm_responsable_1_c',
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
      'name' => 'accounts_sm_responsable_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_sm_responsable_1sm_responsable_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_sm_responsable_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_sm_responsable_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_sm_responsable_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_sm_responsable_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_sm_responsable_1sm_responsable_idb',
      ),
    ),
  ),
);