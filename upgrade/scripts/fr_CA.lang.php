<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array(
	'DEFAULT_CHARSET'					=> 'latin1',
	'LBL_DISABLED_TITLE'				=> 'Installation de SuiteCRM désactivée',
	'LBL_DISABLED_TITLE_2'				=> 'L\'installation de SuiteCRM a été désactivée',
	'LBL_DISABLED_DESCRIPTION'			=> 'Le programme d\'installation a déjà été exécuté une fois. Par mesure de sécurité, il a été désactivée pour une nouvelle execution. Si vous êtes absolument sûr que vous voulez l\'exécuter à nouveau, veuillez modifier votre fichier config.php et localiser (ou ajouter) une variable appelée «installer_locked» avec la valeur «false». La ligne devrait ressembler à ceci:',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Après que cette modification ai été appliquée, vous pouvez cliquer sur le bouton "Démarrer" ci-dessous pour commencer votre installation. <i> Une fois l\'installation terminée, vous devrez changer la valeur pour \'installer_locked\' à \'true\'. </ i>',
	'LBL_DISABLED_HELP_1'				=> 'Pour de l\'assistance à l\'installation, veuillez visiter le site SuiteCRM',
	'LBL_DISABLED_HELP_2'				=> 'Forums d\'assistance',

	'LBL_REG_TITLE'						=> 'Enregistrement',
	'LBL_REG_CONF_1'					=> 'Veuillez prendre un moment pour vousinscrire auprès de SuiteCRM. En nous permettant de savoir un peu plus sur comment votre entreprise prévoit d\'utiliser SuiteCRM, nous nous assurons que nous livrons toujours le bon produit pour vos besoins professionnels.',
	'LBL_REG_CONF_2'					=> 'Votre nom et votre adresse email sont les seuls champs obligatoires pour l\'enregistrement. Tous les autres champs sont facultatifs, mais très utile. Nous ne vendons pas, ni louons, ou partageons  les informations recueillies ici à des tiers.',
	'LBL_REG_CONF_3'					=> 'Merci de votre inscription. Cliquez sur le bouton Terminer pour se connecter à SuiteCRM. Vous devez ouvrir une session pour la première fois en utilisant le nom d\'utilisateur « admin » et le mot de passe saisi à l\'étape 2.',


	'ERR_ADMIN_PASS_BLANK'				=> 'Le mot de passe administrateur ne peut pas être vide.',
	'ERR_CHECKSYS_CALL_TIME'			=> 'Allow Call Time Pass Reference est desactivé (veuillez l\'activer dans php.ini)',
	'ERR_CHECKSYS_CURL'					=> 'Non trouvé : le planificateur de SuiteCRM fonctionnera de manière limitée.',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> 'Attention: $memory_limit (mettre la valeur à  ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M ou plus dans votre fichier php.ini)',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Echec des variables de session en lecture et écriture. L\'installation ne peut continuer.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Le répertoire n\'est pas valide',
	'ERR_CHECKSYS_NOT_WRITABLE'		=> 'Avertissement : écriture impossible',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Version PHP invalide: (ver.',
	'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Votre version de PHP n\'est pas supportée : (ver',
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode est à On (veuillez le desactiver dans php.ini)',
	'ERR_DB_ADMIN'						=> 'Nom d\'utilisateur de base de données  / mot de passe invalide (erreur ',
	'ERR_DB_EXISTS_NOT'					=> 'La base de données spécifiée n\'existe pas.',
	'ERR_DB_EXISTS_WITH_CONFIG'		=> 'La base de données existe déjà avec les données de configuration.  Pour exécuter une installation avec la base de données choisie, Veuillez réexécuter l\'installation et choisissez: "Supprimer et recréer les tables SuiteCRM?"  Pour mettre à niveau, utilisez l\'Assistant Mise à niveau dans la Console d\'administration.  Veuillez lire la documentation de mise  <a href="http://www.sugarforge.org/content/downloads/" target="_new"> ici</a>.',
	'ERR_DB_EXISTS'						=> 'La base de données existe déjà--impossible de créer une autre base portant le même nom.',
	'ERR_DB_HOSTNAME'					=> 'Le nom d\'hôte ne peut être vide.',
	'ERR_DB_INVALID'					=> 'Le type de base de données sélectionné est invalide.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'L\'identifiant et/ou mot de passe utilisateur de la base de données SuiteCRM est faux.',
	'ERR_DB_MYSQL_VERSION1'				=> 'Version de MySQL ',
	'ERR_DB_MYSQL_VERSION2'				=> ' n\'est pas pris en charge.  Seulement MySQL 4.1.x et supérieur est supporté.',
	'ERR_DB_NAME'						=> 'Le nom de la base de donnée ne peut être vide.',
	'ERR_DB_NAME2'						=> "Le nom de la base de donnée ne peut contenir les caractères '\\', '/', ou '.'",
	'ERR_DB_PASSWORD'					=> 'Les mots de passes ne correspondent pas.',
	'ERR_DB_PRIV_USER'					=> 'Le nom d\'utilisateur admin de la base de données est nécessaire.',
	'ERR_DB_USER_EXISTS'				=> 'Ce nom d\'utilisateur pour SuiteCRM existe déjà--impossible de créer un autre utilisateur portant le même nom.',
	'ERR_DB_USER'						=> 'Le nom d\'utilisateur pour SuiteCRM ne peut pas être vide.',
	'ERR_DBCONF_VALIDATION'				=> 'Veuillez corriger les erreurs suivantes avant de continuer :',
	'ERR_ERROR_GENERAL'					=> 'Les erreurs suivantes ont été rencontrées :',
	'ERR_LICENSE_MISSING'				=> 'Des champs nécessaires sont manquants',
	'ERR_LICENSE_NOT_FOUND'				=> 'Fichier de licence introuvable !',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Le répertoire de log indiqué n\'est pas valide.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Le répertoire de log indiqué n\'est pas accessible en écriture.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Le répertoire de log est requis si vous souhaité spécifié votre propre répertoire.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Le script n\'a pu être exécuté.',
	'ERR_PASSWORD_MISMATCH'				=> 'Les mots de passes ne correspondent pas.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Impossible d\'écrire dans le fichier <span class=stop>config.php</span> ',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Vous pouvez continuer cette installation en créant manuellement un fichier config.php et en y collant les informations ci-dessous. Cependant, vous <strong>devez</strong> créer le fichier config.php avant de continuer vers l\'étape suivante.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Avez vous bien créé le fichier config.php ?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Attention : Impossible d\'écrire dans le fichier config.php. Veuillez vérifier qu\'il existe.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Impossible d\'écrire dans le',
	'ERR_PERFORM_HTACCESS_2'			=> 'fichier.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Si vous voulez empêcher les fichiers de log d\'être accessibles par un navigateur, veuillez créer un fichier .htaccess dans le répertoire des logs avec la ligne suivante :',
	'ERR_PERFORM_NO_TCPIP'				=> '<b> Nous ne pouvions pas détecter une connexion Internet. </b> Lorsque vous avez une connexion , rendez-vous sur a href=\\"http://www.SuiteCRM.com/home/index.php?option=com_extended_registration&task=register\\">http://www.SuiteCRM.com/home/index.php?option=com_extended_registration&task=register</a> pour vous enregistrer auprès SuiteCRM . En nous faisant connaitre un peu plus sur la façon dont votre société prévoit d\'utiliser SuiteCRM , nous pourrons vous assurer que nous fournirons la bonne application pour vos besoins professionnels.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Le répertoire de sessions n\'est pas un dossier valide.',
	'ERR_SESSION_DIRECTORY'				=> 'Le répertoire de sessions n\'est pas accessible en écriture.',
	'ERR_SESSION_PATH'					=> 'Le chemin de sessions est requis si vous souhaitez spécifier votre propre répértoire.',
	'ERR_SI_NO_CONFIG'					=> 'Vous n\'avez pas inclus config_si.php dans la racine du dossier, ou vous n\'avez pas défini $sugar_config dans le fichier config.php.',
	'ERR_SITE_GUID'						=> 'Un ID d\'application est requis si vous souhaitez spécifier votre propre application.',
	'ERR_URL_BLANK'						=> 'L\'URL ne peut pas être vide.',
	'LBL_BACK'							=> 'Précédent',
	'LBL_CHECKSYS_1'					=> 'Pour que votre installation de SuiteCRM fonctionne correctement, veuillez vous assurer que tous les contrôles du système énumérés ci-dessous sont verts. Si des éléments sont en rouge, prenez les mesures nécessaires pour les corriger. ',
	'LBL_CHECKSYS_CACHE'				=> 'Dossier Cache accessible en écriture',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference est activé',
	'LBL_CHECKSYS_COMPONENT'			=> 'Composant',
	'LBL_CHECKSYS_CONFIG'				=> 'Fichier de configuration SuiteCrm (config.php) accessible en écriture ',
	'LBL_CHECKSYS_CURL'					=> 'cURL Library',
	'LBL_CHECKSYS_CUSTOM'				=> 'Dossier Custom accessible en écriture',
	'LBL_CHECKSYS_DATA'					=> 'Dossier Data accessible en écriture',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (pas de limites)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (illimité)',
	'LBL_CHECKSYS_MEM'					=> 'Limite de la mémoire PHP>=',
	'LBL_CHECKSYS_MODULE'				=> 'Dossier Modules et Files accessible en écriture',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Non Disponible',
	'LBL_CHECKSYS_OK'					=> 'Ok',
	'LBL_CHECKSYS_PHP_INI'				=> ' <b>Note:</b> Votre fichier de configuration PHP (php.ini) est localisé en:',
	'LBL_CHECKSYS_PHP_OK'				=> 'Ok (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'Version de PHP',
	'LBL_CHECKSYS_RECHECK'				=> 'Re-vérifier',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'Mode PHP Safe désactivé',
	'LBL_CHECKSYS_SESSION'				=> 'Dossier Session accessible en écriture (',
	'LBL_CHECKSYS_STATUS'				=> 'Statut',
	'LBL_CHECKSYS_TITLE'				=> 'Vérification système acceptation',
	'LBL_CHECKSYS_XML'					=> 'Parseur XML',
	'LBL_CLOSE'							=> 'Fermer',
	'LBL_CONFIRM_BE_CREATED'			=> 'est créé',
	'LBL_CONFIRM_DB_TYPE'				=> 'Type de base de données',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Veuillez confirmer les réglages ci-dessous. Clickez sur "Précédent" pour éditer les valeurs que vous souhaiteriez modifier. Autrement, cliquez sur "Suivant" pour commencer l\'installation.',
	'LBL_CONFIRM_LICENSE_TITLE'		=> 'Informations de licence',
	'LBL_CONFIRM_NOT'					=> 'pas',
	'LBL_CONFIRM_TITLE'					=> 'Vérifier',
	'LBL_CONFIRM_WILL'					=> 'veut',
	'LBL_DBCONF_CREATE_DB'				=> 'Créer base de données',
	'LBL_DBCONF_CREATE_USER'			=> 'Créer Utilisateur [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Attention : Toutes les données de SuiteCRM seront effacées <br> si cette case est cochée.',
	'LBL_DBCONF_DB_DROP_CREATE'		=> 'Effacer et re-créer les tables SuiteCRM existantes ?',
	'LBL_DBCONF_DB_NAME'				=> 'Nom de la base de données',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Mot de passe de base de données',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Ré-entrez le mot de passe de base de données',
	'LBL_DBCONF_DB_USER'				=> 'Nom d\'utilisateur de base de données',
	'LBL_DBCONF_DEMO_DATA'				=> 'Intégrer des données de démonstration dans la base de données ?',
	'LBL_DBCONF_HOST_NAME'				=> 'Nom d\'hôte',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Veuillez entrez les information de configuration de votre base de données ci-dessous. Si vous n\'êtes pas sûr de ces informations, nous vous suggérons d\'utiliser les valeurs par défaut.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Utiliser le text multi-byte pour les données de démonstration ?',
	'LBL_DBCONF_PRIV_PASS'				=> 'Mot de passe de l\'utilisateur privilégié de la base de données',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Le compte utilisateur de la base de données ci-dessous est un utilisateur privilégié ?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Cet utilisateur privilégié de base de données doit avoir les autorisations appropriées pour créer une base de données, déposer / créer des tables, et créer un utilisateur. Cet utilisateur privilégié de base de données ne sera utilisée que pour effectuer ces tâches au besoin pendant le processus d\'installation. Vous pouvez également utiliser le même utilisateur de base de données ci-dessus si l\'utilisateur a des privilèges suffisants.',
	'LBL_DBCONF_PRIV_USER'				=> 'Utilisateur privilégié de la base de données',
	'LBL_DBCONF_TITLE'					=> 'Configuration de la base de données',
	'LBL_HELP'							=> 'Aide',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Acceptation de licence',
	'LBL_LICENSE_DIRECTIONS'			=> 'Si vous avez vos informations de licence, veuillez les entrer dans les champs ci-dessous.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Clé',
	'LBL_LICENSE_EXPIRY'				=> 'Date d\'expiration',
	'LBL_LICENSE_I_ACCEPT'				=> 'J\'accepte',
	'LBL_LICENSE_NUM_USERS'				=> 'Nombre Utilisateurs',
	'LBL_LICENSE_OC_DIRECTIONS'		=> 'Veuillez entrez le nombre de clients hors ligne achetés.',
	'LBL_LICENSE_OC_NUM'				=> 'Nombre de licence pour les clients Offline (disponible sur Sugar Entreprise uniquement)',
	'LBL_LICENSE_OC'					=> 'Licenses clients hors lignes',
	'LBL_LICENSE_PRINTABLE'				=> 'Version imprimable',
	'LBL_LICENSE_TITLE'					=> 'Informations de licence',
	'LBL_LICENSE_TITLE_2'				=> 'Licence SuiteCRM',
	'LBL_LICENSE_USERS'					=> 'Licenses Utilisateurs',
	'LBL_MYSQL'							=> 'MySQL',
	'LBL_NEXT'							=> 'Suivant',
	'LBL_NO'							=> 'Non',
	'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Mot de passe admin site',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'table de vérification / ',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Création du fichier de configuration SuiteCRM',
	'LBL_PERFORM_CREATE_DB_1'			=> 'Création de la base de données',
	'LBL_PERFORM_CREATE_DB_2'			=> 'on',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Création de l\'utilisateur et du mot de passe de la base de données',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Création des données par défaut de SuiteCRM',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Création de l\'utilisateur et du mot de passe de la base de données',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Création des relations des tables SuiteCRM',
	'LBL_PERFORM_CREATING'				=> 'Création /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Création des rapports par défaut',
	'LBL_PERFORM_DEFAULT_SCHEDULER'	=> 'Création des tâches planifiées par défaut',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Validation des paramètres par défaut',
	'LBL_PERFORM_DEFAULT_USERS'		=> 'Création des utilisateurs par standard',
	'LBL_PERFORM_DEMO_DATA'				=> 'Peupler la base de données avec des données de démonstration (cela peut prendre quelques instants)',
	'LBL_PERFORM_DONE'					=> 'fait <br>',
	'LBL_PERFORM_DROPPING'				=> 'abandon / ',
	'LBL_PERFORM_FINISH'				=> 'Terminer',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Mise à jour des informations de licence',
	'LBL_PERFORM_OUTRO_1'				=> 'L\'installation de SuiteCRM',
	'LBL_PERFORM_OUTRO_2'				=> 'est maintenant terminée !',
	'LBL_PERFORM_OUTRO_3'				=> 'Temps total :',
	'LBL_PERFORM_OUTRO_4'				=> 'secondes.',
	'LBL_PERFORM_OUTRO_5'				=> 'Mémoire utilisée :',
	'LBL_PERFORM_OUTRO_6'				=> 'bits.',
	'LBL_PERFORM_OUTRO_7'				=> 'Votre système est maintenant installé et configuré.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ... ',
	'LBL_PERFORM_SUCCESS'				=> 'Succès !',
	'LBL_PERFORM_TABLES'				=> 'Création des tables application, audit et leurs métadonnées de relations',
	'LBL_PERFORM_TITLE'					=> 'Exécuter le programme d\'installation',
	'LBL_PRINT'							=> 'Imprimer',
	'LBL_REQUIRED'						=> '* champs requis',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Ré-entrer le mot de passe Admin SuiteCRM',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'ATTENTION : Cela remplace le mot de passe admin de toute installation précédente.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Mot de passe administrateur SuiteCRM',
	'LBL_SITECFG_APP_ID'				=> 'Application ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Remplacer l\'ID d\'application généré automatiquement. L\'ID veille à ce que les séances d\'une instance de SuiteCRM ne sont pas utilisés par d\'autres instances.  Si vous disposez d\'un cluster d\'installations SuiteCRM, elles doivent partager le même ID de demande.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Fournir votre propre ID de l\'Application',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Remplacer le répertoire log par défaut de SuiteCRM. Peu importe où se trouve le fichier journal, l\'accès via un navigateur web sera limitée par un .htaccess redirect.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Utilisez un répertoire personnalisé de Log',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Fournir un dossier sécurisé pour le stockage des informations de session SuiteCRM pour empêcher les données de session d\'être vulnérables sur des serveurs mutualisés.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Utiliser un répertoire de Session personnalisé pour SuiteCRM',
	'LBL_SITECFG_DIRECTIONS'			=> 'Veuillez entrer vos informations de configuration de site ci-dessous. Si vous n\'êtes pas sûr des champs, nous vous suggérons d\'utiliser les valeurs par défaut.',
	'LBL_SITECFG_FIX_ERRORS'			=> 'Veuillez corriger les erreurs suivantes avant de continuer :',
	'LBL_SITECFG_LOG_DIR'				=> 'Répertoire des fichiers de log',
	'LBL_SITECFG_SESSION_PATH'			=> 'Chemin d\'accès au dossier de Session <br>(doit être accessible en écriture)',
	'LBL_SITECFG_SITE_SECURITY'		=> 'Sécurité avancée de Site',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Lorsque cette option est activée, votre système enverra périodiquement SuiteCRM Inc. des statistiques anonymes sur votre installation qui nous aidera à comprennent les habitudes d\'utilisation et d\'améliorer le produit.  En échange de ces informations, les administrateurs recevront des avis de mise à jour lorsque de nouvelles versions ou mises à jour sont disponibles.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Activer les mises à jour de SuiteCRM ?',
	'LBL_SITECFG_SUGAR_UPDATES'		=> 'Configuration des mises à jours SuiteCRM',
	'LBL_SITECFG_TITLE'					=> 'Configuration du site',
	'LBL_SITECFG_URL'					=> 'URL de SuiteCRM',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Utiliser la configuration par défaut ?',
	'LBL_START'							=> 'Début',
	'LBL_STEP'							=> 'Etape',
	'LBL_TITLE_WELCOME'					=> 'Bienvenue dans SuiteCRM',
	'LBL_WELCOME_1'						=> 'Ce programme d\'installation crée les tables de base de données SuiteCRM et définit les variables de configuration dont vous avez besoin pour démarrer. L\'ensemble du processus devrait prendre environ dix minutes.',
	'LBL_WELCOME_2'						=> 'Pour une aide à l\'installation, veuillez visiter le <a href="http://suitecrm.com/index.php/forum/index" target="_blank"> forums de support SuiteCRM</a>.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> 'Choisir votre langue',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Assistant d\'installation',
	'LBL_WELCOME_TITLE_WELCOME'		=> 'Bienvenue dans SuiteCRM',
	'LBL_WELCOME_TITLE'					=> 'Assistant d\'installation SuiteCRM',
	'LBL_WIZARD_TITLE'					=> 'Assistant d\'installation SuiteCRM : Etape',
	'LBL_YES'							=> 'Oui',
);

?>
