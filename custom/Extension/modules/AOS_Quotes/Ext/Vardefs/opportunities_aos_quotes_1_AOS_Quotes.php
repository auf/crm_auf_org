<?php
// created: 2016-08-12 11:19:52
$dictionary["AOS_Quotes"]["fields"]["opportunities_aos_quotes_1"] = array (
  'name' => 'opportunities_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'opportunities_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_AOS_QUOTES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_aos_quotes_1opportunities_ida',
);
$dictionary["AOS_Quotes"]["fields"]["opportunities_aos_quotes_1_name"] = array (
  'name' => 'opportunities_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_QUOTES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_quotes_1opportunities_ida',
  'link' => 'opportunities_aos_quotes_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["opportunities_aos_quotes_1opportunities_ida"] = array (
  'name' => 'opportunities_aos_quotes_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);
