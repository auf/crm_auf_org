<?php
// created: 2016-08-19 14:21:13
$dictionary["fs_fourniseur_aos_quotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'fs_fourniseur_aos_quotes_1' => 
    array (
      'lhs_module' => 'fs_fourniseur',
      'lhs_table' => 'fs_fourniseur',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Quotes',
      'rhs_table' => 'aos_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fs_fourniseur_aos_quotes_1_c',
      'join_key_lhs' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
      'join_key_rhs' => 'fs_fourniseur_aos_quotes_1aos_quotes_idb',
    ),
  ),
  'table' => 'fs_fourniseur_aos_quotes_1_c',
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
      'name' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fs_fourniseur_aos_quotes_1aos_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fs_fourniseur_aos_quotes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fs_fourniseur_aos_quotes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fs_fourniseur_aos_quotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fs_fourniseur_aos_quotes_1aos_quotes_idb',
      ),
    ),
  ),
);