<?php
// created: 2016-08-11 12:52:24
$dictionary["aos_invoices_activities_1_emails"] = array (
  'relationships' => 
  array (
    'aos_invoices_activities_1_emails' => 
    array (
      'lhs_module' => 'AOS_Invoices',
      'lhs_table' => 'aos_invoices',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'AOS_Invoices',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);