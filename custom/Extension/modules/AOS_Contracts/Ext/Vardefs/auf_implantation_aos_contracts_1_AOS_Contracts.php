<?php
// created: 2016-06-02 15:49:00
$dictionary["AOS_Contracts"]["fields"]["auf_implantation_aos_contracts_1"] = array (
  'name' => 'auf_implantation_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'auf_implantation_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'auf_implantation',
  'bean_name' => 'auf_implantation',
  'vname' => 'LBL_AUF_IMPLANTATION_AOS_CONTRACTS_1_FROM_AUF_IMPLANTATION_TITLE',
  'id_name' => 'auf_implantation_aos_contracts_1auf_implantation_ida',
);
$dictionary["AOS_Contracts"]["fields"]["auf_implantation_aos_contracts_1_name"] = array (
  'name' => 'auf_implantation_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AUF_IMPLANTATION_AOS_CONTRACTS_1_FROM_AUF_IMPLANTATION_TITLE',
  'save' => true,
  'id_name' => 'auf_implantation_aos_contracts_1auf_implantation_ida',
  'link' => 'auf_implantation_aos_contracts_1',
  'table' => 'auf_implantation',
  'module' => 'auf_implantation',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["auf_implantation_aos_contracts_1auf_implantation_ida"] = array (
  'name' => 'auf_implantation_aos_contracts_1auf_implantation_ida',
  'type' => 'link',
  'relationship' => 'auf_implantation_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AUF_IMPLANTATION_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);
