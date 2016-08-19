<?php
$viewdefs ['Opportunities'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'comment' => 'Currency used for display purposes',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 'date_closed',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'montant_initial_c',
            'label' => 'LBL_MONTANT_INITIAL',
          ),
          1 => 'opportunity_type',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'montant_finance_c',
            'label' => 'LBL_MONTANT_FINANCE',
          ),
          1 => 
          array (
            'name' => 'familles_c',
            'studio' => 'visible',
            'label' => 'LBL_FAMILLES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'montant_partenariats_c',
            'label' => 'LBL_MONTANT_PARTENARIATS',
          ),
          1 => 'lead_source',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'montant_propositions_c',
            'label' => 'LBL_MONTANT_PROPOSITIONS',
          ),
          1 => 
          array (
            'name' => 'scientifique_c',
            'studio' => 'visible',
            'label' => 'LBL_SCIENTIFIQUE ',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
        ),
        7 => 
        array (
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'pourquoi_perdu_c',
            'studio' => 'visible',
            'label' => 'LBL_POURQUOI_PERDU',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'etapes_d_implantation_c',
            'studio' => 'visible',
            'label' => 'LBL_ETAPES_D_IMPLANTATION',
          ),
        ),
        9 => 
        array (
          0 => 'probability',
          1 => 'campaign_name',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
          1 => 
          array (
            'name' => 'fs_fourniseur_opportunities_1_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
