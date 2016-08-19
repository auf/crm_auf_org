<?php
// created: 2016-06-02 16:13:32
$dictionary["auf_implantation_accounts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'auf_implantation_accounts_1' => 
    array (
      'lhs_module' => 'auf_implantation',
      'lhs_table' => 'auf_implantation',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'auf_implantation_accounts_1_c',
      'join_key_lhs' => 'auf_implantation_accounts_1auf_implantation_ida',
      'join_key_rhs' => 'auf_implantation_accounts_1accounts_idb',
    ),
  ),
  'table' => 'auf_implantation_accounts_1_c',
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
      'name' => 'auf_implantation_accounts_1auf_implantation_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'auf_implantation_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'auf_implantation_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'auf_implantation_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'auf_implantation_accounts_1auf_implantation_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'auf_implantation_accounts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'auf_implantation_accounts_1accounts_idb',
      ),
    ),
  ),
);