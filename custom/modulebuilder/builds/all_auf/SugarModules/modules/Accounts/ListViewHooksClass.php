<?php
class ListViewHooksClass 
{
	public function populate_dd_lbls(&$bean, $event, $arguments) 
	{

          //construct array that holds field names in question
		  $dynamic_dd_fileds = array(
		 	 "implantation_c" =>array("tblname"=>"ref_implantation","listname"=>"custom_list","field"=>"nom_court"),
		 	 "id_region_a_c" =>array("tblname"=>"ref_zoneadministrative","listname"=>"id_region_a_c_list","field"=>"nom"),
		 	 "pays_iso2_c" =>array("tblname"=>"ref_pays","listname"=>"pays_iso2_c_list","field"=>"nom"),
		 	 "id_region_g_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom"),	 	 	 	 
	       );

         




		  foreach($dynamic_dd_fileds as $k=>$v){
                 $fetch_vals = $this->populate_list($v['tblname'],$v['field']);
		  	     $bean->$k =  $fetch_vals[$bean->$k];	
			
		  }
	}




	private function populate_list($tblname,$field){
        $id = 'id';
        if($tblname=='ref_pays' || $tblname=='ref_zoneadministrative' ||  $tblname=='ref_region'){$id = 'code';}
	    $query = "SELECT  ".$field." as v,".$id." as id FROM ".$tblname." order by ".$field." asc";
	    
	    $result = $GLOBALS['db']->query($query, false);

	    $list = array();
	    $list['']='';
	    while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
	        $list[$row['id']] = $row['v'];
	    }

	    return $list;



     }



    private function populate_list2($tblname,$field,$field2,$selected){

        
	   $query = "SELECT  ".$field." as v, ".$field2." as v2, id FROM ".$tblname." order by ".$field." asc";
	    
	    $result = $GLOBALS['db']->query($query, false);

	    $list = array();
	    $list_edit='';
	    $list_detail='';
	   
	    while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
            $val = $row['v'].' : '.$row['v2'];

	  	if(in_array($val,$selected)){

	    		$list_edit.='<option selected value"'.$val.'">'.$val.'</option>';
	    		$list_detail.='- '.$val.'<br>';
	      	}
	    		else{ 
	    			$list_edit.='<option value"'.$val.'">'.$val.'</option>';
	    		}
	       
	    }
        $list['list_edit']=$list_edit;
        $list['list_detail']=$list_detail;
	    return $list;



     }
}
?>