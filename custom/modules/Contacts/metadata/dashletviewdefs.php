<?php
$dashletData['ContactsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'title' => 
  array (
    'default' => '',
  ),
  'primary_address_country' => 
  array (
    'default' => '',
  ),
  'modified_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ContactsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'account_name' => 
  array (
    'width' => '20',
    'label' => 'LBL_ACCOUNT_NAME',
    'sortable' => false,
    'link' => true,
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'ACLTag' => 'ACCOUNT',
  ),
  'title' => 
  array (
    'width' => '20s',
    'label' => 'LBL_TITLE',
    'default' => true,
  ),
  'email1' => 
  array (
    'width' => '10',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
  ),
  'phone_work' => 
  array (
    'width' => '15',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
  ),
  'phone_home' => 
  array (
    'width' => '10',
    'label' => 'LBL_HOME_PHONE',
  ),
  'phone_mobile' => 
  array (
    'width' => '10',
    'label' => 'LBL_MOBILE_PHONE',
  ),
  'phone_other' => 
  array (
    'width' => '10',
    'label' => 'LBL_OTHER_PHONE',
  ),
  'date_entered' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_MODIFIED',
  ),
  'created_by' => 
  array (
    'width' => '8',
    'label' => 'LBL_CREATED',
  ),
  'assigned_user_name' => 
  array (
    'width' => '15',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
  ),
);
