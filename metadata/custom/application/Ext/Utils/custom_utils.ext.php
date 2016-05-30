<?php 
 //WARNING: The contents of this file are auto-generated


 



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





 



function get_implantation_c(){
    static $res = null;
    if(!$res){
        global $db;
        $query = "SELECT id, nom FROM ref_implantation where type = 'Bureau'";
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