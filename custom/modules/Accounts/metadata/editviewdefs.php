<?php
$viewdefs ['Accounts'] = 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'intit_lg_origine_c',
            'label' => 'LBL_INTIT_LG_ORIGINE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sigle_c',
            'label' => 'LBL_SIGLE',
          ),
          1 => 
          array (
            'name' => 'type_etablissement_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_ETABLISSEMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'coda_name_c',
            'label' => 'LBL_CODA_NAME',
          ),
          1 => 
          array (
            'name' => 'actif_c',
            'label' => 'LBL_ACTIF',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'coda_sname_c',
            'label' => 'LBL_CODA_SNAME',
          ),
          1 => 
          array (
            'name' => 'id_etablissement_c',
            'label' => 'LBL_ID_ETABLISSEMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'implantation_c',
            'studio' => 'visible',
            'label' => 'LBL_IMPLANTATION',
          ),
          1 => 
          array (
            'name' => 'code_hier_c',
            'label' => 'LBL_CODE_HIER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'id_region_a_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_REGION_A',
          ),
          1 => 
          array (
            'name' => 'prive_c',
            'label' => 'LBL_PRIVE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'id_region_g_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_REGION_G',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'statut_c',
            'label' => 'LBL_STATUT',
          ),
          1 => 
          array (
            'name' => 'date_effectif_c',
            'label' => 'LBL_DATE_EFFECTIF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'qualite_c',
            'studio' => 'visible',
            'label' => 'LBL_QUALITE',
          ),
          1 => 
          array (
            'name' => 'adhesion_c',
            'label' => 'LBL_ADHESION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'commentaire_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent_c',
            'studio' => 'visible',
            'label' => 'LBL_PARENT',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street_num_c',
            'label' => 'LBL_BILLING_ADDRESS_STREET_NUM',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
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
            'name' => 'cedex_c',
            'label' => 'LBL_CEDEX',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'poste2_c',
            'label' => 'LBL_POSTE2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ville_lg_origine_c',
            'label' => 'LBL_VILLE_LG_ORIGINE',
          ),
          1 => 
          array (
            'name' => 'fax2_c',
            'label' => 'LBL_FAX2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pays_text_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYS_TEXT',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'domaine_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nb_etud_c',
            'label' => 'LBL_NB_ETUD',
          ),
          1 => 
          array (
            'name' => 'nb_etud_annee_obs_c',
            'label' => 'LBL_NB_ETUD_ANNEE_OBS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nb_ens_c',
            'label' => 'LBL_NB_ENS',
          ),
          1 => 
          array (
            'name' => 'nb_ens_annee_obs_c',
            'label' => 'LBL_NB_ENS_ANNEE_OBS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nb_cherch_c',
            'label' => 'LBL_NB_CHERCH',
          ),
          1 => 
          array (
            'name' => 'nb_cherch_annee_obs_c',
            'label' => 'LBL_NB_CHERCH_ANNEE_OBS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rub_c',
            'studio' => 'visible',
            'label' => 'LBL_RUB',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'chiffres_c',
            'studio' => 'visible',
            'label' => 'LBL_CHIFFRES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'commentaire2_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'publication_electronique_c',
            'label' => 'LBL_PUBLICATION_ELECTRONIQUE',
          ),
          1 => 
          array (
            'name' => 'publication_papier_c',
            'label' => 'LBL_PUBLICATION_PAPIER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'pays_iso2_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYS_ISO2_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
