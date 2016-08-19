<?php
require_once('include/ListView/ListViewSmarty.php');

class sm_ResponsableListViewSmarty extends ListViewSmarty {
	
	function sm_ResponsableListViewSmarty()
	{
	
		parent::ListViewSmarty();
		$this->targetList = true;
	
	}
	
	

}

?>
