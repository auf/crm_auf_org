<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-06-02 22:08:13
$dictionary['Lead']['fields']['alt_address_country']['inline_edit']=true;
$dictionary['Lead']['fields']['alt_address_country']['comments']='Country for alternate address';
$dictionary['Lead']['fields']['alt_address_country']['merge_filter']='disabled';
$dictionary['Lead']['fields']['alt_address_country']['group']='alt_address';
$dictionary['Lead']['fields']['alt_address_country']['options']='pays_text_list';
$dictionary['Lead']['fields']['alt_address_country']['type']='enum';

 

 // created: 2016-05-27 08:42:52
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

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


 // created: 2016-05-27 08:42:51
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2016-05-27 08:42:53
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2015-12-21 13:56:59
$dictionary['Lead']['fields']['primary_address_country']['inline_edit']=true;
$dictionary['Lead']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Lead']['fields']['primary_address_country']['merge_filter']='disabled';
$dictionary['Lead']['fields']['primary_address_country']['group']='primary_address';
$dictionary['Lead']['fields']['primary_address_country']['options']='pays_text_list';
$dictionary['Lead']['fields']['primary_address_country']['type']='enum';

 

 // created: 2016-05-27 08:42:50
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>