<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_etablissement_c' => 
      array (
        'type' => 'readonly',
        'default' => true,
        'label' => 'LBL_ID_ETABLISSEMENT',
        'width' => '10%',
        'name' => 'id_etablissement_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_address_country' => 
      array (
        'name' => 'billing_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
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
      'type_etablissement_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_ETABLISSEMENT',
        'width' => '10%',
        'name' => 'type_etablissement_c',
      ),
      'qualite_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_QUALITE',
        'width' => '10%',
        'name' => 'qualite_c',
      ),
      'statut_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUT',
        'width' => '10%',
        'name' => 'statut_c',
      ),
      'parent_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MEMBER_OF',
        'id' => 'PARENT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
    ),
    'advanced_search' => 
    array (
      'favorites_only' => 
      array (
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'favorites_only',
      ),
      'sigle_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SIGLE',
        'width' => '10%',
        'name' => 'sigle_c',
      ),
      'type_etablissement_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_ETABLISSEMENT',
        'width' => '10%',
        'name' => 'type_etablissement_c',
      ),
      'id_etablissement_c' => 
      array (
        'type' => 'readonly',
        'default' => true,
        'label' => 'LBL_ID_ETABLISSEMENT',
        'width' => '10%',
        'name' => 'id_etablissement_c',
      ),
      'statut_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUT',
        'width' => '10%',
        'name' => 'statut_c',
      ),
      'qualite_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_QUALITE',
        'width' => '10%',
        'name' => 'qualite_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'implantation_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IMPLANTATION',
        'width' => '10%',
        'name' => 'implantation_c',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_address_country' => 
      array (
        'name' => 'billing_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'domaine_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_DOMAINE',
        'width' => '10%',
        'name' => 'domaine_c',
      ),
      'assigned_user_id' => 
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
