
<?php 



function getCountry(){
    static $accounts = null;
    if(!$accounts){
        global $db;
        $query = "SELECT id, code FROM ref_pays";
        $result = $db->query($query, false);

        $accounts = array();
        $accounts[''] = '';

        while (($row = $db->fetchByAssoc($result)) != null) {
            $accounts[$row['id']] = $row['code'];
        }
    }
    return $accounts;
}



?>