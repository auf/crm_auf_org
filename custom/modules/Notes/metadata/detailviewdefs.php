<?php
$viewdefs ['Notes'] = 
array (
  'DetailView' => 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_NOTE_INFORMATION' => 
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
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 'contact_name',
          1 => 
          array (
            'name' => 'nocontrat_c',
            'label' => 'LBL_NOCONTRAT ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_de_debut_c',
            'label' => 'LBL_DATE_DE_DEBUT',
          ),
          1 => 
          array (
            'name' => 'date_de_fin_c',
            'label' => 'LBL_DATE_DE_FIN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'filename',
          ),
          1 => 
          array (
            'name' => 'statut_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => 
          array (
            'name' => 'fs_fourniseur_activities_1_notes_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fs_fourniseur_activities_1_notes_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
