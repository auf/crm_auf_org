<?php
// created: 2016-05-17 16:08:58
$dictionary["fs_fourniseur_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'fs_fourniseur_contacts_1' => 
    array (
      'lhs_module' => 'fs_fourniseur',
      'lhs_table' => 'fs_fourniseur',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fs_fourniseur_contacts_1_c',
      'join_key_lhs' => 'fs_fourniseur_contacts_1fs_fourniseur_ida',
      'join_key_rhs' => 'fs_fourniseur_contacts_1contacts_idb',
    ),
  ),
  'table' => 'fs_fourniseur_contacts_1_c',
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
      'name' => 'fs_fourniseur_contacts_1fs_fourniseur_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fs_fourniseur_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fs_fourniseur_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fs_fourniseur_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fs_fourniseur_contacts_1fs_fourniseur_ida',
        1 => 'fs_fourniseur_contacts_1contacts_idb',
      ),
    ),
  ),
);