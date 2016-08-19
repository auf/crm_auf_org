<?php
// created: 2016-06-02 15:58:48
$dictionary["auf_implantation_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'auf_implantation_contacts_1' => 
    array (
      'lhs_module' => 'auf_implantation',
      'lhs_table' => 'auf_implantation',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'auf_implantation_contacts_1_c',
      'join_key_lhs' => 'auf_implantation_contacts_1auf_implantation_ida',
      'join_key_rhs' => 'auf_implantation_contacts_1contacts_idb',
    ),
  ),
  'table' => 'auf_implantation_contacts_1_c',
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
      'name' => 'auf_implantation_contacts_1auf_implantation_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'auf_implantation_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'auf_implantation_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'auf_implantation_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'auf_implantation_contacts_1auf_implantation_ida',
        1 => 'auf_implantation_contacts_1contacts_idb',
      ),
    ),
  ),
);