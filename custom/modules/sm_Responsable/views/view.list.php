<?php

require_once('include/MVC/View/views/view.list.php');
require_once('custom/modules/sm_Responsable/sm_ResponsableListViewSmarty.php');

class sm_ResponsableViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay(){
   
        parent::preDisplay();

        $this->lv = new sm_ResponsableListViewSmarty();
    }

}
