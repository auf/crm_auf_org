<?php



  class loadDynamicLists{




     public function populate_list($tblname,$field,$pays=0){
        $id = 'id';
        if($tblname=='ref_pays' || $tblname=='ref_zoneadministrative' ||  $tblname=='ref_region' ||  $tblname=='ref_implantation'  ){$id = 'code';}
        if($pays==1){$id = 'id';}
	    $query = "SELECT  ".$field." as v,".$id." as id FROM ".$tblname." order by ".$field." asc";
	    
	    $result = $GLOBALS['db']->query($query, false);

	    $list = array();
	    $list['']='';
	    while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
	        $list[$row['id']] = (string)$row['v'];
	    }

	    return $list;



     }



    public function populate_list2($tblname,$field,$field2,$selected){

        
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



    public function populate_list_search($tblname,$field){

        
	   $query = "SELECT  ".$field." as v FROM ".$tblname." order by ".$field." asc";
	    
	    $result = $GLOBALS['db']->query($query, false);

	  
	    $list_edit='';
	  
	   
	    while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
            $val = $row['v'];

	  	

	    			$list_edit.='<option value"'.$val.'">'.$val.'</option>';
	    		
	       
	    }
       
        
	    return $list_edit;



     }     



  }


?>