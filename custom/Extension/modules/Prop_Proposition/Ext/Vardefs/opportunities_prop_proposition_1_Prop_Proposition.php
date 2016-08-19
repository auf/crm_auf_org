<?php
// created: 2016-08-10 15:08:56
$dictionary["Prop_Proposition"]["fields"]["opportunities_prop_proposition_1"] = array (
  'name' => 'opportunities_prop_proposition_1',
  'type' => 'link',
  'relationship' => 'opportunities_prop_proposition_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_PROP_PROPOSITION_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_prop_proposition_1opportunities_ida',
);
$dictionary["Prop_Proposition"]["fields"]["opportunities_prop_proposition_1_name"] = array (
  'name' => 'opportunities_prop_proposition_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROP_PROPOSITION_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_prop_proposition_1opportunities_ida',
  'link' => 'opportunities_prop_proposition_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Prop_Proposition"]["fields"]["opportunities_prop_proposition_1opportunities_ida"] = array (
  'name' => 'opportunities_prop_proposition_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_prop_proposition_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_PROP_PROPOSITION_1_FROM_PROP_PROPOSITION_TITLE',
);
