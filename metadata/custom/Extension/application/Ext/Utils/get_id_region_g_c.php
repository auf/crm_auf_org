
<?php 



function get_id_region_g_c(){
    static $res = null;
    if(!$res){
        global $db;
        $query = "SELECT code as id, nom FROM ref_region";
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