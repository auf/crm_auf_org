<?php
$module_name = 'sm_Responsable';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'accounts_sm_responsable_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_SM_RESPONSABLE_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_sm_responsable_1_name',
      ),
      'priorite' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRIORITE',
        'width' => '10%',
        'default' => true,
        'name' => 'priorite',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'accounts_sm_responsable_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_SM_RESPONSABLE_1ACCOUNTS_IDA',
        'name' => 'accounts_sm_responsable_1_name',
      ),
      'priorite' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRIORITE',
        'width' => '10%',
        'default' => true,
        'name' => 'priorite',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'actif' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIF',
        'width' => '10%',
        'name' => 'actif',
      ),
      'sm_responsable_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
        'id' => 'SM_RESPONSABLE_CONTACTS_1CONTACTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'sm_responsable_contacts_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
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
