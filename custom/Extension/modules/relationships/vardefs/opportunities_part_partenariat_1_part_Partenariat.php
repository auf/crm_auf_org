<?php
// created: 2016-08-10 15:09:18
$dictionary["part_Partenariat"]["fields"]["opportunities_part_partenariat_1"] = array (
  'name' => 'opportunities_part_partenariat_1',
  'type' => 'link',
  'relationship' => 'opportunities_part_partenariat_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_PART_PARTENARIAT_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_part_partenariat_1opportunities_ida',
);
$dictionary["part_Partenariat"]["fields"]["opportunities_part_partenariat_1_name"] = array (
  'name' => 'opportunities_part_partenariat_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PART_PARTENARIAT_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_part_partenariat_1opportunities_ida',
  'link' => 'opportunities_part_partenariat_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["part_Partenariat"]["fields"]["opportunities_part_partenariat_1opportunities_ida"] = array (
  'name' => 'opportunities_part_partenariat_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_part_partenariat_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_PART_PARTENARIAT_1_FROM_PART_PARTENARIAT_TITLE',
);
