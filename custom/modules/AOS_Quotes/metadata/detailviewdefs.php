<?php
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
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
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');" value="{$MOD.LBL_EMAIL_QUOTE}">',
          ),
          7 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createOpportunity\';" value="{$MOD.LBL_CREATE_OPPORTUNITY}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_contract_button',
                'title' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
                'onclick' => 'this.form.action.value=\'createOpportunity\';',
                'name' => 'Create Opportunity',
              ),
            ),
          ),
          8 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createContract\';" value="{$MOD.LBL_CREATE_CONTRACT}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_CONTRACT}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_contract_button',
                'title' => '{$MOD.LBL_CREATE_CONTRACT}',
                'onclick' => 'this.form.action.value=\'createContract\';',
                'name' => 'Create Contract',
              ),
            ),
          ),
          9 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'converToInvoice\';" value="{$MOD.LBL_CONVERT_TO_INVOICE}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'convert_to_invoice_button',
                'title' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
                'onclick' => 'this.form.action.value=\'converToInvoice\';',
                'name' => 'Convert to Invoice',
              ),
            ),
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
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        1 => 
        array (
          1 => 
          array (
            'name' => 'opportunities_aos_quotes_1_name',
            'label' => 'LBL_OPPORTUNITIES_AOS_QUOTES_1_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_p_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_P',
          ),
          1 => 
          array (
            'name' => 'invoice_status',
            'label' => 'LBL_INVOICE_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'number',
            'label' => 'LBL_QUOTE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'term',
            'label' => 'LBL_TERM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
          ),
          1 => 
          array (
            'name' => 'approval_issue',
            'label' => 'LBL_APPROVAL_ISSUE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'approval_status',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_account',
            'label' => 'LBL_BILLING_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fs_fourniseur_aos_quotes_1_name',
          ),
        ),
        2 => 
        array (
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_contact',
            'label' => 'LBL_BILLING_CONTACT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
      ),
    ),
  ),
);
?>
