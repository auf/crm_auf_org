<?php
// created: 2016-07-28 16:12:11
$dictionary["Lead"]["fields"]["sm_responsable_leads_1"] = array (
  'name' => 'sm_responsable_leads_1',
  'type' => 'link',
  'relationship' => 'sm_responsable_leads_1',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'vname' => 'LBL_SM_RESPONSABLE_LEADS_1_FROM_SM_RESPONSABLE_TITLE',
  'id_name' => 'sm_responsable_leads_1sm_responsable_ida',
);
$dictionary["Lead"]["fields"]["sm_responsable_leads_1_name"] = array (
  'name' => 'sm_responsable_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_RESPONSABLE_LEADS_1_FROM_SM_RESPONSABLE_TITLE',
  'save' => true,
  'id_name' => 'sm_responsable_leads_1sm_responsable_ida',
  'link' => 'sm_responsable_leads_1',
  'table' => 'sm_responsable',
  'module' => 'sm_Responsable',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["sm_responsable_leads_1sm_responsable_ida"] = array (
  'name' => 'sm_responsable_leads_1sm_responsable_ida',
  'type' => 'link',
  'relationship' => 'sm_responsable_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SM_RESPONSABLE_LEADS_1_FROM_LEADS_TITLE',
);
