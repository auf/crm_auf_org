<?php
// created: 2016-05-26 18:14:33
$searchdefs['Contacts'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      1 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'width' => '10%',
        'name' => 'country_c',
      ),
      2 => 
      array (
        'type' => 'phone',
        'label' => 'LBL_OFFICE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_work',
      ),
      3 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        'width' => '10%',
        'default' => true,
        'name' => 'primary_address_street',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      7 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      10 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'width' => '10%',
        'name' => 'country_c',
      ),
      11 => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);