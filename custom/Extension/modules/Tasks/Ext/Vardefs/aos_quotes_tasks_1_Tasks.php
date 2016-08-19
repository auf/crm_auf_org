<?php
// created: 2016-08-11 10:52:42
$dictionary["Task"]["fields"]["aos_quotes_tasks_1"] = array (
  'name' => 'aos_quotes_tasks_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_tasks_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_tasks_1aos_quotes_ida',
);
$dictionary["Task"]["fields"]["aos_quotes_tasks_1_name"] = array (
  'name' => 'aos_quotes_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_tasks_1aos_quotes_ida',
  'link' => 'aos_quotes_tasks_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["aos_quotes_tasks_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_tasks_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_TASKS_TITLE',
);
