<?php
// created: 2016-06-02 16:13:33
$dictionary["auf_implantation"]["fields"]["auf_implantation_accounts_1"] = array (
  'name' => 'auf_implantation_accounts_1',
  'type' => 'link',
  'relationship' => 'auf_implantation_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_AUF_IMPLANTATION_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'auf_implantation_accounts_1accounts_idb',
);
$dictionary["auf_implantation"]["fields"]["auf_implantation_accounts_1_name"] = array (
  'name' => 'auf_implantation_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AUF_IMPLANTATION_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'auf_implantation_accounts_1accounts_idb',
  'link' => 'auf_implantation_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["auf_implantation"]["fields"]["auf_implantation_accounts_1accounts_idb"] = array (
  'name' => 'auf_implantation_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'auf_implantation_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_AUF_IMPLANTATION_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
