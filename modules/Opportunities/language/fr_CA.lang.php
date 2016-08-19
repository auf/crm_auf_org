<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Opportunités',
    'LBL_MODULE_TITLE' => 'Opportunités: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Opportunité',
    'LBL_VIEW_FORM_TITLE' => 'Vue des Opportunités',
    'LBL_LIST_FORM_TITLE' => 'Liste des Opportunités',
    'LBL_OPPORTUNITY_NAME' => 'Nom des Opportunités:',
    'LBL_OPPORTUNITY' => 'Opportunité:',
    'LBL_NAME' => 'Nom des Opportunités',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Devises',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nom',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom de Compte',
    'LBL_LIST_AMOUNT' => 'Montant des Opportunités',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Montant',
    'LBL_LIST_DATE_CLOSED' => 'Clôture',
    'LBL_LIST_SALES_STAGE' => 'Phase de vente',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_CURRENCY_ID' => 'Devise (ID)',
    'LBL_CURRENCY_NAME' => 'Nom de la Devise',
    'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Opportunité - Devise mise à jour',
    'UPDATE_DOLLARAMOUNTS' => 'Mise à jour des montants en devise par défaut',
    'UPDATE_VERIFY' => 'Vérifier les montants',
    'UPDATE_VERIFY_TXT' => 'Vérifie que les montants des Opportunités contiennent des valeurs numériques correctes (valeurs numériques (0-9) et décimale (.)',
    'UPDATE_FIX' => 'Fixer les montants',
    'UPDATE_FIX_TXT' => 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Mise à jour des montants des Opportunités basés sur le cours actuel des devises.',
    'UPDATE_CREATE_CURRENCY' => 'Créer une devise:',
    'UPDATE_VERIFY_FAIL' => 'Echec de Verification de l\'enregistrement:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Montant actuel:',
    'UPDATE_VERIFY_FIX' => 'Lancer la réparation',
    'UPDATE_INCLUDE_CLOSE' => 'Inclure enregistrements clos',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nouveau Montant:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nouvelle devise:',
    'UPDATE_DONE' => 'Terminé',
    'UPDATE_BUG_COUNT' => 'Bugs trouvés, tentative de correction:',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs trouvés:',
    'UPDATE_COUNT' => 'Enregistrement mis à jour:',
    'UPDATE_RESTORE_COUNT' => 'Montants enregistrés restaurés:',
    'UPDATE_RESTORE' => 'Restaurer les montants',
    'UPDATE_RESTORE_TXT' => 'Restaurer les montants depuis le backup créé lors de la réparation.',
    'UPDATE_FAIL' => 'Impossible de mettre à jour -',
    'UPDATE_NULL_VALUE' => 'Le montant est NULL à remplacer par 0 -',
    'UPDATE_MERGE' => 'Fusionner les devises',
    'UPDATE_MERGE_TXT' => 'Fusionner les devises. Si vous notez qu\'il y a plusieurs devises enregistrées pour la même devise, vous pouvez choisir de les fusionner. Cela va également fusionner les devises pour tous les autres modules.',
    'LBL_ACCOUNT_NAME' => 'Compte:',
    'LBL_AMOUNT' => 'Montant Opportunité:',
    'LBL_AMOUNT_USDOLLAR' => 'Montant (devise par défaut):',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_DATE_CLOSED' => 'Date de Clôture:',
    'LBL_TYPE' => 'Type :',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_NEXT_STEP' => 'Prochaine étape:',
    'LBL_LEAD_SOURCE' => 'Origine du Prospect :',
    'LBL_SALES_STAGE' => 'Phase de vente:',
    'LBL_PROBABILITY' => 'Probabilité (%):',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DUPLICATE' => 'Possibilité de duplication des Opportunités',
    'MSG_DUPLICATE' => 'Possibilité de doublon avec une Opportunité existante. La liste ci-dessous reprend les Opportunité similaires.<br> Vous pouvez soit en sélectionner une dans la liste ci-dessous. soit cliquer sur "Sauvegarder" pour poursuivre la création, soit cliquer sur "Annuler".',
    'LBL_NEW_FORM_TITLE' => 'Créer une Opportunité',
    'LNK_NEW_OPPORTUNITY' => 'Créer une Opportunité',
    'LNK_OPPORTUNITY_LIST' => 'Voir Opportunités',
    'ERR_DELETE_RECORD' => 'Un enregistrement doit être sélectionné pour toute suppression.',
    'LBL_TOP_OPPORTUNITIES' => 'Top Opportunités ouvertes',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Etes-vous sûr de vouloir supprimer ce contact pour cette Opportunité?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr de vouloir supprimer cette Opportunité de ce Projet ?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités à Réaliser',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique et Activités terminées',
    'LBL_RAW_AMOUNT' => 'Montant Brut',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mes Opportunités Fermées',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total des Opportunités',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Opportunités Fermées et Gagnées',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID)',
    'LBL_CREATED_ID' => 'Créé par (ID)',
    'LBL_MODIFIED_ID' => 'Modifié par (ID)',
    'LBL_MODIFIED_NAME' => 'Modifié par',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LABEL_PANEL_ASSIGNMENT' => 'Assignation',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import Opportunités',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Campagne (ID)',
    'LBL_OPPORTUNITY_TYPE' => 'Type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
    'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
    'LBL_EXPORT_NAME' => 'Nom',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Historique des emails des contacts liés',
    'TWITTER_USER_C' => 'Utilisateur Twitter',
);

?>
