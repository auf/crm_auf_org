<?php
// LDAP variables
$ldaphost = "test-ldap.ca.auf.org";  // votre serveur LDAP
$ldapport = 389;                 // votre port de serveur LDAP
// Connexion LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Impossible de se connecter au serveur LDAP $ldaphost");
print_r($ldapconn);
// Eléments d'authentification LDAP
$ldaprdn  = '';     // DN ou RDN LDAP
$ldappass = '';  // Mot de passe associé
// Connexion au serveur LDAP
$ldapconn = ldap_connect("test-ldap.ca.auf.org")
    or die("Impossible de se connecter au serveur LDAP.");
if ($ldapconn) {
    // Connexion au serveur LDAP
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    // Vérification de l'authentification
    if ($ldapbind) {
        echo "Connexion LDAP réussie...";
    } else {
        echo "Connexion LDAP échouée...";
    }

}






echo "<br><br>  anonyme LDAP <br><br>";

// Connexion anonyme à un serveur LDAP

// Connexion au serveur LDAP
$ldapconn = ldap_connect("test-ldap.ca.auf.org")
    or die("Impossible de se connecter au serveur LDAP.");

if ($ldapconn) {

    // Authentification anonyme
    $ldapbind = ldap_bind($ldapconn);

    if ($ldapbind) {
        echo "Connexio<?php
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = "ldap://domaincontroller.mydomain.com";
	
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = 'mydomain' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);


    if ($bind) {
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($ldap,"dc=MYDOMAIN,dc=COM",$filter);
        ldap_sort($ldap,$result,"sn");
        $info = ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            echo '<pre>';
            var_dump($info);
            echo '</pre>';
            $userDn = $info[$i]["distinguishedname"][0]; 
        }
        @ldap_close($ldap);
    } else {
        $msg = "Invalid email address / password";
        echo $msg;
    }

}else{
?>
    <form action="#" method="POST">
        <label for="username">Username: </label><input id="username" type="text" name="username" /> 
        <label for="password">Password: </label><input id="password" type="password" name="password" />        <input type="submit" name="submit" value="Submit" />
    </form>
<?php } ?> 
