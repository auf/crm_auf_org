<?php
$module_name = 'AOS_Contracts';
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
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      'contract_account' => 
      array (
        'name' => 'contract_account',
        'default' => true,
      ),
      'opportunity' => 
      array (
        'name' => 'opportunity',
        'default' => true,
      ),
      'start_date' => 
      array (
        'name' => 'start_date',
        'default' => true,
      ),
      'end_date' => 
      array (
        'name' => 'end_date',
        'default' => true,
      ),
      'total_contract_value' => 
      array (
        'name' => 'total_contract_value',
        'default' => true,
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
      ),
      'contract_type' => 
      array (
        'name' => 'contract_type',
        'default' => true,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO_NAME',
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
