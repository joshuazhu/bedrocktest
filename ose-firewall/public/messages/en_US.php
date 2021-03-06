<?php
/**
 * @version     2.0 +
 * @package       Open Source Excellence Security Suite
 * @subpackage    Centrora Security Firewall
 * @subpackage    Open Source Excellence WordPress Firewall
 * @author        Open Source Excellence {@link http://www.opensource-excellence.com}
 * @author        Created on 01-Jun-2013
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 *
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *  @Copyright Copyright (C) 2008 - 2012- ... Open Source Excellence
 */
if (!defined('OSE_FRAMEWORK') && !defined('OSEFWDIR') && !defined('_JEXEC'))
{
 die('Direct Access Not Allowed');
}
//Start here;
define('O_LATEST_SIGNATURE', '20140901');
define('O_LATEST_PATTERN', 'Latest version of virus pattern (major update) is 20140901, updated on 1st Sep 2014');
define('OSE_WORDPRESS_FIREWALL', 'Centrora Security™');
define('OSE_WORDPRESS_FIREWALL_SETTING', 'Centrora Security™ Settings');
define('OSE_WORDPRESS_FIREWALL_SETTING_DESC', 'Centrora Security™ is a Web Application Firewall for Wordpress created by <a href="http://www.protect-website.com" target="_blank">Protect Website</a>. It protects your website against attacks and hacking attempts effectively.');
define('OSE_WORDPRESS_FIREWALL_UPDATE_DESC', 'OSE Firewall™ has been renamed as ‘Centrora Plugin’, which will works perfectly with our new product <a href="http://www.centrora.com" target = "_blank">Centrora</a>, a security management central that gains you the ability to manage all your websites in one place.');
define('OSE_DASHBOARD', 'Dashboard');
define('OSE_DASHBOARD_SETTING', 'Dashboard Settings');
define('NOTIFICATION_EMAIL_ATTACKS', 'Email that receives the notification of attacks');
define('EMAIL_ADDRESS', 'Email Address');
define('FIREWALL_SCANNING_OPTIONS', 'Firewall Scanning Options');
define('BLOCKBL_METHOD', 'Block blacklisted methods (Trace / Delete / Track)');
define('CHECK_MUA', 'Checks Malicious User Agent');
define('checkDOS', 'Checks Basic DoS Attacks');
define('checkDFI', 'Checks Basic Direct File Inclusion');
define('checkRFI', 'Checks Basic Remote File Inclusion');
define('checkJSInjection', 'Checks Basic Javascript Injection');
define('checkSQLInjection', 'Checks Basic Database SQL Injection');
define('checkTrasversal', 'Detect Directory Traversal');
define('ADVANCE_SETTING', 'Advanced Setting');
define('OTHER_SETTING', 'Other Setting');
define('BLOCK_QUERY_LONGER_THAN_255CHAR', 'Block Queries longer than 255 characters');
define('BLOCK_PAGE', 'Block page shown to attackers');
define('OSE_BAN_PAGE', 'Use OSE ban page');
define('BLANK_PAGE', 'Show a blank page');
define('ERROR403_PAGE', 'Show a 403 error page');
define('TEST_CONFIGURATION', 'Test your configuration');
define('TEST_CONFIGURATION_NOW', 'Test your configuration now!');
define('SAVE_CHANGES', 'Save Changes');
define('WHITELIST_VARS', 'Whitelisted Variables (please use a comma "," to separate the variables.)');
define('BLOCK_MESSAGE', 'Your request has been blocked!');
define('FOUNDBL_METHOD', 'Found blacklisted methods (Trace / Delete / Track)');
define('FOUNDMUA', 'Found Malicious User Agent');
define('FOUNDDOS', 'Found Basic DoS Attacks');
define('FOUNDDFI', 'Found Basic Direct File Inclusion');
define('FOUNDRFI', 'Found Basic Remote File Inclusion');
define('FOUNDJSInjection', 'Found Basic Javascript Injection');
define('FOUNDSQLInjection', 'Found Basic Database SQL Injection');
define('FOUNDTrasversal', 'Found Directory Traversal');
define('FOUNDQUERY_LONGER_THAN_255CHAR', 'Found Queries longer than 255 characters');
define('MAX_TOLERENCE', 'Maximum tolerence for an attack');
// Langauges for version 1.5 + start from here;
define('OSE_SCANNING_SETTING','Scanning setting');
define('OSE_SCANNING','Scanning');
define('SERVERIP','Your server IP (to avoid false alerts due to empty user agent)');
define('OSE_WORDPRESS_FIREWALL_CONFIG','Centrora Security™ Configuration');
define('OSE_WORDPRESS_VIRUSSCAN_CONFIG','Virus Scanner Configuration');
define('OSE_WORDPRESS_VIRUSSCAN_CONFIG_DESC','Please configure your virus scanning parameters here.');
define('START_DB_INIT','Initialise Database');
define('STOP_DB_INIT','Stop Action');
define('START_NEW_VIRUSSCAN','Start New Scan');
define('CONT_VIRUSSCAN','Continue Previous Scan');
define('OSE_SCANNED','Centrora Security has scanned');
define('OSE_FOLDERS','folders');
define('OSE_AND','and');
define('OSE_FILES','files');
define('OSE_INFECTED_FILES','infected files');
define('OSE_INTOTAL','in total of');
define('OSE_THERE_ARE','There are');
define('OSE_IN_DB','in the database');
define('OSE_VIRUS_SCAN','Virus Scanner');
define('OSE_VIRUS_SCAN_DESC','OSE WordPress Virus Scanner™ aims to scan and clean WordPress malicious codes and monitors your website on a 24/7 basis.');
define('CUSTOM_BANNING_MESSAGE','Custom banning message');
define('FILEEXTSCANNED','File extensions being scanned');
define('DONOTSCAN','Do not scan files greater than (unit: Megabytes)');
define('PLEASE_CHOOSE_OPTION','Please choose an option');
define('COMPATIBILITY','Compatibility');
define('OSE_PLEASE_CONFIG_FIREWALL','Please configure the firewall setting here.');	
define('OSE_FOLLOWUS','Follow us to keep updated.');
define('OSE_ID_INFO','OSE Account information (please ONLY fill in your account when you are an advanced / professional member).');	
define('OSE_ID','OSE ID (Username in OSE Security Website).');
define('OSE_PASS','OSE Password (Password in OSE Security Website).');
define('OSE_SCAN_SUMMARY','Scan Summary');
define('OSE_SCAN_ACTIVITY','Scan Detailed Activity');
define('OSE_WEBSITE_PROTECTED_BY','This website is protected by');
define('OSE_PROTECTION_MODE','Protection Mode');
define('OSE_FIREWALL_ONLY','Protected by Centrora Security Only');
define('OSE_SECSUITE_ONLY','Protected by OSE Security Suite Only');
define('OSE_FWANDSUITE','Protected by Centrora Security & OSE Security Suite');
define('OSE_SUITE_PATH','Absolute path of OSE Security Suite.<br/>e.g. /home/youraccount/public_html/osesecurity/ <br/> (Please ensure you have installed <a href ="https://www.opensource-excellence.com/shop/ose-security-suite.html" target="_blank">OSE Security Suite</a> already)');
define('NEED_HELP_CLEANING','Need help cleaning?');
define('NEED_HELP_CLEANING_DESC','Viruses are changing over time. Our patterns might not be updated to scan the latest malicious files in your infected system. In this case, please consider to hire our <a href="https://www.opensource-excellence.com/service/removal-of-malware.html" target="_blank" >malware removal service</a>. The new patterns found in your website will be contributed to the community to help other users.');
define('OSE_DEVELOPMENT','Development mode (temporarily turn off protection)');
// Langauges for version 1.6 + start from here;
define('OSE_ENABLE_SFSPAM','Enable Stop Forum Spam Scanning');
define('OSE_YES','Yes');
define('OSE_NO','No');
define('OSE_SFSPAM_API','Stop Forum Spam API key');
define('SFSPAMIP','Stop Forum Spam IP');
define('OSE_SFS_CONFIDENCE','Confidence Level (between 1 and 100, the higher the more likely a spam)');
define('OSE_SHOW_BADGE','Show Website Protection Seal <br/>(Please use Virus scanner to scan your website first)');
// Languages for version 2.0 start from here:
define('DBNOTREADY','<b>WARNING</b>: The database is not ready, please click the install button to create the database tables');
define('DBNOTREADY_OTHER','<b>WARNING</b>: The database is not ready, please return to the Dashboard to install the database.');
define('DASHBOARD_TITLE','<b>Dash</b><span><b>board</b></span>');
define('INSTALLNOW','Install Now');
define('UNINSTALLDB', 'Uninstall');
define('UNINSTALLDB_INTRO', 'Removing the database created by Centrora Security from your website');
define('UPDATEVERSION', 'Update');
define('SUBSCRIBE', 'Subscribe');
define('READYTOGO','Everything is ready to go! If you want to remove database, please go to configuration');
define('CREATE_BASETABLE_COMPLETED',' > Create Base Table Completed, continue...');
define('INSERT_CONFIGCONTENT_COMPLETED',' > Inserting Configuration Data Completed, continue...');
define('INSERT_EMAILCONTENT_COMPLETED',' > Inserting Email Content Completed, continue...');
define('INSTALLATION_COMPLETED',' > Database Installation Completed.');
define('INSERT_ATTACKTYPE_COMPLETED',' > Attack Type Information Installation Completed, continue...');
define('INSERT_BASICRULESET_COMPLETED',' > Basic Ruleset Installation Completed, continue...');
define('CREATE_IPVIEW_COMPLETED',' > IP-ACL Mapping View Creation Completed, continue...');
define('CREATE_ADMINEMAILVIEW_COMPLETED',' > Admin-Email Mapping View Creation Completed, continue...');
define('CREATE_ATTACKMAPVIEW_COMPLETED',' > ACL-Attack Mapping View Creation Completed, continue...');
define('CREATE_ATTACKTYPESUMEVIEW_COMPLETED',' > Attack Type Mapping View Creation Completed, continue...');
define('INSERT_STAGE1_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 1 Installation Completed, continue...');
define('INSERT_STAGE2_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 2 Installation Completed, continue...');
define('INSERT_STAGE3_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 3 Installation Completed, continue...');
define('INSERT_STAGE4_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 4 Installation Completed, continue...');
define('INSERT_STAGE5_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 5 Installation Completed, continue...');
define('INSERT_STAGE6_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 6 Installation Completed, continue...');
define('INSERT_STAGE7_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 7 Installation Completed, continue...');
define('INSERT_STAGE8_GEOIPDATA_COMPLETED',' > GeoIP Data Stage 8 Installation Completed, continue...');
define('INSERT_VSPATTERNS_COMPLETED',' > Virus Patterns Insertion Completed, continue...');
define('MANAGEIPS_TITLE','<b>IP</b> <span><b>Management</b></span>');
define('MANAGEIPS_DESC','Block, Manage and Control the access of IP addresses. Centrora Plugin automatically detect suspicious IP for you and set as monitored as default.');
define('IP_EMPTY','IP is empty');
define('IP_INVALID_PLEASE_CHECK','The IP is invalid, please check if your any of your octets is greater than 255');
define('IP_RULE_EXISTS','The Access Control Rules for this IP / IP Range already exists.');
define('IP_RULE_ADDED_SUCCESS','The Access Control Rules for this IP / IP Range was added successfully.');
define('IP_RULE_ADDED_FAILED','The Access Control Rules for this IP / IP Range was added unsuccessfully.');
define('IP_RULE_DELETE_SUCCESS','The Access Control Rules for this IP / IP Range was removed successfully.');
define('IP_RULE_DELETE_FAILED','The Access Control Rules for this IP / IP Range was removed unsuccessfully.');
define('IP_RULE_CHANGED_SUCCESS','The Access Control Rules for this IP / IP Range has been changed successfully.');
define('IP_RULE_CHANGED_FAILED','The Access Control Rules for this IP / IP Range has been changed unsuccessfully.');
define('MANAGE_IPS','IP Management');
define('RULESETS','Firewall Settings');
define('MANAGERULESETS_TITLE','<b>Firewall</b> <span><b>Settings</b></span>');
define('MANAGERULESETS_DESC','Activate or Deactivate the firewall function. You can limit the security features of Centrora Plugin by deactivating any security function. We highly recommend to activate all of the security functions to carry the best out of Centrora Plugin');
define('ADRULESETS','Advance Firewall Settings');
define('MANAGE_AD_RULESETS_TITLE','<b>Advance Firewall Settings</b>');
define('MANAGE_AD_RULESETS_DESC','The Panel to Manage your Advance Rules');
define('ITEM_STATUS_CHANGED_SUCCESS','The status of the item has been changed successfully');
define('ITEM_STATUS_CHANGED_FAILED','The status of the item was changed unsuccessfully');
define('CONFIGURATION','Configuration');
define('CONFIGURATION_TITLE','<b>Installation</b>');
define('CONFIGURATION_DESC','You can install or uninstall the database tables here');
define('SEO_CONFIGURATION','SEO Configuration');
define('SEO_CONFIGURATION_TITLE','<b>Search Engine</b> <span><b>Configuration</b></span>');
define('SEO_CONFIGURATION_DESC','Search Engine settings which protect your rankings even if google bots block your website. Design message to be displayed for blocked IP visitors');
define('CONFIG_SAVE_SUCCESS','The configuration was saved successfully.');
define('CONFIG_SAVE_FAILED','The configuration was saved unsuccessfully.');
define('SCAN_CONFIGURATION','Scanning Configuration');
define('SCAN_CONFIGURATION_TITLE','<b>Firewall Scanning</b> <span><b>Configuration</b></span>');
define('SCAN_CONFIGURATION_DESC','Connect to Centrora with API key and configure Firewall Scanning Settings');
define('ANTISPAM_CONFIGURATION','Anti-Spam Configuration');
define('ANTISPAM_CONFIGURATION_TITLE','<b>Anti-Spam</b> <span><b>Configuration</b></span>');
define('ANTISPAM_CONFIGURATION_DESC','Enable/Disable stop forum spam to avoid persistent spammers on message boards and blogs');
define('EMAIL_CONFIGURATION','Email Configuration');
define('EMAIL_CONFIGURATION_TITLE','<b>Email</b> <span><b>Configuration</b></span>');
define('EMAIL_CONFIGURATION_DESC','Email template configuration for blacklisted, filtered, and 403 blocked entry for detected attacks');
define('EMAIL_TEMPLATE_UPDATED_SUCCESS','The email template has been changed successfully.');
define('EMAIL_TEMPLATE_UPDATED_FAILED','The email template was changed unsuccessfully.');
define('EMAIL_ADMIN','Admin-Email Mapping');
define('EMAIL_ADMIN_TITLE','<b>Administrator-Email</b> <span><b>Mapping</b></span>');
define('EMAIL_ADMIN_DESC','Decide which admin user can receive different email for blacklisted, filtered, and 403 blocked entry for detected attacks');
define('LINKAGE_ADDED_SUCCESS','The linkage has been added successfully.');
define('LINKAGE_ADDED_FAILED','The linkage was added unsuccessfully.');
define('LINKAGE_DELETED_SUCCESS','The linkage has been deleted successfully.');
define('LINKAGE_DELETED_FAILED','The linkage was deleted unsuccessfully.');
define('ANTIVIRUS_CONFIGURATION','Virus Scanner Configuration');
define('ANTIVIRUS_CONFIGURATION_TITLE','<b>Virus Scanner</b> <span><b>Configuration</b></span>');
define('ANTIVIRUS_CONFIGURATION_DESC','Configure the settings for Virus Scanner, control file extension to be scanned and limit the size of scanning files');
define('ANTIVIRUS','Virus Scanner');
define('ANTIVIRUS_TITLE','<b>Virus</b> <span><b>Scanner</b></span>');
define('ANTIVIRUS_DESC','Virus Scanner is a powerful malware detector, it acts like an antivirus but is more powerful than a antivirus. It scans through every single files on your server or any specific path of files for virus, malware, spam, malicious codes, SQL injection, security vulnerabilities etc.');
define('LAST_SCANNED','Last scanned folder: ');
define('LAST_SCANNED_FILE','Last scanned file: ');
define('OSE_FOUND',OSE_WORDPRESS_FIREWALL.' found');
define('OSE_ADDED',OSE_WORDPRESS_FIREWALL.' added');
define('IN_THE_LAST_SCANNED','in the last scan,');
define('O_CONTINUE','continue...');
define('SCANNED_PATH_EMPTY','Please make sure the scanned path is not empty.');
define('O_PLS', 'Please');
define('O_SHELL_CODES', 'Shell Codes');
define('O_BASE64_CODES', 'Base64 Encoded Codes');
define('O_JS_INJECTION_CODES', 'Javascript Injection Codes');
define('O_PHP_INJECTION_CODES', 'PHP Injection Codes');
define('O_IFRAME_INJECTION_CODES', 'iFrame Injection Codes');
define('O_SPAMMING_MAILER_CODES', 'Spamming Mailer Codes');
define('O_EXEC_MAILICIOUS_CODES','Executable Malicious Codes');
define('O_OTHER_MAILICIOUS_CODES','Other Miscellaneous Malicious Codes');
define('WEBSITE_CLEAN','Secured');
define('COMPLETED','Completed');
define('YOUR_SYSTEM_IS_CLEAN','Your system is clean.');
define('VSREPORT','Scan Report');
define('SCANREPORT_TITLE','<b>Scan</b> <span><b>Report</b></span>');
define('SCANREPORT_DESC','Display the infected files last scanned by the virus scanner');
define('SCANREPORT_CLEAN', 'No files were infected.');
define('VARIABLES','Variables');
define('VARIABLES_TITLE','<b>Variables</b> <span><b>Management</b></span>');
define('VARIABLES_DESC','Variable scanning. Centrora Plugin automatically scan the variables in the background to prevent attacks through variables');
define('MANAGE_VARIABLES','Manage Variables');
define('VIRUS_SCAN_REPORT','Virus Scanning Report');
define('VERSION_UPDATE', 'Anti-Virus Database Update');
define('VERSIONUPDATE_DESC', 'The Panel is to Update Virus Database');
define('ANTI_VIRUS_DATABASE_UPDATE', 'Anti-Virus Database Update');
define('VERSION_UPDATE_TITLE', '<b>OSE Version Update Panel</b>');
define('VERSION_UPDATE_DESC', 'The panel is to update your local anti-virus database');
define('CHECK_UPDATE_VERSION', 'Connecting with server and Checking update version...');
define('START_UPDATE_VERSION', 'Start downloading updates...');
define('UPDATE_COMPLETED', 'Update Completed!');
define('CHECK_UPDATE_RULE', 'Checking update rule...');
define('ALREADY_UPDATED', 'Already updated today');
define('UPDATE_LOG', 'Updating Log...');
//Since 2.3.0
define('FILE_UPLOAD_VALIDATION', 'File Upload Validation');
define('REQUEST_DELIMITER','-----');
define('GEONOTREADY', 'Please install GeoIP Country List to enable country blocking feature.');
define('COUNTRYBLOCK_TITLE', '<b>Country</b> <span><b>Blocking</b></span>');
define('COUNTRYBLOCK_DESC','The Panel to Block IPs from countries');
define('COUNTRYBLOCK', 'Country Blocking');
define('BACKUP', 'Backup');
define('BACKUP_TITLE', '<b>Backup Management</b>');
define('BACKUP_DESC', 'You can centrally backup your database here');
define('BACKUP_FILES', 'files have been backed up');
define('PREFIX_EMPTY', 'Please enter a prefix');
define('BACKUP_TYPE_EMPTY', 'Please select a backup type' );
define('DB_BACKUP_FAILED_INCORRECT_PERMISSIONS', 'Failed backing up database, please ensure the backup directory "'.OSE_FWDATA.'/backup/" is writable.');
define('DB_COUNTRYBLOCK_FAILED_INCORRECT_PERMISSIONS','Failed backing up database, please ensure the backup directory "'.OSE_FWDATA.'/backup/" is writable.');
define('FILE_VSSCAN_FAILED_INCORRECT_PERMISSIONS', 'Failed Scanning Virus, please ensure the scan file "'.OSE_FWDATA.'/vsscanPath/path.json" is writable.');
define('DB_BACKUP_SUCCESS', 'The database backup is successful');  
define('DB_DELETE_SUCCESS', 'The Backup item was removed successfully.');
define('DB_DELETE_FAILED', 'The Backup item was removed unsuccessfully.');
define('ADVRULESET_INSTALL_SUCCESS', 'Advanced security rulesets have been installed successfully');
define('ADVRULESET_INSTALL_FAILED', 'Advanced security rulesets was installed unsuccessfully');
define('GAUTHENTICATOR','googleVerification');
define('IPMANAGEMENT_INTRO', 'Block, Manage and Control the access of IP addresses. Centrora Security automatically detect suspicious IP for you and set as monitored as default.');
define('FIREWALL_SETTING_INTRO', 'Activate or Deactivate the firewall function. You can limit the security features of Centrora Security by deactivating any security function. We highly recommend to activate all of the security functions to carry the best out of Centrora Security');
define('VARIABLES_INTRO', 'Variable scanning. Centrora Security automatically scan the variables in the background to prevent attacks through variables');
define('VIRUS_SCANNER_INTRO', 'Virus Scanner is a powerful malware detector, it acts like an antivirus but is more powerful than an antivirus. It scans through every single files on your server or any specific path of files for virus, malware, spam, malicious codes, SQL injection, security vulnerabilities etc');
define('SCAN_REPORT_INTRO', 'Display the infected files last scanned by the virus scanner');
define('CONFIGURATION_INTRO', 'Configure the default settings of Centrora Security to best suit your personal needs. It includes settings for scanning, virus scanner, SEO, anti-spam, email, and admin email mapping');
define('BACK_UP_INTRO', 'Backup database into your own server for free');
define('COUNTRY_BLOCK_INTRO', 'Block the IP range of the entire country that you insist to. Centrora Security will keep the visitors from blocked country out of your website');
define('SCANCONFIG_INTRO', 'Configure Firewall Scanning Settings');
define('VSCONFIG_INTRO', 'Configure the settings for Virus Scanner, control file extension to be scanned and limit the size of scanning files');
define('SEOCONFIG_INTRO', 'Search Engine settings which protect your rankings even if google bots block your website. Design message to be displayed for blocked IP visitors');
define('ANTISPAMCONFIG_INTRO', 'Enable/Disable stop forum spam to avoid persistent spammers on message boards and blogs');
define('EMAILCONFIG_INTRO', 'Email template configuration for blacklisted, filtered, and 403 blocked entry for detected attacks');
define('ADMINEMAILCONFIG_INTRO', 'Decide which admin user can receive different email for blacklisted, filtered, and 403 blocked entry for detected attacks');
define('ANTI_HACKING', 'Anti-Hacking');
define('ANTI_VIRUS', 'Anti-Virus');
define('PREMIUM_FEATURES', 'Premium Features');
define('LOGIN_FAILED', 'Login failed. Username, Password or Private Key is incorrect!');
define('LOGIN_STATUS', 'Login Status');
define('LOGIN', 'Login');
define('SUBSCRIPTION', 'Subscription');
define('O_CONTINUE_SCAN', 'Continue Scanning');
define('STOP_VIRUSSCAN', 'Stop Scanning');
define('CONFIG_SAVECOUNTRYBLOCK_FAILE', 'Save Country Blocking config failed, Country Blocking Database is not ready.');
define('CONFIG_ADRULES_FAILE', 'Save Advanced Firewall Setting config failed, Advance Firewall Setting Database is not ready.');
define('CONFIG_ADPATTERNS_FAILE', 'Save Advanced Virus Pattern config failed, Advanced Virus Pattern Database is not ready.');
define('UNINSTALL_SUCCESS', 'Uninstall database table success!');
define('UNINSTALL_FAILED', 'Uninstall database table failed!');
define('SCAN_READY','Ready to scan virus');
define('DISDEVELOPMODE', '<b>WARNING</b>: Please disable the Development Mode in the Scanning Configuration to activate the firewall protection.');
define('ADVANCERULESNOTREADY', '<b>[Better Protection] </b><b>IMPROVEMENT</b>: Please turn on the advance firewall to get enhanced protection. The advance firewall protection offers 45+ detection technique to protect your website from hacking attempts');
define('ABOUT', 'Features');
define('ABOUT_DESC', 'The detailed descriptions of each section of our plugin and what it does');
define('DEVELOPMODE_DISABLED','<b>[Activation] </b>Great! Your website is now protected by Centrora Security');
define('ADVANCERULES_READY','<b>[Better Protection] </b>Great! Your website is more secure now');
define('ADMINUSER_EXISTS','<b>[Admin Protection] </b><b>WARNING</b>: The administrator account \'admin\' still exists, please change the username for the administrator user ASAP.');
define('ADMINUSER_REMOVED','<b>[Admin Protection] </b>Great! The admin account \'admin\' has been removed.');
define('FIREWALL','Firewall');
define('OSE_AUDIT','Audit');
define('GAUTHENTICATOR_NOTUSED','<b>[Admin Protection] </b><b>WARNING</b>: Google 2 Step Authenticator is not used. This is an effective method to avoid brute force attack, we strongly suggest you enable this function. Please follow this tutorial to enable it.');
define('GAUTHENTICATOR_READY','<b>[Admin Protection] </b>Great! Google Authenticator is available in this website, please ensure all web adminsitrators have enabled the function for their accounts.');
define('WORDPRESS_OUTDATED','<b>[Wordpress Update] </b><b>WARNING</b>: Your Wordpress is out dated, please update it ASAP. Current version is ');
define('WORDPRESS_UPTODATE','<b>[Wordpress Update] </b>Great! Your website is up-to-date with current version of ');
define('USERNAME_CANNOT_EMPTY','Username cannot be empty');
define('USERNAME_UPDATE_SUCCESS','Successfully changed the username. The browser will be refreshed soon, if you logged in as \'admin\', please login with your new username then.');
define('USERNAME_UPDATE_FAILED','Failed to change the username');
define('GOOGLE_IS_SCANNED', '<b>[SEO Protection] </b><b>WARNING</b>: Please note that Google bots are being scanned, if your website is not under heavy attack, please disable this function to avoid your SEO being afftected.');
define('CLAMAV', 'ClamAV Integration');
define('ACTION_PANEL', 'Action Panel');
define('CLAMAV_STATUS', 'ClamAV Status');
define('RELOAD_DB_DESC', 'Reload ClamAV Database');
define('CLAMAV_DEF_VIRSION', 'ClamAV Virus Definition Version');
define('CLAMAV_TITLE', '<b>ClamAV Integration</b>');
define('CLAMAV_DESC', 'ClamAV is an open source anti-virus software for linux server. Centrora security can integrate ClamAV into the virus scanning function to enhance the power for picking malicious files. For server installation instruction, please see <a href ="http://www.centrora.com/blog/install-free-antivirus-clamav-on-linux/" target="_blank">this tutorial</a>. Once installed, please see <a href="http://www.centrora.com/blog/free-antivirus-for-wordpress/" target = "_blank">this tutorial</a> to enable ClamAV scanning in Centrora Security.');
define('CLAMAV_CONNECT_SUCCESS', 'Successfully connected to Clam Daemon');
define('CLAMAV_DEF_VERSION','ClamAV Definition Version'); 
define('CLAMAV_CANNOT_CONNECT','Cannot connect to the ClamAV Daemon');
define('SIGNATURE_UPTODATE','<b>[Better Protection] </b>Your firewall rules are up to date');
define('SIGNATURE_OUTDATED','<b>[Better Protection] </b><b>IMPROVEMENT</b>: Your firewall rules are out-dated, please update the rules to enhance protection. The updated advance firewall protection offers 45+ detection technique to protect your website from hacking attempts');
define('IS_MY_WEBSITE_SAFE_BROWSING','Does my website look safe in major anti-virus software blacklist database?');
define('SAFE_BROWSING_CHECKUP','Centrora Safe Browsing Checkup (Blacklist Monitoring)');
define('SECURITY_CONFIG_AUDIT','Security Configuration Audit');
define('CHECK_SAFE_BROWSING','Check your website safe browsing status now.');
define('SAFE_BROWSING_CHECKUP_UPDATED','Your Safe Browsing Checkup is updated');
define('SAFE_BROWSING_CHECKUP_OUTDATED','Your Safe Browsing Checkup is outdated, schedule the daily checkup now.');
define('API_CONFIGURATION','API Configuration');
define('API_INTRO','Connect to Centrora with API key');
define('SYSTEM_SECURITY_AUDIT','System Security Audit');
define('CHANGE_PHPINI', 'If this hasb been turned off in the configuration section, please change it in the php.ini');
define('REG_GLOBAL_OFF','The PHP Setting register_global is <b>OFF</b>.');
define('REG_GLOBAL_ON','The PHP Setting register_global is <b>ON</b>, please turn if off. '.CHANGE_PHPINI); 
define('SAFEMODE_OFF','The PHP Setting safe_mode is <b>OFF</b>');
define('SAFEMODE_ON','The PHP Setting safe_mode is <b>ON</b>, please turn if off. '.CHANGE_PHPINI);  
define('URL_FOPEN_OFF','The PHP Setting allow_url_fopen is <b>OFF</b>');
define('URL_FOPEN_ON','The PHP Setting allow_url_fopen is <b>ON</b>, please turn if off. '.CHANGE_PHPINI);
define('DISPLAY_ERROR_OFF','The PHP Setting display_errors is <b>OFF</b>');
define('DISPLAY_ERROR_ON','The PHP Setting display_errors is <b>ON</b>, please turn if off. '.CHANGE_PHPINI);
define('DISABLE_FUNCTIONS_READY','The following PHP functions have been disabled: ');
define('DISABLE_FUNCTIONS_NOTREADY','The following PHP functions need to be disabled: ');
define('RETRIEVE_UPDATED_PATTERNS','Retrieve Updated Virus Patterns');
define('YOUR_VERSION', 'Your version: ');
define('SCHEDULE_SCANNING', 'Schedule Virus Scanning');
define('SYSTEM_PLUGIN_DISABLED', 'The Centrora system plugin is disabled, please enable it and put it to the first position.');
define('SYSTEM_PLUGIN_READY', 'The Centrora system plugin is ready.');
define('SCAN_SPECIFIC_FOLDER', 'Scan specific folder');
define('O_DROPBOX_FAILED', 'Uploading the backup file to Dropbox has been failed. Please re-authorize the Dropbox API again.');

define('O_FILE_ID', 'File ID');
define('O_FILE_NAME', 'File Name');
define('O_CONFIDENCE', 'Confidence');
define('O_PATTERNS', 'Patterns');
define('O_PATTERN_ID', 'Pattern ID');

define('O_IP_RULE_TITLE', 'IP Rule Title');
define('O_ID', 'ID');
define('O_DATE', 'Date');
define('O_RISK_SCORE', 'Score');
define('O_START_IP', 'Start IP');
define('O_END_IP', 'End IP');
define('O_ADD_AN_IP', 'Add an IP');
define('O_IP_RULE', 'IP Rule Title');
define('O_IP_TYPE', 'IP Type');
define('O_RANGE', 'IP Range');
define('O_SINGLE_IP', 'Single IP');
define('O_STATUS', 'Status');
define('O_HOST', 'Host');
define('O_VISITS', 'Visits');
define('O_VIEWDETAIL', 'Action');
define('O_DELETE_ITEMS', 'Delete Items');
define('O_STATUS_MONITORED_DESC', 'Monitored');
define('O_STATUS_BLACKLIST_DESC', 'Blacklist');
define('O_STATUS_WHITELIST_DESC', 'Whitelist');

define('ADD_IPS', 'Add IP');
define('O_BLACKLIST_IP', 'Blacklist IPs');
define('O_WHITELIST_IP', 'Whitelist IPs');
define('O_MONITORLIST_IP', 'Monitor IPs');
define('ADD_IP_FORM','Add IP Form');
define('IPFORM_DESC', 'This form allows you to add an IP or IP Range into the system');
define('O_DELETE__ALLITEMS', 'Clear All Items');
define('SAVE', 'Save');

define('PLEASE_SELECT_ITEMS', 'Please select at least one item.');
define('O_UPDATE_HOST', 'Update Host');
define('O_IMPORT_IP_CSV', 'Import IP from CSV');
define('O_EXPORT_IP_CSV', 'Export IP to CSV');
define('O_IMPORT_NOW', 'Import Now');
define('GENERATE_CSV_NOW', 'Generate CSV File Now');

define('O_ATTACKTYPE', 'Attack Type');
define('O_RULE', 'Rule');
define('O_IMPACT', 'Impact');

define('ADD_A_VARIABLE', 'Add a Variable');
define('O_VARIABLE_NAME', 'Variable Name');
define('O_VARIABLE_TYPE', 'Variable Type');
define('O_VARIABLES', 'Variables');
define('VARIABLE_NAME_REQUIRED', 'Variable Name Required');
define('LOAD_WORDPRESS_DATA', 'Load WordPress default variables');
define('LOAD_WORDPRESS_CONFIRMATION', 'Please confirm that you would like to load the Wordpress whitelisted variable rules');
define('O_CLEAR_DATA', 'Clear Data');
define('O_CLEAR_DATA_CONFIRMATION', 'Clear Data Confirmation');
define('O_CLEAR_DATA_CONFIRMATION_DESC', 'Please confirm that you would like to clear all variables, it will remove some other hacking information related to this rule');
define('O_STATUS_EXP', 'Status Explanation');
define('SCAN_VARIABLE', 'Scan the Variable');
define('FILTER_VARIABLE', 'Filter the Variable');
define('IGNORE_VARIABLE', 'Ignore the Variable');
define('VARIABLE_CHANGED_SUCCESS', 'The variable status has been changed successfully.');
define('VARIABLE_CHANGED_FAILED', 'The variable status was changed unsuccessfully.');
define('VARIABLE_ADDED_SUCCESS', 'The variable has been added successfully.');
define('VARIABLE_ADDED_FAILED', 'The variable was added unsuccessfully.');
define('VARIABLE_DELETED_SUCCESS', 'The variable has been deleted successfully.');
define('VARIABLE_DELETED_FAILED', 'The variable was deleted unsuccessfully.');

define('LOAD_JOOMLA_DATA', 'Load Joomla Variables');
define('LOAD_JSOCIAL_DATA', 'Load JomSocial Variables');
define('LOAD_JOOMLA_CONFIRMATION', 'Please confirm that you would like to load the Joomla whitelisted variable rules');

define('O_BLACKLIST_COUNTRY', 'Blacklist Country');
define('O_WHITELIST_COUNTRY', 'Whitelist Country');
define('DOWNLOAD_COUNTRY', 'Download Country Database');
define('DOWNLOAD_NOW', 'Download Now');
define('O_MONITOR_COUNTRY', 'Monitor Country');
define('O_CHANGEALL_COUNTRY', 'Change All Countries');
define('O_CHANGEALL_COUNTRY_STATUS', 'What status would you like to change all countries to?');
define('O_COUNTRY', 'Country');
define('COUNTRY_STATUS_CHANGED_SUCCESS', 'The country status has been changed successfully.');
define('COUNTRY_STATUS_CHANGED_FAILED', 'The country status was changed unsuccessfully.');
define('COUNTRY_DATA_DELETE_SUCCESS', 'Country data has been deleted successfully.');
define('COUNTRY_DATA_DELETE_FAILED', 'Country data was changed unsuccessfully.');

define('SECURITY_MANAGEMENT','Security Management');
define('VARIABLES_MANAGEMENT','Variables Management');
define('PREMIUM_SERVICE','Premium Service');

define('O_DEVELOPMENT_MODE','Development Mode');
define('O_FRONTEND_BLOCKING_MODE','Frontend Blocking Mode');
define('O_COUNTRY_BLOCKING','Country Blocking');
define('O_BAN_IP_AND_SHOW_BAN_PAGE_TO_STOP_AN_ATTACK','Ban IP and show ban page to stop an attack');
define('O_SHOW_A_403_ERROR_PAGE_AND_STOP_THE_ATTACK','Show a 403 error page and stop the attack');
define('O_SILENTLY_FILTER_HACKING_VALUES_RECOMMENDED_FOR_NEW_USERS','Silently filter hacking values - Recommended for new users');
define('O_ADRULESETS','Advanced Firewall Setting (See <a href =\'http://www.centrora.com/centrora-tutorial/enabling-advance-firewall-setting/\' target=\'_blank\'>Tutorial Here</a>)');
define('O_GOOGLE_2_VERIFICATION','Google 2-Step Verification');
define('O_FILE_UPLOAD_SCANNING','Scan uploaded files in frontend?');
define('O_ALLOWED_FILE_TYPES','Allowed upload file extensions (Please note: FILEINFO module needs to be installed properly)');
define('O_SILENTLY_FILTER_ATTACK','Silent Mode (Silently filter hacking values. Recommended for new users)');
define('ATTACK_BLOCKING_THRESHOLD','Attack blocking risk score threshold (default: 35)');
define('SILENT_MODE_BLOCK_MAX_ATTEMPTS','Maximum attack attempts allowed for an IP in silent mode (default: 10)');

define('O_SEO_PAGE_TITLE','SEO Page Title');
define('O_SEO_META_KEY','SEO Meta Keywords');
define('O_SEO_META_DESC','SEO Meta Description');
define('O_SEO_META_GENERATOR','SEO Meta Generator');
define('O_WEBMASTER_EMAIL','Webmaster Contact Email');
define('O_CUSTOM_BAN_PAGE','Custom Ban Page');
define('O_SCAN_YAHOO_BOTS','Scan Yahoo Bots');
define('O_SCAN_GOOGLE_BOTS','Scan Google Bots');
define('O_SCAN_MSN_BOTS','Scan MSN Bots');
define('O_SCANNED_FILE_EXTENSIONS','File extensions being scanned');
define('MAX_FILE_SIZE','Maximum file size to be scanned');
define('AUDIT_WEBSITE','Audit My Website');
define('OVERVIEW_COUNTRY_MAP','Overview of Hacking Activities By Countries');
define('OVERVIEW_TRAFFICS','Traffic Overview');
define('RECENT_HACKING_INFO','Recent Hacking Traffic');
define('PLEASE_ENTER_REQUIRED_INFO','Please enter the required information.');
define('MY_PREMIUM_SERVICE','Activate My Premium Service');
define('FIREWALL_CONFIGURATION','Firewall Configuration');
define('INSTALLATION','Installation');
define('INSTALLDB','Install Database Tables');
define('INSTALLDB_INTRO','Install the database created by Centrora Security from your website');
define('UNINSTALLNOW','Uninstall Now');
define('CHANGE_ADMINFORM','New Administrator Username');
define('CHANGE','Change');
define('PHP_CONFIGURATION','PHP Configuration');
define('O_RECEIVE_EMAIL','Receive Centrora Firewall / SafeBrowsing Update Email');
define('O_RECURRING_ID', 'Recurring ID');
define('O_CREATED', 'Created');
define('O_PRODUCT', 'Product');
define('O_PROFILE_ID', 'Profile ID');
define('O_REMAINING', 'Remaining');
define('O_VIEW', 'View');
define('CREATE', 'Create');
define('CREATE_ACCOUNT', 'Create Account');
define('CREATE_AN_ACCOUNT', 'Create An Account');
define('FIRSTNAME', 'First Name');
define('LASTNAME', 'Last Name');
define('EMAIL', 'Email');
define('PASSWORD', 'Password');
define('PASSWORD_CONFIRM', 'Password Confirm');
define('TUTORIAL', 'Tutorial');
define('COUNTRY_CHANGED_SUCCESS','The country status is changed successfully');
define('ACTIVATION_CODES', 'Firewall Activation Codes');
define('ACTIVATION_CODE_TITLE', 'Activation Codes');
define('ACTIVATION_CODE_DESC', 'This Panel shows the activation codes of the firewall in the php.ini or .htaccess for the whole server.');

define('AFFILIATE_ACCOUNT', 'Affiliate Account Information');
define('ADD_TRACKING_CODE', 'Add Tracking Codes');
define('TRACKINGCODE_CANNOT_EMPTY', 'Tracking Codes cannot be empty');
define('TRACKINGCODE_UPDATE_SUCCESS', 'Great! Successfully updated tracking codes. In the future, when the owner of this website subscribes to our subscription plans, the transaction will be logged into your affiliate accounts.');
define('TRACKINGCODE_UPDATE_FAILED', 'Failed updating Tracking Codes');

define('WORDPRESS_ADMIN_AJAX_PROTECTION', 'WordPress Admin Ajax Protection');
define('SCAN', 'Scan');
define('FILE_CONTENT', 'File Content');
?>