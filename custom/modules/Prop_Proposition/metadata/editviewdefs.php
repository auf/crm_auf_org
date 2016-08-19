<?php
$module_name = 'Prop_Proposition';
$_object_name = 'prop_proposition';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'currency_id',
        ),
        1 => 
        array (
          0 => 'prop_proposition_type',
          1 => 'amount',
        ),
        2 => 
        array (
          0 => 'lead_source',
          1 => 'date_closed',
        ),
        3 => 
        array (
          0 => 'sales_stage',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'next_step',
        ),
        5 => 
        array (
          0 => 'probability',
        ),
        6 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'opportunities_prop_proposition_1_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
