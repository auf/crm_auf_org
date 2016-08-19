
<?php 



function getCountryNormal(){
    static $accounts = null;
    if(!$accounts){
        global $db;
        $query = "SELECT id, nom FROM ref_pays";
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