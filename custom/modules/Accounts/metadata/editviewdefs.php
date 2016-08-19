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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
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
          0 => 'parent_name',
        ),
        4 => 
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
        5 => 
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
            'name' => 'code_hier_c',
            'label' => 'LBL_CODE_HIER',
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
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'implantation_c',
            'studio' => 'visible',
            'label' => 'LBL_IMPLANTATION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'auf_implantation_accounts_1_name',
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
            'name' => 'date_maj_c',
            'label' => 'LBL_DATE_MAJ',
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'annee_dadhesion_c',
            'label' => 'LBL_ANNEE_DADHESION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'historique_c',
            'studio' => 'visible',
            'label' => 'LBL_HISTORIQUE',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'poste1_c',
            'label' => 'LBL_POSTE1',
          ),
          1 => 
          array (
            'name' => 'poste2_c',
            'label' => 'LBL_POSTE2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'fax2_c',
            'label' => 'LBL_FAX2',
          ),
        ),
        4 => 
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
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prive_c',
            'label' => 'LBL_PRIVE',
          ),
          1 => '',
        ),
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'rub_c',
            'studio' => 'visible',
            'label' => 'LBL_RUB',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'chiffres_c',
            'studio' => 'visible',
            'label' => 'LBL_CHIFFRES',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'commentaire2_c',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE2',
          ),
        ),
        8 => 
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
    ),
  ),
);
?>
