<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


$mod_strings = array (
	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr de vouloir supprimer compte de ce projet ?',
	'ERR_DELETE_RECORD' => 'Un identifiant d\'enregistrement doit être spécifié pour toute suppression.',
	'LBL_ACCOUNT_NAME' => 'Nom de la Compagnie:',
	'LBL_ACCOUNT' => 'Compagnie:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activités',
	'LBL_ADDRESS_INFORMATION' => 'Adresse',
	'LBL_ANNUAL_REVENUE' => 'Revenu annuel:',
	'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
	'LBL_ANY_EMAIL' => 'Tous les emails :',
    'LBL_EMAIL_NON_PRIMARY' => 'Email(s) secondaire(s)',
	'LBL_ANY_PHONE' => 'Tous les téléphones :',
	'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
	'LBL_RATING' => 'Évaluation',
	'LBL_ASSIGNED_TO' => 'Assigné à:',
	'LBL_ASSIGNED_USER' => 'Assigné à :',
	'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID):',
	'LBL_BILLING_ADDRESS_CITY' => 'Ville :',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'Pays :',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Code Postal :',
	'LBL_BILLING_ADDRESS_STATE' => 'Province:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Adrrese 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Adresse 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Adresse 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Adresse :',
	'LBL_BILLING_ADDRESS' => 'Adresse de facturation:',
	'LBL_ACCOUNT_INFORMATION' => 'Information de la Compagnie',
	'LBL_CITY' => 'Ville:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_COUNTRY' => 'Pays :',
	'LBL_DATE_ENTERED' => 'Date de création :',
	'LBL_DATE_MODIFIED' => 'Date de modification:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
	'LBL_DESCRIPTION_INFORMATION' => 'Description des Informations',
	'LBL_DESCRIPTION' => 'Description :',
	'LBL_DUPLICATE' => 'Possiblité d\'un doublone de compte',
	'LBL_EMAIL' => 'Email :',
	'LBL_EMPLOYEES' => 'Employés :',
	'LBL_FAX' => 'Fax:',
	'LBL_INDUSTRY' => 'Industrie :',
	'LBL_LIST_ACCOUNT_NAME' => 'Nom de la Compagnie',
	'LBL_LIST_CITY' => 'Ville',
	'LBL_LIST_EMAIL_ADDRESS' => 'Adresse(s) email',
	'LBL_LIST_PHONE' => 'Téléphone',
	'LBL_LIST_STATE' => 'Province',
	'LBL_LIST_WEBSITE' => 'Website',
	'LBL_MEMBER_OF' => 'Membre de :',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Membre des organisations',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Membre des organisations',
	'LBL_NAME'=>'Nom:',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Autre email :',
	'LBL_OTHER_PHONE' => 'Autre téléphone:',
	'LBL_OWNERSHIP' => 'Propriété:',
	'LBL_PARENT_ACCOUNT_ID' => 'Identifiant du Compte parent',
	'LBL_PHONE_ALT' => 'Numéro de téléphone alternatif:',
	'LBL_PHONE_FAX' => 'Fax:',
	'LBL_PHONE_OFFICE' => 'Téléphone Bureau:',
	'LBL_PHONE' => 'Téléphone:',
    'LBL_EMAIL_ADDRESS' => 'Adresse(s) email',
	'LBL_EMAIL_ADDRESSES' => 'Adresse(s) email',
	'LBL_POSTAL_CODE' => 'Code postal :',
	'LBL_PUSH_BILLING' => 'Envoyer vers Livraison',
	'LBL_PUSH_SHIPPING' => 'Envoyer vers facturation',
	'LBL_SAVE_ACCOUNT' => 'Sauvegarder Compte',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Ville:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pays:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Code Postal:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Province:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresse 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresse 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresse 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Adresse :',
	'LBL_SHIPPING_ADDRESS' => 'Adresse Expédition:',

	'LBL_STATE' => 'Province:',
	'LBL_TICKER_SYMBOL' => 'Symbole Boursier:',
	'LBL_TYPE' => 'Type :',
	'LBL_USERS_ASSIGNED_LINK'=>'Utilisateurs assignés ',
	'LBL_USERS_CREATED_LINK'=>'Créé par les utilisateurs',
	'LBL_USERS_MODIFIED_LINK'=>'Utilisateurs modifiés',
	'LBL_VIEW_FORM_TITLE' => 'Vue Compte',
	'LBL_WEBSITE' => 'SiteWeb:',

	'LNK_ACCOUNT_LIST' => 'Comptes',
	'LNK_NEW_ACCOUNT' => 'Créer un Compte',

	'MSG_DUPLICATE' => 'Créer ce Compte peut potentiellement créer une Compte dupliqué. Vous pouvez choisir un Compte à partir de la liste ci-dessous ou vous pouvez cliquer sur Sauvegarder pour continuer de créer un nouveau Compte avec les données précédemment saisies.',
	'MSG_SHOW_DUPLICATES' => 'Créer ce Compte peut potentiellement créer un Compte dupliqué. Vous pouvez cliquer sur Sauvegarder pour continuer de créer ce nouveau Compte  avec les données précédement saisies ou cliquer sur Annuler.',

	'NTC_COPY_BILLING_ADDRESS' => 'Copier Adresse de livraison dans Adresse de facturation',
	'NTC_COPY_BILLING_ADDRESS2' => 'Copier à l\'adresse d\'Expédition',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Copier Adresse de Facturation dans Adresse de Livraison',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Copier dans l\'Adresse de Livraison',
	'NTC_DELETE_CONFIRMATION' => 'Etes-vous sûr(e) sur de vouloir supprimer cet enregistrement ?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Etes-vous sûr(e) sur de vouloir supprimer cet enregistrement ?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Etes-vous sûr(e) de vouloir supprimer cet enregistrement comme organisation membre ?',

    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Supprimer',

);


