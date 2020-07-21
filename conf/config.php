<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '3.0';

// Database
$Configuration['Database']['Name'] = 'epiz_25916666_96';
$Configuration['Database']['Host'] = 'sql205.byetcluster.com';
$Configuration['Database']['User'] = '25916666_3';
$Configuration['Database']['Password'] = '9S8!p5e.65';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['vf_fr'] = 'fr';

// EnabledPlugins
$Configuration['EnabledPlugins']['recaptcha'] = false;
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['stubcontent'] = true;
$Configuration['EnabledPlugins']['swagger-ui'] = true;
$Configuration['EnabledPlugins']['Quotes'] = true;
$Configuration['EnabledPlugins']['rich-editor'] = true;
$Configuration['EnabledPlugins']['IndexPhotos'] = true;
$Configuration['EnabledPlugins']['emojiextender'] = true;
$Configuration['EnabledPlugins']['googlesignin'] = false;
$Configuration['EnabledPlugins']['Gravatar'] = true;
$Configuration['EnabledPlugins']['VanillaSEO'] = true;
$Configuration['EnabledPlugins']['StopForumSpam'] = true;
$Configuration['EnabledPlugins']['SplitMerge'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;
$Configuration['EnabledPlugins']['pockets'] = true;
$Configuration['EnabledPlugins']['heroimage'] = true;
$Configuration['EnabledPlugins']['AllViewed'] = true;
$Configuration['EnabledPlugins']['editor'] = true;
$Configuration['EnabledPlugins']['deletionreason'] = true;
$Configuration['EnabledPlugins']['Friendships'] = true;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = true;
$Configuration['EnabledPlugins']['MaintenanceMode'] = false;
$Configuration['EnabledPlugins']['nativeemoji'] = true;
$Configuration['EnabledPlugins']['registrationmessage'] = true;
$Configuration['EnabledPlugins']['Chatwee'] = true;
$Configuration['EnabledPlugins']['DiscordWidget'] = false;
$Configuration['EnabledPlugins']['Flagging'] = true;
$Configuration['EnabledPlugins']['LastEdited'] = true;
$Configuration['EnabledPlugins']['necro'] = true;
$Configuration['EnabledPlugins']['gallery'] = true;
$Configuration['EnabledPlugins']['VanillaStats'] = true;
$Configuration['EnabledPlugins']['CreativeCLEditor'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Cosmoz Serv';
$Configuration['Garden']['Cookie']['Salt'] = '8MNnID8PHjHh9SXm';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = false;
$Configuration['Garden']['Registration']['Method'] = 'Basic';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteTarget'] = '';
$Configuration['Garden']['Registration']['InviteRoles'][3] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][4] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][8] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][16] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][32] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Cosmoz Serv';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['UpdateToken'] = '876f876f590f8c5f8fa177c8c81088aa75477f5a';
$Configuration['Garden']['InputFormatter'] = 'Rich';
$Configuration['Garden']['Version'] = 'Undefined';
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['MobileInputFormatter'] = 'Rich';
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['InstallationID'] = '2A85-4D701B6F-861A8885';
$Configuration['Garden']['InstallationSecret'] = 'c2d630b0a3cad736fd587733b47baf1669d482b0';
$Configuration['Garden']['HomepageTitle'] = 'Forum Cosmoz Serveur';
$Configuration['Garden']['Description'] = 'Bienvenu(e) sur le forum de la communauté Cosmoz Serveur';
$Configuration['Garden']['Logo'] = 'a43c9573b5d7fc80a43e68061f2a2885.png';
$Configuration['Garden']['MobileLogo'] = '910cffa556e747fa27d12a2039b59c21.png';
$Configuration['Garden']['FavIcon'] = 'favicon_431b4bad8cfb4d72f9b84cf2854248f8.ico';
$Configuration['Garden']['TouchIcon'] = 'favicon-152-617e3bf42fe84682613f72271d99ac4a.png';
$Configuration['Garden']['ShareImage'] = 'f5138683730cba068acdbaf94acb1ff3.png';
$Configuration['Garden']['MobileAddressBarColor'] = '#159ed2';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Default';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_default';
$Configuration['Garden']['ThemeOptions']['Options']['panelToLeft'] = false;
$Configuration['Garden']['ThemeOptions']['Options']['hasHeroBanner'] = false;
$Configuration['Garden']['ThemeOptions']['Options']['hasFeatureSearchbox'] = true;
$Configuration['Garden']['EditContentTimeout'] = '3600';
$Configuration['Garden']['Format']['DisableUrlEmbeds'] = false;
$Configuration['Garden']['Locale'] = 'fr';
$Configuration['Garden']['AllowFileUploads'] = true;
$Configuration['Garden']['Html']['SafeStyles'] = false;

// ImageUpload
$Configuration['ImageUpload']['Limits']['Width'] = '1000';
$Configuration['ImageUpload']['Limits']['Height'] = '1400';
$Configuration['ImageUpload']['Limits']['Enabled'] = false;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['SEO']['DynamicTitles']['categories_all'] = '%title%';
$Configuration['Plugins']['SEO']['DynamicTitles']['category_single'] = '%category%';
$Configuration['Plugins']['SEO']['DynamicTitles']['category_discussions'] = '%category% %garden%';
$Configuration['Plugins']['SEO']['DynamicTitles']['activity'] = '%garden%';
$Configuration['Plugins']['SEO']['DynamicTitles']['discussions'] = '%garden%';
$Configuration['Plugins']['SEO']['DynamicTitles']['discussion_single'] = '%garden%';
$Configuration['Plugins']['SEO']['DynamicTitles']['search_results'] = '%garden% %title% %category%';
$Configuration['Plugins']['StopForumSpam']['UserID'] = '9';
$Configuration['Plugins']['editor']['ForceWysiwyg'] = false;

// RegistrationMessage
$Configuration['RegistrationMessage']['Message'] = 'Bonjour, Bonsoir  %%NAME%%,

Bienvenue sur le forum de la communauté de Cosmoz - Serv
je te souhaite une bonne expérience de jeux sur nos serveur

Cordialement,
Antoine Leroi




Ps: en cas de soucis, contacte moi via discord    Antoine Leroi#5740';

// RichEditor
$Configuration['RichEditor']['Quote']['Enable'] = '1';

// Routes
$Configuration['Routes']['YXBwbGUtdG91Y2gtaWNvbi5wbmc='] = array (
  0 => 'utility/showtouchicon',
  1 => 'Internal',
);
$Configuration['Routes']['cm9ib3RzLnR4dA=='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['dXRpbGl0eS9yb2JvdHM='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['Y29udGFpbmVyLmh0bWw='] = array (
  0 => 'staticcontent/container',
  1 => 'Internal',
);
$Configuration['Routes']['DefaultController'] = array (
  0 => 'categories',
  1 => 'Internal',
);
$Configuration['Routes']['Default404'] = array (
  0 => 'dashboard/home/filenotfound',
  1 => 'NotFound',
);

// Vanilla
$Configuration['Vanilla']['Version'] = '3.0';
$Configuration['Vanilla']['Password']['SpamCount'] = 2;
$Configuration['Vanilla']['Password']['SpamTime'] = 1;
$Configuration['Vanilla']['Password']['SpamLock'] = 120;
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Comment']['MaxLength'] = '8000';
$Configuration['Vanilla']['Comment']['MinLength'] = '';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = true;

// gallery
$Configuration['gallery']['Image']['MaxWidth'] = 2000;
$Configuration['gallery']['Image']['MaxHeight'] = 1000;
$Configuration['gallery']['Thumb']['Height'] = 150;
$Configuration['gallery']['Thumb']['Width'] = 150;

// Last edited by [DEV S] Antoine (88.125.249.202) 2020-07-20 17:11:05