<?php 
 $GLOBALS["dictionary"]["AM_ProjectHolidays"]=array (
  'fields' => 
  array (
    'am_projectholidays_project' => 
    array (
      'name' => 'am_projectholidays_project',
      'type' => 'link',
      'relationship' => 'am_projectholidays_project',
      'source' => 'non-db',
      'module' => 'Project',
      'bean_name' => 'Project',
      'vname' => 'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_PROJECT_TITLE',
      'id_name' => 'am_projectholidays_projectproject_ida',
    ),
    'am_projectholidays_project_name' => 
    array (
      'name' => 'am_projectholidays_project_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_PROJECT_TITLE',
      'save' => true,
      'id_name' => 'am_projectholidays_projectproject_ida',
      'link' => 'am_projectholidays_project',
      'table' => 'project',
      'module' => 'Project',
      'rname' => 'name',
    ),
    'am_projectholidays_projectproject_ida' => 
    array (
      'name' => 'am_projectholidays_projectproject_ida',
      'type' => 'link',
      'relationship' => 'am_projectholidays_project',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE',
    ),
  ),
  'custom_fields' => false,
);