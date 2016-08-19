<?php
$module_name = 'auf_implantation';
$_module_name = 'auf_implantation';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type_implantation_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_IMPLANTATION',
        'width' => '10%',
        'name' => 'type_implantation_c',
      ),
      'id_region_a_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ID_REGION_A',
        'width' => '10%',
        'name' => 'id_region_a_c',
      ),
      'etat_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ETAT',
        'width' => '10%',
        'name' => 'etat_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_country' => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type_implantation_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_IMPLANTATION',
        'width' => '10%',
        'name' => 'type_implantation_c',
      ),
      'id_region_a_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ID_REGION_A',
        'width' => '10%',
        'name' => 'id_region_a_c',
      ),
      'etat_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ETAT',
        'width' => '10%',
        'name' => 'etat_c',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'current_user_only',
      ),
      'employees' => 
      array (
        'name' => 'employees',
        'default' => true,
        'width' => '10%',
      ),
      'auf_implantation_accounts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AUF_IMPLANTATION_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'AUF_IMPLANTATION_ACCOUNTS_1ACCOUNTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'auf_implantation_accounts_1_name',
      ),
    ),
  ),
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
);
?>
