<?php
$module_name = 'fs_fourniseur';
$_object_name = 'fs_fourniseur';
$viewdefs [$module_name] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DESCRIPTION_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'nom_court_c',
            'label' => 'LBL_NOM_COURT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'numero_coda_c',
            'label' => 'LBL_NUMERO_CODA',
          ),
          1 => 'fs_fourniseur_type',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'num_taxe_tps_c',
            'label' => 'LBL_NUM_TAXE_TPS',
          ),
          1 => 
          array (
            'name' => 'num_tvq_c',
            'label' => 'LBL_NUM_TVQ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'devise_c',
            'studio' => 'visible',
            'label' => 'LBL_DEVISE',
          ),
          1 => 
          array (
            'name' => 'mode_paiement_c',
            'studio' => 'visible',
            'label' => 'LBL_MODE_PAIEMENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cond_paiement_c',
            'studio' => 'visible',
            'label' => 'LBL_COND_PAIEMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'commentaires_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRES',
          ),
        ),
        6 => 
        array (
          0 => 'industry',
          1 => 'date_entered',
        ),
        7 => 
        array (
          0 => 'assigned_user_name',
          1 => 'date_modified',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 'phone_office',
          1 => 
          array (
            'name' => 'num_phone_ship_c',
            'label' => 'LBL_NUM_PHONE_SHIP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'poste_ext1_c',
            'label' => 'LBL_POSTE_EXT1',
          ),
          1 => 
          array (
            'name' => 'poste_ext2_c',
            'label' => 'LBL_POSTE_EXT2',
          ),
        ),
        2 => 
        array (
          0 => 'email1',
          1 => 'website',
        ),
        3 => 
        array (
          0 => 'phone_fax',
          1 => 
          array (
            'name' => 'num_fax_ship_c',
            'label' => 'LBL_NUM_FAX_SHIP',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'ShipAddress',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombanque_c',
            'label' => 'LBL_NOMBANQUE',
          ),
          1 => 
          array (
            'name' => 'nomcomptebanque_c',
            'label' => 'LBL_NOMCOMPTEBANQUE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'numcompte_c',
            'label' => 'LBL_NUMCOMPTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'adressebanq_c',
            'label' => 'LBL_ADRESSEBANQ',
          ),
          1 => 
          array (
            'name' => 'adressebanq_city_c',
            'label' => 'LBL_ADRESSEBANQ_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'adressebanq_state_c',
            'label' => 'LBL_ADRESSEBANQ_STATE',
          ),
          1 => 
          array (
            'name' => 'adressebanq_postalcode_c',
            'label' => 'LBL_ADRESSEBANQ_POSTALCODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'adressebanq_country_c',
            'label' => 'LBL_ADRESSEBANQ_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'adresse_swift_c',
            'label' => 'LBL_ADRESSE_SWIFT',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombanque2_c',
            'label' => 'LBL_NOMBANQUE2',
          ),
          1 => 
          array (
            'name' => 'nomcomptebanque2_c',
            'label' => 'LBL_NOMCOMPTEBANQUE2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'numcompte2_c',
            'label' => 'LBL_NUMCOMPTE2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'banque2_c',
            'label' => 'LBL_BANQUE2',
          ),
          1 => 
          array (
            'name' => 'banque2_city_c',
            'label' => 'LBL_BANQUE2_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'banque2_state_c',
            'label' => 'LBL_BANQUE2_STATE',
          ),
          1 => 
          array (
            'name' => 'banque2_postalcode_c',
            'label' => 'LBL_BANQUE2_POSTALCODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'banque2_country_c',
            'label' => 'LBL_BANQUE2_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'adresse_swift2_c',
            'label' => 'LBL_ADRESSE_SWIFT2',
          ),
        ),
      ),
    ),
  ),
);
?>
