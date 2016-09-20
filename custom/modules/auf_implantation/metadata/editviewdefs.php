<?php
$module_name = 'auf_implantation';
$_object_name = 'auf_implantation';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
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
          1 => 'website',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'etat_c',
            'studio' => 'visible',
            'label' => 'LBL_ETAT',
          ),
          1 => 'phone_office',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_implantation_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_IMPLANTATION',
          ),
          1 => 
          array (
            'name' => 'poste1_c',
            'label' => 'LBL_POSTE1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coda_name_c',
            'label' => 'LBL_CODA_NAME',
          ),
          1 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'coda_sname_c',
            'label' => 'LBL_CODA_SNAME',
          ),
          1 => 'phone_alternate',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'id_region_a_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_REGION_A',
          ),
          1 => 
          array (
            'name' => 'poste2_c',
            'label' => 'LBL_POSTE2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'id_region_g_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_REGION_G',
          ),
          1 => 
          array (
            'name' => 'email_interne_c',
            'label' => 'LBL_EMAIL_INTERNE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'implantation_c',
            'studio' => 'visible',
            'label' => 'LBL_IMPLANTATION',
          ),
          1 => 'email1',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'auf_implantation_accounts_1_name',
          ),
          1 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fuseau_horaire_c',
            'label' => 'LBL_FUSEAU_HORAIRE',
          ),
          1 => 
          array (
            'name' => 'code_meteo_c',
            'label' => 'LBL_CODE_METEO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_lat_c',
            'label' => 'LBL_JJWG_MAPS_LAT',
          ),
          1 => 
          array (
            'name' => 'jjwg_maps_lng_c',
            'label' => 'LBL_JJWG_MAPS_LNG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_geocode_status_c',
            'label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS',
          ),
          1 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'ShipAddress',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        1 => 
        array (
          1 => 
          array (
            'name' => 'shipping_address_position_cp_c',
            'studio' => 'visible',
            'label' => 'LBL_SHIPPING_ADDRESS_POSITION_CP',
          ),
        ),
        2 => 
        array (
          1 => 
          array (
            'name' => 'shipping_address_precision_avant_c',
            'label' => 'LBL_SHIPPING_ADDRESS_PRECISION_AVANT',
          ),
        ),
        3 => 
        array (
          1 => 
          array (
            'name' => 'shipping_address_precision_apres_c',
            'label' => 'LBL_SHIPPING_ADDRESS_PRECISION_APRES',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_ouverture_c',
            'label' => 'LBL_DATE_OUVERTURE',
          ),
          1 => 
          array (
            'name' => 'date_fermeture_c',
            'label' => 'LBL_DATE_FERMETURE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_inauguration_c',
            'label' => 'LBL_DATE_INAUGURATION',
          ),
          1 => 
          array (
            'name' => 'date_extension_c',
            'label' => 'LBL_DATE_EXTENSION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'historique_c',
            'studio' => 'visible',
            'label' => 'LBL_HISTORIQUE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'commentaire2_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE2',
          ),
        ),
      ),
    ),
  ),
);
?>
