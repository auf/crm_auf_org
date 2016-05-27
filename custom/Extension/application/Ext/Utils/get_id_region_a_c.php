
<?php 



function get_id_region_a_c(){
    static $accounts = null;
    if(!$accounts){
        global $db;
        $query = "SELECT code as id, nom FROM ref_zoneadministrative";
        $result = $db->query($query, false);

        $accounts = array();
        $accounts[''] = '';

        while (($row = $db->fetchByAssoc($result)) != null) {
            $accounts[$row['id']] = $row['nom'];
        }
    }
    return $accounts;
}



?>