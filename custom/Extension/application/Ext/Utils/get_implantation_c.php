
<?php 



function get_implantation_c(){
    static $res = null;
    if(!$res){
        global $db;
        $query = "SELECT id, nom FROM ref_implantation";
        $result = $db->query($query, false);

        $res = array();
        $res[''] = '';

        while (($row = $db->fetchByAssoc($result)) != null) {
            $res[$row['id']] = $row['nom'];
        }
    }
    return $res;
}



?>