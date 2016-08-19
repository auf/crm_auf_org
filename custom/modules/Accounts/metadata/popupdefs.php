<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'qualite_c' => 'accounts_cstm.qualite_c',
  'type_etablissement_c' => 'accounts_cstm.type_etablissement_c',
  'shipping_address_country' => 'accounts.shipping_address_country',
),
    'searchInputs' => array (
  0 => 'name',
  10 => 'qualite_c',
  11 => 'type_etablissement_c',
  12 => 'shipping_address_country',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'qualite_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_QUALITE',
    'width' => '10%',
    'name' => 'qualite_c',
  ),
  'type_etablissement_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_ETABLISSEMENT',
    'width' => '10%',
    'name' => 'type_etablissement_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'shipping_address_country' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'width' => '10%',
    'name' => 'shipping_address_country',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'TYPE_ETABLISSEMENT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE_ETABLISSEMENT',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_COUNTRY',
    'default' => true,
    'name' => 'billing_address_country',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'DOMAINE_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DOMAINE',
    'width' => '10%',
  ),
),
);
