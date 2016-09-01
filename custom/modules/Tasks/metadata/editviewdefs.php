<?php
$viewdefs ['Tasks'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(this.form);" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
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
        'LBL_TASK_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_task_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'status',
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
            'name' => 'typetache_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPETACHE',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
          1 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'aos_quotes_tasks_1_name',
          ),
          1 => 
          array (
            'name' => 'description',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sm_responsable_activities_1_tasks_name',
          ),
          1 => 
          array (
            'name' => 'sm_responsable_activities_1_tasks_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fs_fourniseur_activities_1_tasks_name',
          ),
          1 => 
          array (
            'name' => 'fs_fourniseur_activities_1_tasks_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fs_fourniseur_activities_1_tasks_name',
          ),
          1 => 
          array (
            'name' => 'fs_fourniseur_tasks_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
