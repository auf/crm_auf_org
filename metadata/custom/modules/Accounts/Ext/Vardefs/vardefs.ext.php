<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-12-21 14:04:34
$dictionary["Account"]["fields"]["accounts_sm_responsable_1"] = array (
  'name' => 'accounts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'accounts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);


$dictionary["Account"]["fields"]["aos_quotes"] = array (
  'name' => 'aos_quotes',
    'type' => 'link',
    'relationship' => 'account_aos_quotes',
    'module'=>'AOS_Quotes',
    'bean_name'=>'AOS_Quotes',
    'source'=>'non-db',
);

$dictionary["Account"]["relationships"]["account_aos_quotes"] = array (
	'lhs_module'=> 'Accounts', 
	'lhs_table'=> 'accounts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Quotes', 
	'rhs_table'=> 'aos_quotes', 
	'rhs_key' => 'billing_account_id',
	'relationship_type'=>'one-to-many',
);

$dictionary["Account"]["fields"]["aos_invoices"] = array (
  'name' => 'aos_invoices',
    'type' => 'link',
    'relationship' => 'account_aos_invoices',
    'module'=>'AOS_Invoices',
    'bean_name'=>'AOS_Invoices',
    'source'=>'non-db',
);

$dictionary["Account"]["relationships"]["account_aos_invoices"] = array (
	'lhs_module'=> 'Accounts', 
	'lhs_table'=> 'accounts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Invoices', 
	'rhs_table'=> 'aos_invoices', 
	'rhs_key' => 'billing_account_id',
	'relationship_type'=>'one-to-many',
);

$dictionary["Account"]["fields"]["aos_contracts"] = array (
  'name' => 'aos_contracts',
    'type' => 'link',
    'relationship' => 'account_aos_contracts',
    'module'=>'AOS_Contracts',
    'bean_name'=>'AOS_Contracts',
    'source'=>'non-db',
);

$dictionary["Account"]["relationships"]["account_aos_contracts"] = array (
	'lhs_module'=> 'Accounts', 
	'lhs_table'=> 'accounts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Contracts', 
	'rhs_table'=> 'aos_contracts', 
	'rhs_key' => 'contract_account_id',
	'relationship_type'=>'one-to-many',
);




$dictionary['Account']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_accounts',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






 // created: 2016-01-12 09:38:23
$dictionary['Account']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2016-04-14 14:59:49
$dictionary['Account']['fields']['actif_c']['inline_edit']='1';
$dictionary['Account']['fields']['actif_c']['labelValue']='Actif';

 

 // created: 2015-12-21 12:13:36
$dictionary['Account']['fields']['adhesion_c']['inline_edit']='1';
$dictionary['Account']['fields']['adhesion_c']['labelValue']='Année d\'adhésion';

 

 // created: 2015-12-21 13:31:40
$dictionary['Account']['fields']['billing_address_city']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_city']['comments']='The city used for billing address';
$dictionary['Account']['fields']['billing_address_city']['merge_filter']='disabled';

 

 // created: 2016-04-27 15:00:50
$dictionary['Account']['fields']['billing_address_country']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_country']['comments']='The country used for the billing address';
$dictionary['Account']['fields']['billing_address_country']['merge_filter']='disabled';
$dictionary['Account']['fields']['billing_address_country']['function']='getCountryNormal';
$dictionary['Account']['fields']['billing_address_country']['type']='enum';
$dictionary['Account']['fields']['billing_address_country']['default']='$vardef.default';
$dictionary['Account']['fields']['billing_address_country']['options']='';

 

 // created: 2015-12-21 13:31:03
$dictionary['Account']['fields']['billing_address_postalcode']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_postalcode']['comments']='The postal code used for billing address';
$dictionary['Account']['fields']['billing_address_postalcode']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:31:16
$dictionary['Account']['fields']['billing_address_state']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_state']['comments']='The state used for billing address';
$dictionary['Account']['fields']['billing_address_state']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:30:51
$dictionary['Account']['fields']['billing_address_street']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_street']['comments']='The street address used for billing address';
$dictionary['Account']['fields']['billing_address_street']['merge_filter']='disabled';

 

 // created: 2016-05-27 20:36:25
$dictionary['Account']['fields']['billing_address_street_num_c']['inline_edit']='1';
$dictionary['Account']['fields']['billing_address_street_num_c']['labelValue']='LBL_BILLING_ADDRESS_STREET_NUM';

 

 // created: 2015-12-21 12:14:56
$dictionary['Account']['fields']['cedex_c']['inline_edit']='1';
$dictionary['Account']['fields']['cedex_c']['labelValue']='Cedex';

 

 // created: 2015-12-21 12:46:20
$dictionary['Account']['fields']['chiffres_c']['inline_edit']='1';
$dictionary['Account']['fields']['chiffres_c']['labelValue']='Chiffres clés annuaire';

 

 // created: 2015-12-21 12:00:47
$dictionary['Account']['fields']['coda_name_c']['inline_edit']='1';
$dictionary['Account']['fields']['coda_name_c']['labelValue']='Nom long (Coda)';

 

 // created: 2015-12-21 12:00:23
$dictionary['Account']['fields']['coda_sname_c']['inline_edit']='1';
$dictionary['Account']['fields']['coda_sname_c']['labelValue']='Nom court (Coda)';

 

 // created: 2015-12-21 12:09:11
$dictionary['Account']['fields']['code_hier_c']['inline_edit']='1';
$dictionary['Account']['fields']['code_hier_c']['labelValue']='Code HIER';

 

 // created: 2015-12-21 12:45:51
$dictionary['Account']['fields']['commentaire2_c']['inline_edit']='1';
$dictionary['Account']['fields']['commentaire2_c']['labelValue']='Commentaires';

 

 // created: 2016-04-14 15:05:12
$dictionary['Account']['fields']['commentaire_c']['inline_edit']='1';
$dictionary['Account']['fields']['commentaire_c']['labelValue']='Commentaires statut';

 

 // created: 2016-01-11 13:10:24
$dictionary['Account']['fields']['date_effectif_c']['inline_edit']='1';
$dictionary['Account']['fields']['date_effectif_c']['labelValue']='Effectif le';

 

 // created: 2015-12-21 12:06:36
$dictionary['Account']['fields']['date_maj_c']['inline_edit']='1';
$dictionary['Account']['fields']['date_maj_c']['labelValue']='Modifié le';
$dictionary['Account']['fields']['date_maj_c']['type'] = 'readonly';

 

 // created: 2015-12-21 13:01:58
$dictionary['Account']['fields']['date_modified']['inline_edit']=true;
$dictionary['Account']['fields']['date_modified']['comments']='Date record last modified';
$dictionary['Account']['fields']['date_modified']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:33:49
$dictionary['Account']['fields']['description']['inline_edit']=true;
$dictionary['Account']['fields']['description']['comments']='Full text of the note';
$dictionary['Account']['fields']['description']['merge_filter']='disabled';

 

 // created: 2016-01-08 15:46:34
$dictionary['Account']['fields']['domaines_section_c']['inline_edit']='1';
$dictionary['Account']['fields']['domaines_section_c']['labelValue']='Domaines';

 

 // created: 2016-04-14 15:02:18
$dictionary['Account']['fields']['domaine_c']['inline_edit']='1';
$dictionary['Account']['fields']['domaine_c']['labelValue']='Disciplines';

 

 // created: 2015-12-21 13:33:21
$dictionary['Account']['fields']['email1']['inline_edit']=true;
$dictionary['Account']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2015-12-21 12:17:30
$dictionary['Account']['fields']['fax2_c']['inline_edit']='1';
$dictionary['Account']['fields']['fax2_c']['labelValue']='Télécopieur 2';

 

 // created: 2015-12-21 12:42:14
$dictionary['Account']['fields']['historique_c']['inline_edit']='1';
$dictionary['Account']['fields']['historique_c']['labelValue']='Historique RG';

 

 // created: 2015-12-21 11:53:11
$dictionary['Account']['fields']['id_etablissement_c']['inline_edit']='1';
$dictionary['Account']['fields']['id_etablissement_c']['labelValue']='CGRM';
$dictionary['Account']['fields']['id_etablissement_c']['type'] = 'readonly';

 

 // created: 2016-01-08 15:07:37
$dictionary['Account']['fields']['id_region_a_c']['inline_edit']='1';
$dictionary['Account']['fields']['id_region_a_c']['labelValue']='Région administrative';
//$dictionary['Account']['fields']['id_region_a_c']['function']='get_id_region_a_c';

 

 // created: 2016-04-28 10:38:24
$dictionary['Account']['fields']['id_region_g_c']['inline_edit']='1';
$dictionary['Account']['fields']['id_region_g_c']['labelValue']='Région géopolitique';

 

 // created: 2016-01-08 14:01:40
$dictionary['Account']['fields']['implantation_c']['inline_edit']='1';
$dictionary['Account']['fields']['implantation_c']['labelValue']='Bureau de rattachement';
$dictionary['Account']['fields']['implantation_c']['function']='get_implantation_c';

 

 // created: 2015-12-21 12:09:45
$dictionary['Account']['fields']['intit_lg_fr_c']['inline_edit']='1';
$dictionary['Account']['fields']['intit_lg_fr_c']['labelValue']='Intitulé (français)';

 

 // created: 2015-12-21 12:10:12
$dictionary['Account']['fields']['intit_lg_origine_c']['inline_edit']='1';
$dictionary['Account']['fields']['intit_lg_origine_c']['labelValue']='Intitulé (langue d\'origine)';

 

 // created: 2015-10-21 11:17:55
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:55
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:54
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:54
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2015-12-21 13:02:26
$dictionary['Account']['fields']['name']['inline_edit']=true;
$dictionary['Account']['fields']['name']['comments']='Name of the Company';
$dictionary['Account']['fields']['name']['merge_filter']='disabled';

 

 // created: 2015-12-21 12:44:54
$dictionary['Account']['fields']['nb_cherch_annee_obs_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_cherch_annee_obs_c']['labelValue']='Année d\'observation ';

 

 // created: 2015-12-21 12:44:27
$dictionary['Account']['fields']['nb_cherch_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_cherch_c']['labelValue']='Nombre de chercheurs';

 

 // created: 2015-12-21 15:28:39
$dictionary['Account']['fields']['nb_ens_annee_obs_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_ens_annee_obs_c']['labelValue']='Année d\'observation';

 

 // created: 2015-12-21 12:43:55
$dictionary['Account']['fields']['nb_ens_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_ens_c']['labelValue']='Nombre d\'enseignants';

 

 // created: 2015-12-21 12:43:28
$dictionary['Account']['fields']['nb_etud_annee_obs_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_etud_annee_obs_c']['labelValue']='Année d\'observation';

 

 // created: 2015-12-21 12:42:51
$dictionary['Account']['fields']['nb_etud_c']['inline_edit']='1';
$dictionary['Account']['fields']['nb_etud_c']['labelValue']='Nombre d\'étudiants';

 

 // created: 2016-04-14 15:00:53
$dictionary['Account']['fields']['parent_c']['inline_edit']='1';
$dictionary['Account']['fields']['parent_c']['labelValue']='Parent';

 

 // created: 2016-01-15 15:24:26
$dictionary['Account']['fields']['pays_iso2_c']['inline_edit']='1';
$dictionary['Account']['fields']['pays_iso2_c']['labelValue']='Code Pays';
$dictionary['Account']['fields']['pays_iso2_c']['function']='getCountry';

 

 // created: 2016-04-27 15:02:32
$dictionary['Account']['fields']['pays_text_c']['inline_edit']='1';
$dictionary['Account']['fields']['pays_text_c']['labelValue']='Pays';
//$dictionary['Account']['fields']['pays_text_c']['function']='getCountryNormal';
$dictionary['Account']['fields']['pays_text_c']['type']='enum';



 // created: 2015-12-21 13:32:43
$dictionary['Account']['fields']['phone_alternate']['inline_edit']=true;
$dictionary['Account']['fields']['phone_alternate']['comments']='An alternate phone number';
$dictionary['Account']['fields']['phone_alternate']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:33:04
$dictionary['Account']['fields']['phone_fax']['inline_edit']=true;
$dictionary['Account']['fields']['phone_fax']['comments']='The fax phone number of this company';
$dictionary['Account']['fields']['phone_fax']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:32:23
$dictionary['Account']['fields']['phone_office']['inline_edit']=true;
$dictionary['Account']['fields']['phone_office']['comments']='The office phone number';
$dictionary['Account']['fields']['phone_office']['merge_filter']='disabled';

 

 // created: 2016-01-15 15:20:54
$dictionary['Account']['fields']['poste1_c']['inline_edit']='1';
$dictionary['Account']['fields']['poste1_c']['labelValue']='Poste1';

 

 // created: 2016-01-15 15:21:30
$dictionary['Account']['fields']['poste2_c']['inline_edit']='1';
$dictionary['Account']['fields']['poste2_c']['labelValue']='Poste2';

 

 // created: 2015-12-21 12:01:30
$dictionary['Account']['fields']['prive_c']['inline_edit']='1';
$dictionary['Account']['fields']['prive_c']['labelValue']='Public/Privé';

 

 // created: 2015-12-21 12:05:11
$dictionary['Account']['fields']['publication_electronique_c']['inline_edit']='1';
$dictionary['Account']['fields']['publication_electronique_c']['labelValue']='Publication electronique';

 

 // created: 2015-12-21 12:04:46
$dictionary['Account']['fields']['publication_papier_c']['inline_edit']='1';
$dictionary['Account']['fields']['publication_papier_c']['labelValue']='Publication papier';

 

 // created: 2015-12-21 12:12:46
$dictionary['Account']['fields']['qualite_c']['inline_edit']='1';
$dictionary['Account']['fields']['qualite_c']['labelValue']='Qualité';

 

 // created: 2015-12-21 12:45:27
$dictionary['Account']['fields']['rub_c']['inline_edit']='1';
$dictionary['Account']['fields']['rub_c']['labelValue']='Historique annuaire';

 

 // created: 2016-05-27 19:26:41
$dictionary['Account']['fields']['shipping_address_street_num_c']['inline_edit']='1';
$dictionary['Account']['fields']['shipping_address_street_num_c']['labelValue']='No. Rue';

 

 // created: 2015-12-21 12:14:19
$dictionary['Account']['fields']['sigle_c']['inline_edit']='1';
$dictionary['Account']['fields']['sigle_c']['labelValue']='Sigle';

 

 // created: 2016-03-04 13:53:31
$dictionary['Account']['fields']['statut_c']['inline_edit']='1';
$dictionary['Account']['fields']['statut_c']['labelValue']='Statut';

 

 // created: 2015-12-21 11:58:52
$dictionary['Account']['fields']['type_etablissement_c']['inline_edit']='1';
$dictionary['Account']['fields']['type_etablissement_c']['labelValue']='Niveau hiérarchique';

 

 // created: 2015-12-21 12:15:33
$dictionary['Account']['fields']['ville_lg_origine_c']['inline_edit']='1';
$dictionary['Account']['fields']['ville_lg_origine_c']['labelValue']='Ville (langue d\'origine)';

 

 // created: 2015-12-21 13:33:34
$dictionary['Account']['fields']['website']['inline_edit']=true;
$dictionary['Account']['fields']['website']['comments']='URL of website for the company';
$dictionary['Account']['fields']['website']['merge_filter']='disabled';
$dictionary['Account']['fields']['website']['link_target']='_self';

 
?>