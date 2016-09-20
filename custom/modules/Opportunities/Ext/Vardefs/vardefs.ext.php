<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-08-12 13:26:38
$dictionary['Opportunity']['fields']['montant_finance_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['montant_finance_c']['labelValue']='Montant financé';

 

 // created: 2016-08-10 11:27:13
$dictionary['Opportunity']['fields']['etapes_d_implantation_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['etapes_d_implantation_c']['labelValue']='Etapes d implantation';

 

 // created: 2016-05-27 08:43:08
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2016-08-10 11:28:16
$dictionary['Opportunity']['fields']['pourquoi_perdu_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['pourquoi_perdu_c']['labelValue']='Pourquoi perdu';

 

 // created: 2016-08-19 14:26:06
$dictionary['Opportunity']['fields']['montant_initial_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['montant_initial_c']['labelValue']='Montant initial';

 

// created: 2016-08-18 15:33:13
$dictionary["Opportunity"]["fields"]["fs_fourniseur_opportunities_1"] = array (
  'name' => 'fs_fourniseur_opportunities_1',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_opportunities_1',
  'source' => 'non-db',
  'module' => 'fs_fourniseur',
  'bean_name' => 'fs_fourniseur',
  'vname' => 'LBL_FS_FOURNISEUR_OPPORTUNITIES_1_FROM_FS_FOURNISEUR_TITLE',
  'id_name' => 'fs_fourniseur_opportunities_1fs_fourniseur_ida',
);
$dictionary["Opportunity"]["fields"]["fs_fourniseur_opportunities_1_name"] = array (
  'name' => 'fs_fourniseur_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FS_FOURNISEUR_OPPORTUNITIES_1_FROM_FS_FOURNISEUR_TITLE',
  'save' => true,
  'id_name' => 'fs_fourniseur_opportunities_1fs_fourniseur_ida',
  'link' => 'fs_fourniseur_opportunities_1',
  'table' => 'fs_fourniseur',
  'module' => 'fs_fourniseur',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["fs_fourniseur_opportunities_1fs_fourniseur_ida"] = array (
  'name' => 'fs_fourniseur_opportunities_1fs_fourniseur_ida',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FS_FOURNISEUR_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2016-08-10 11:33:51
$dictionary['Opportunity']['fields']['scientifique_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['scientifique_c']['labelValue']='Scientifique';

 

 // created: 2016-08-15 14:27:02
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';

 

 // created: 2016-08-12 13:27:00
$dictionary['Opportunity']['fields']['montant_propositions_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['montant_propositions_c']['labelValue']='Montant propositions';

 

 // created: 2016-08-12 13:27:08
$dictionary['Opportunity']['fields']['montant_partenariats_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['montant_partenariats_c']['labelValue']='Montant partenariats';

 

 // created: 2016-05-27 08:43:01
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2016-05-27 08:43:10
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2016-08-19 14:25:55
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['required']=false;

 

// created: 2016-08-12 11:19:52
$dictionary["Opportunity"]["fields"]["opportunities_aos_quotes_1"] = array (
  'name' => 'opportunities_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'opportunities_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


 // created: 2016-05-27 08:43:00
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2016-08-10 11:37:22
$dictionary['Opportunity']['fields']['familles_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['familles_c']['labelValue']='Familles';

 
?>