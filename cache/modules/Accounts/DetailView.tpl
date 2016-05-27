

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li><input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}"/></li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Accounts_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='Accounts'}
<script>
      document.getElementById('detailpanel_1').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="name" width='37.5%' colspan='3' >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.intit_lg_origine_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INTIT_LG_ORIGINE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="intit_lg_origine_c" width='37.5%' colspan='3' >
{if !$fields.intit_lg_origine_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.intit_lg_origine_c.value) <= 0}
{assign var="value" value=$fields.intit_lg_origine_c.default_value }
{else}
{assign var="value" value=$fields.intit_lg_origine_c.value }
{/if} 
<span class="sugar_field" id="{$fields.intit_lg_origine_c.name}">{$fields.intit_lg_origine_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.sigle_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SIGLE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="sigle_c" width='37.5%'  >
{if !$fields.sigle_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sigle_c.value) <= 0}
{assign var="value" value=$fields.sigle_c.default_value }
{else}
{assign var="value" value=$fields.sigle_c.value }
{/if} 
<span class="sugar_field" id="{$fields.sigle_c.name}">{$fields.sigle_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.type_etablissement_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE_ETABLISSEMENT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="type_etablissement_c" width='37.5%'  >
{if !$fields.type_etablissement_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.type_etablissement_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.type_etablissement_c.name}" value="{ $fields.type_etablissement_c.options }">
{ $fields.type_etablissement_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.type_etablissement_c.name}" value="{ $fields.type_etablissement_c.value }">
{ $fields.type_etablissement_c.options[$fields.type_etablissement_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.coda_name_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CODA_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="coda_name_c" width='37.5%'  >
{if !$fields.coda_name_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.coda_name_c.value) <= 0}
{assign var="value" value=$fields.coda_name_c.default_value }
{else}
{assign var="value" value=$fields.coda_name_c.value }
{/if} 
<span class="sugar_field" id="{$fields.coda_name_c.name}">{$fields.coda_name_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actif_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTIF' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="actif_c" width='37.5%'  >
{if !$fields.actif_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.actif_c.value) == "1" || strval($fields.actif_c.value) == "yes" || strval($fields.actif_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.actif_c.name}" id="{$fields.actif_c.name}" value="$fields.actif_c.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.coda_sname_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CODA_SNAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="coda_sname_c" width='37.5%'  >
{if !$fields.coda_sname_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.coda_sname_c.value) <= 0}
{assign var="value" value=$fields.coda_sname_c.default_value }
{else}
{assign var="value" value=$fields.coda_sname_c.value }
{/if} 
<span class="sugar_field" id="{$fields.coda_sname_c.name}">{$fields.coda_sname_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.id_etablissement_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ID_ETABLISSEMENT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="readonly" field="id_etablissement_c" width='37.5%'  >
{if !$fields.id_etablissement_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.id_etablissement_c.value) <= 0}
{assign var="value" value=$fields.id_etablissement_c.default_value }
{else}
{assign var="value" value=$fields.id_etablissement_c.value }
{/if} 
<span class="sugar_field" id="{$fields.id_etablissement_c.name}">{$fields.id_etablissement_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.implantation_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_IMPLANTATION' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="implantation_c" width='37.5%'  >
{if !$fields.implantation_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.implantation_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.implantation_c.name}" value="{ $fields.implantation_c.options }">
{ $fields.implantation_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.implantation_c.name}" value="{ $fields.implantation_c.value }">
{ $fields.implantation_c.options[$fields.implantation_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.code_hier_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CODE_HIER' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="code_hier_c" width='37.5%'  >
{if !$fields.code_hier_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.code_hier_c.value) <= 0}
{assign var="value" value=$fields.code_hier_c.default_value }
{else}
{assign var="value" value=$fields.code_hier_c.value }
{/if} 
<span class="sugar_field" id="{$fields.code_hier_c.name}">{$fields.code_hier_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.id_region_a_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ID_REGION_A' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="id_region_a_c" width='37.5%'  >
{if !$fields.id_region_a_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.id_region_a_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.id_region_a_c.name}" value="{ $fields.id_region_a_c.options }">
{ $fields.id_region_a_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.id_region_a_c.name}" value="{ $fields.id_region_a_c.value }">
{ $fields.id_region_a_c.options[$fields.id_region_a_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prive_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIVE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="prive_c" width='37.5%'  >
{if !$fields.prive_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.prive_c.value) == "1" || strval($fields.prive_c.value) == "yes" || strval($fields.prive_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.prive_c.name}" id="{$fields.prive_c.name}" value="$fields.prive_c.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.id_region_g_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ID_REGION_G' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="id_region_g_c" width='37.5%'  >
{if !$fields.id_region_g_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.id_region_g_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.id_region_g_c.name}" value="{ $fields.id_region_g_c.options }">
{ $fields.id_region_g_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.id_region_g_c.name}" value="{ $fields.id_region_g_c.value }">
{ $fields.id_region_g_c.options[$fields.id_region_g_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.website.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WEBSITE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="url" field="website" width='37.5%'  >
{if !$fields.website.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.website.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.website.name}">
<a href='{$link|to_url}' target='_blank' >{$link}</a>
</span>
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='Accounts'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.statut_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="statut_c" width='37.5%'  >
{if !$fields.statut_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.statut_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.statut_c.name}" value="{ $fields.statut_c.options }">
{ $fields.statut_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.statut_c.name}" value="{ $fields.statut_c.value }">
{ $fields.statut_c.options[$fields.statut_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_effectif_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_EFFECTIF' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="datetimecombo" field="date_effectif_c" width='37.5%'  >
{if !$fields.date_effectif_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_effectif_c.value) <= 0}
{assign var="value" value=$fields.date_effectif_c.default_value }
{else}
{assign var="value" value=$fields.date_effectif_c.value }
{/if} 
<span class="sugar_field" id="{$fields.date_effectif_c.name}">{$fields.date_effectif_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.qualite_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUALITE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="qualite_c" width='37.5%'  >
{if !$fields.qualite_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.qualite_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.qualite_c.name}" value="{ $fields.qualite_c.options }">
{ $fields.qualite_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.qualite_c.name}" value="{ $fields.qualite_c.value }">
{ $fields.qualite_c.options[$fields.qualite_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.adhesion_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADHESION' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="adhesion_c" width='37.5%'  >
{if !$fields.adhesion_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.adhesion_c.value) <= 0}
{assign var="value" value=$fields.adhesion_c.default_value }
{else}
{assign var="value" value=$fields.adhesion_c.value }
{/if} 
<span class="sugar_field" id="{$fields.adhesion_c.name}">{$fields.adhesion_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.commentaire_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COMMENTAIRE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="commentaire_c" width='37.5%' colspan='3' >
{if !$fields.commentaire_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.commentaire_c.name|escape:'html'|url2html|nl2br}">{$fields.commentaire_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL9' module='Accounts'}
<script>
      document.getElementById('detailpanel_3').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL9' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.parent_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PARENT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="parent_c" width='37.5%' colspan='3' >
{if !$fields.parent_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.account_id_c.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.account_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id_c" class="sugar_field" data-id-value="{$fields.account_id_c.value}">{$fields.parent_c.value}</span>
{if !empty($fields.account_id_c.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(3, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL9").style.display='none';</script>
{/if}
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL5' module='Accounts'}
<script>
      document.getElementById('detailpanel_4').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL5' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="billing_address_street" width='37.5%'  >
{if !$fields.billing_address_street.hidden}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="billing_address_street" value="{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_city" value="{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_state" value="{$fields.billing_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_country" value="{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.billing_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_billing}
</td>
</tr>
</table>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_address_postalcode.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS_POSTALCODE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="billing_address_postalcode" width='37.5%'  >
{if !$fields.billing_address_postalcode.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.billing_address_postalcode.value) <= 0}
{assign var="value" value=$fields.billing_address_postalcode.default_value }
{else}
{assign var="value" value=$fields.billing_address_postalcode.value }
{/if} 
<span class="sugar_field" id="{$fields.billing_address_postalcode.name}">{$fields.billing_address_postalcode.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.poste1_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_POSTE1' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="poste1_c" width='37.5%'  >
{if !$fields.poste1_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.poste1_c.value) <= 0}
{assign var="value" value=$fields.poste1_c.default_value }
{else}
{assign var="value" value=$fields.poste1_c.value }
{/if} 
<span class="sugar_field" id="{$fields.poste1_c.name}">{$fields.poste1_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cedex_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEDEX' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="cedex_c" width='37.5%'  >
{if !$fields.cedex_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cedex_c.value) <= 0}
{assign var="value" value=$fields.cedex_c.default_value }
{else}
{assign var="value" value=$fields.cedex_c.value }
{/if} 
<span class="sugar_field" id="{$fields.cedex_c.name}">{$fields.cedex_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_alternate.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONE_ALT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_alternate" width='37.5%'  class="phone">
{if !$fields.phone_alternate.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_alternate.value)}
{assign var="phone_value" value=$fields.phone_alternate.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_address_state.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="billing_address_state" width='37.5%'  >
{if !$fields.billing_address_state.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.billing_address_state.value) <= 0}
{assign var="value" value=$fields.billing_address_state.default_value }
{else}
{assign var="value" value=$fields.billing_address_state.value }
{/if} 
<span class="sugar_field" id="{$fields.billing_address_state.name}">{$fields.billing_address_state.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.poste2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_POSTE2' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="poste2_c" width='37.5%'  >
{if !$fields.poste2_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.poste2_c.value) <= 0}
{assign var="value" value=$fields.poste2_c.default_value }
{else}
{assign var="value" value=$fields.poste2_c.value }
{/if} 
<span class="sugar_field" id="{$fields.poste2_c.name}">{$fields.poste2_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.billing_address_city.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="billing_address_city" width='37.5%'  >
{if !$fields.billing_address_city.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.billing_address_city.value) <= 0}
{assign var="value" value=$fields.billing_address_city.default_value }
{else}
{assign var="value" value=$fields.billing_address_city.value }
{/if} 
<span class="sugar_field" id="{$fields.billing_address_city.name}">{$fields.billing_address_city.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.phone_fax.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="phone_fax" width='37.5%'  class="phone">
{if !$fields.phone_fax.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ville_lg_origine_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VILLE_LG_ORIGINE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="ville_lg_origine_c" width='37.5%'  >
{if !$fields.ville_lg_origine_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.ville_lg_origine_c.value) <= 0}
{assign var="value" value=$fields.ville_lg_origine_c.default_value }
{else}
{assign var="value" value=$fields.ville_lg_origine_c.value }
{/if} 
<span class="sugar_field" id="{$fields.ville_lg_origine_c.name}">{$fields.ville_lg_origine_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fax2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX2' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="phone" field="fax2_c" width='37.5%'  class="phone">
{if !$fields.fax2_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.fax2_c.value)}
{assign var="phone_value" value=$fields.fax2_c.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pays_text_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYS_TEXT' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="pays_text_c" width='37.5%'  >
{if !$fields.pays_text_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.pays_text_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.pays_text_c.name}" value="{ $fields.pays_text_c.options }">
{ $fields.pays_text_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.pays_text_c.name}" value="{ $fields.pays_text_c.value }">
{ $fields.pays_text_c.options[$fields.pays_text_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.email1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="email1" width='37.5%'  >
{if !$fields.email1.hidden}
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(4, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL5").style.display='none';</script>
{/if}
<div id='detailpanel_5' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(5);">
<img border="0" id="detailpanel_5_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(5);">
<img border="0" id="detailpanel_5_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL8' module='Accounts'}
<script>
      document.getElementById('detailpanel_5').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL8' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.domaine_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOMAINE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="multienum" field="domaine_c" width='37.5%' colspan='3' >
{if !$fields.domaine_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.domaine_c.value) && ($fields.domaine_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.domaine_c.name}" value="{$fields.domaine_c.value}">
{multienum_to_array string=$fields.domaine_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.domaine_c.options.$item }</li>
{/foreach}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(5, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL8").style.display='none';</script>
{/if}
<div id='detailpanel_6' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(6);">
<img border="0" id="detailpanel_6_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(6);">
<img border="0" id="detailpanel_6_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL7' module='Accounts'}
<script>
      document.getElementById('detailpanel_6').className += ' expanded';
    </script>
</h4>
<table id='LBL_EDITVIEW_PANEL7' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_etud_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_ETUD' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="nb_etud_c" width='37.5%'  >
{if !$fields.nb_etud_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.nb_etud_c.name}">
{sugar_number_format precision=0 var=$fields.nb_etud_c.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_etud_annee_obs_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_ETUD_ANNEE_OBS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="nb_etud_annee_obs_c" width='37.5%'  >
{if !$fields.nb_etud_annee_obs_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.nb_etud_annee_obs_c.name}">
{sugar_number_format precision=0 var=$fields.nb_etud_annee_obs_c.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_ens_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_ENS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="nb_ens_c" width='37.5%'  >
{if !$fields.nb_ens_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.nb_ens_c.name}">
{sugar_number_format precision=0 var=$fields.nb_ens_c.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_ens_annee_obs_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_ENS_ANNEE_OBS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="nb_ens_annee_obs_c" width='37.5%'  >
{if !$fields.nb_ens_annee_obs_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nb_ens_annee_obs_c.value) <= 0}
{assign var="value" value=$fields.nb_ens_annee_obs_c.default_value }
{else}
{assign var="value" value=$fields.nb_ens_annee_obs_c.value }
{/if} 
<span class="sugar_field" id="{$fields.nb_ens_annee_obs_c.name}">{$fields.nb_ens_annee_obs_c.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_cherch_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_CHERCH' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="nb_cherch_c" width='37.5%'  >
{if !$fields.nb_cherch_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.nb_cherch_c.name}">
{sugar_number_format precision=0 var=$fields.nb_cherch_c.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nb_cherch_annee_obs_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NB_CHERCH_ANNEE_OBS' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="nb_cherch_annee_obs_c" width='37.5%'  >
{if !$fields.nb_cherch_annee_obs_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.nb_cherch_annee_obs_c.name}">
{sugar_number_format precision=0 var=$fields.nb_cherch_annee_obs_c.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.rub_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RUB' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="rub_c" width='37.5%' colspan='3' >
{if !$fields.rub_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.rub_c.name|escape:'html'|url2html|nl2br}">{$fields.rub_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.chiffres_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CHIFFRES' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="chiffres_c" width='37.5%' colspan='3' >
{if !$fields.chiffres_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.chiffres_c.name|escape:'html'|url2html|nl2br}">{$fields.chiffres_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.commentaire2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COMMENTAIRE2' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="commentaire2_c" width='37.5%' colspan='3' >
{if !$fields.commentaire2_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.commentaire2_c.name|escape:'html'|url2html|nl2br}">{$fields.commentaire2_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.publication_electronique_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PUBLICATION_ELECTRONIQUE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="publication_electronique_c" width='37.5%'  >
{if !$fields.publication_electronique_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.publication_electronique_c.value) == "1" || strval($fields.publication_electronique_c.value) == "yes" || strval($fields.publication_electronique_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.publication_electronique_c.name}" id="{$fields.publication_electronique_c.name}" value="$fields.publication_electronique_c.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.publication_papier_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PUBLICATION_PAPIER' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="publication_papier_c" width='37.5%'  >
{if !$fields.publication_papier_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.publication_papier_c.value) == "1" || strval($fields.publication_papier_c.value) == "yes" || strval($fields.publication_papier_c.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.publication_papier_c.name}" id="{$fields.publication_papier_c.name}" value="$fields.publication_papier_c.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pays_iso2_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYS_ISO2_C' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="pays_iso2_c" width='37.5%'  >
{if !$fields.pays_iso2_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.pays_iso2_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.pays_iso2_c.name}" value="{ $fields.pays_iso2_c.options }">
{ $fields.pays_iso2_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.pays_iso2_c.name}" value="{ $fields.pays_iso2_c.value }">
{ $fields.pays_iso2_c.options[$fields.pays_iso2_c.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(6, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL7").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>