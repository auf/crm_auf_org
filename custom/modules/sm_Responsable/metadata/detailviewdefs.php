<?php
$module_name = 'sm_Responsable';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'priorite',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITE',
          ),
          1 => 
          array (
            'name' => 'actif',
            'label' => 'LBL_ACTIF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_sm_responsable_1_name',
            'label' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'id_etablissement',
            'studio' => 'visible',
            'label' => 'LBL_ID_ETABLISSEMENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_contact',
            'studio' => 'visible',
            'label' => 'LBL_ID_CONTACT',
          ),
          1 => 
          array (
            'name' => 'contacts_sm_responsable_1_name',
          ),
        ),
        3 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'courriel_fonction',
            'label' => 'LBL_COURRIEL_FONCTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sousfonction',
            'label' => 'LBL_SOUSFONCTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sm_responsable_contacts_1_name',
            'label' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'commentaire',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE',
          ),
        ),
        7 => 
        array (
          0 => 'date_modified',
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'addresse_org_c',
            'label' => 'LBL_ADDRESSE_ORG',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adresse_c',
            'label' => 'LBL_ADRESSE',
          ),
          1 => 
          array (
            'name' => 'code_postal_c',
            'label' => 'LBL_CODE_POSTAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cedex_c',
            'label' => 'LBL_CEDEX',
          ),
          1 => 
          array (
            'name' => 'province_c',
            'label' => 'LBL_PROVINCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ville_lg_fr_c',
            'label' => 'LBL_VILLE_LG_FR',
          ),
          1 => 
          array (
            'name' => 'ville_lg_origine_c',
            'label' => 'LBL_VILLE_LG_ORIGINE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pays_iso2_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYS_ISO2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_office_c',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'poste1_c',
            'label' => 'LBL_POSTE1',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate_c',
            'label' => 'LBL_PHONE_ALTERNATE',
          ),
          1 => 
          array (
            'name' => 'poste2_c',
            'label' => 'LBL_POSTE2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax_c',
            'label' => 'LBL_PHONE_FAX',
          ),
          1 => 
          array (
            'name' => 'fax2_c',
            'label' => 'LBL_FAX2',
          ),
        ),
      ),
    ),
  ),
);
?>