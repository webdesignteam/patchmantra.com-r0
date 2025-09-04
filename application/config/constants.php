<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
//Google Recaptcha Settings
define('Recaptcha', 'True'); //True or False
//Admin Settings
define('Version', '0'); //If any Update In website like style, images, Increase Version Number
define('DomainId', ''); //Keep Domain id '1'(Respective Domain ID) or 'NO'
define('Domain', 'Caritero'); //Keep Respective Domain Name 
define('Favicon', 'True'); //True or False
//define('Analytics', 'False'); //True or False
//Email Settings
define('EmailAPI', 'https://services.heterohcl.com/SMTP_EMAIL/');
define('EmailSignature', '<strong>Thanks & Regards</strong><br> Sales Team, <br>Hetero Healthcare Limited.');
//Analytics
define('Noindex', 'False'); //True or False
define('GoogleSite', 'False'); //True or False
define('GoogleSiteKey', 'Testkey'); //VujoFQXatE0tscBRj-ctfZjB_MS8m9tIkAcmf4HuaB0
define('GoogleAnalytics', 'False'); //True or False
define('GoogleAnalyticsKey', 'Testkey'); //UA-98598831-1
define('BingSite', 'False'); //True or False
define('BingSiteKey', 'Testkey'); //71368D8BEB633204C289029D24DE06B5
//SOC Settings
define('SOC', 'True'); //True or False
define('FaceBook', 'True'); //True or False
define('FaceBook_Path', 'https://www.facebook.com/HeteroHealthcareOfficial/');
define('Twitter', 'True'); //True or False
define('Twitter_Path', 'https://twitter.com/HeteroHCL');
define('Instagram', 'True'); //True or False
define('Instagram_Path', 'https://www.instagram.com/heterohealthcareofficial/');
define('Youtube', 'True'); //True or False
define('Youtube_Path', 'https://www.youtube.com/HeteroHealthCareLimited');
define('Linkedin', 'True'); //True or False
define('Linkedin_Path', 'https://in.linkedin.com/company/hetero-healthcare-limited');
define('Pinterest', 'True'); //True or False
define('Pinterest_Path', 'https://in.pinterest.com/heterohealthcare/');
define('Tumblr', 'True'); //True or False
define('Tumblr_Path', 'https://heterohealthcare.tumblr.com/');
//Other Settings
define('DisclaimerPopUp', 'False'); //True or False
define('Disclaimer', 'False'); //True or False
define('OnLoadModal', 'False'); //True or False
define('OnLoadModal_STEP1', 'False'); //True or False
define('OnLoadModal_STEP2', 'False'); //True or False
define('Popbox', 'False'); //True or False
define('Copyright', '<a href="https://heterohealthcare.com" target="_blank">Hetero Healthcare Limited</a>');