<?php
// created: 2016-07-28 16:12:11
$dictionary["sm_responsable_leads_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sm_responsable_leads_1' => 
    array (
      'lhs_module' => 'sm_Responsable',
      'lhs_table' => 'sm_responsable',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_responsable_leads_1_c',
      'join_key_lhs' => 'sm_responsable_leads_1sm_responsable_ida',
      'join_key_rhs' => 'sm_responsable_leads_1leads_idb',
    ),
  ),
  'table' => 'sm_responsable_leads_1_c',
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
      'name' => 'sm_responsable_leads_1sm_responsable_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_responsable_leads_1leads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_responsable_leads_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_responsable_leads_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sm_responsable_leads_1sm_responsable_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sm_responsable_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_responsable_leads_1leads_idb',
      ),
    ),
  ),
);