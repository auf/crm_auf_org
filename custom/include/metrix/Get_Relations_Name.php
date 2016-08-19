<?php
function getRelationshipByModules ($m1, $m2)
{
  global $db,$dictionary,$beanList;
  $rel = new Relationship;
  if($rel_info = $rel->retrieve_by_sides($m1, $m2, $db)){
    $bean = BeanFactory::getBean($m1);
    $rel_name = $rel_info['relationship_name'];
    foreach($bean->field_defs as $field=>$def){
      if(isset($def['relationship']) && $def['relationship']==$rel_name) {
        return(array($def['name'], $m1));
      }
    }
  } elseif($rel_info = $rel->retrieve_by_sides($m2, $m1, $db)){
    $bean = BeanFactory::getBean($m2);
    $rel_name = $rel_info['relationship_name'];
    foreach($bean->field_defs as $field=>$def){
      if(isset($def['relationship']) && $def['relationship']==$rel_name) {
        return(array($def['name'], $m2));
      }
    }
  }
  return(FALSE);
  
}