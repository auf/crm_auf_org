<?php

require_once('include/MVC/View/views/view.list.php');
require_once('custom/modules/auf_implantation/auf_implantationListViewSmarty.php');

class auf_implantationViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay(){
   
        parent::preDisplay();

        $this->lv = new auf_implantationListViewSmarty();
    }

}
