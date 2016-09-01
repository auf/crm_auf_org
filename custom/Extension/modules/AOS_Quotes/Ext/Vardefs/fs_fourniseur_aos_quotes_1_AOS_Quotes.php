<?php
// created: 2016-08-19 14:21:13
$dictionary["AOS_Quotes"]["fields"]["fs_fourniseur_aos_quotes_1"] = array (
  'name' => 'fs_fourniseur_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'fs_fourniseur',
  'bean_name' => 'fs_fourniseur',
  'vname' => 'LBL_FS_FOURNISEUR_AOS_QUOTES_1_FROM_FS_FOURNISEUR_TITLE',
  'id_name' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
);
$dictionary["AOS_Quotes"]["fields"]["fs_fourniseur_aos_quotes_1_name"] = array (
  'name' => 'fs_fourniseur_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FS_FOURNISEUR_AOS_QUOTES_1_FROM_FS_FOURNISEUR_TITLE',
  'save' => true,
  'id_name' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
  'link' => 'fs_fourniseur_aos_quotes_1',
  'table' => 'fs_fourniseur',
  'module' => 'fs_fourniseur',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["fs_fourniseur_aos_quotes_1fs_fourniseur_ida"] = array (
  'name' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FS_FOURNISEUR_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);
