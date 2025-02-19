<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'cs_01';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['otherdb2']['hostname'] = "localhost";
$db['otherdb2']['username'] = "root";
$db['otherdb2']['password'] = "";
$db['otherdb2']['database'] = "cs_02";
$db['otherdb2']['dbdriver'] = "mysql";
$db['otherdb2']['dbprefix'] = "";
$db['otherdb2']['pconnect'] = FALSE;
$db['otherdb2']['db_debug'] = FALSE;
$db['otherdb2']['cache_on'] = FALSE;
$db['otherdb2']['cachedir'] = "";
$db['otherdb2']['char_set'] = "utf8";
$db['otherdb2']['dbcollat'] = "utf8_general_ci";
$db['otherdb2']['swap_pre'] = "";
$db['otherdb2']['autoinit'] = TRUE;
$db['otherdb2']['stricton'] = FALSE;

$db['otherdb3']['hostname'] = "localhost";
$db['otherdb3']['username'] = "root";
$db['otherdb3']['password'] = "";
$db['otherdb3']['database'] = "cs_03";
$db['otherdb3']['dbdriver'] = "mysql";
$db['otherdb3']['dbprefix'] = "";
$db['otherdb3']['pconnect'] = FALSE;
$db['otherdb3']['db_debug'] = FALSE;
$db['otherdb3']['cache_on'] = FALSE;
$db['otherdb3']['cachedir'] = "";
$db['otherdb3']['char_set'] = "utf8";
$db['otherdb3']['dbcollat'] = "utf8_general_ci";
$db['otherdb3']['swap_pre'] = "";
$db['otherdb3']['autoinit'] = TRUE;
$db['otherdb3']['stricton'] = FALSE;

$db['otherdb4']['hostname'] = "localhost";
$db['otherdb4']['username'] = "root";
$db['otherdb4']['password'] = "";
$db['otherdb4']['database'] = "cs_04";
$db['otherdb4']['dbdriver'] = "mysql";
$db['otherdb4']['dbprefix'] = "";
$db['otherdb4']['pconnect'] = FALSE;
$db['otherdb4']['db_debug'] = FALSE;
$db['otherdb4']['cache_on'] = FALSE;
$db['otherdb4']['cachedir'] = "";
$db['otherdb4']['char_set'] = "utf8";
$db['otherdb4']['dbcollat'] = "utf8_general_ci";
$db['otherdb4']['swap_pre'] = "";
$db['otherdb4']['autoinit'] = TRUE;
$db['otherdb4']['stricton'] = FALSE;

$db['otherdb5']['hostname'] = "localhost";
$db['otherdb5']['username'] = "root";
$db['otherdb5']['password'] = "";
$db['otherdb5']['database'] = "cs_05";
$db['otherdb5']['dbdriver'] = "mysql";
$db['otherdb5']['dbprefix'] = "";
$db['otherdb5']['pconnect'] = FALSE;
$db['otherdb5']['db_debug'] = FALSE;
$db['otherdb5']['cache_on'] = FALSE;
$db['otherdb5']['cachedir'] = "";
$db['otherdb5']['char_set'] = "utf8";
$db['otherdb5']['dbcollat'] = "utf8_general_ci";
$db['otherdb5']['swap_pre'] = "";
$db['otherdb5']['autoinit'] = TRUE;
$db['otherdb5']['stricton'] = FALSE;

$db['otherdb6']['hostname'] = "localhost";
$db['otherdb6']['username'] = "root";
$db['otherdb6']['password'] = "";
$db['otherdb6']['database'] = "cs_06";
$db['otherdb6']['dbdriver'] = "mysql";
$db['otherdb6']['dbprefix'] = "";
$db['otherdb6']['pconnect'] = FALSE;
$db['otherdb6']['db_debug'] = FALSE;
$db['otherdb6']['cache_on'] = FALSE;
$db['otherdb6']['cachedir'] = "";
$db['otherdb6']['char_set'] = "utf8";
$db['otherdb6']['dbcollat'] = "utf8_general_ci";
$db['otherdb6']['swap_pre'] = "";
$db['otherdb6']['autoinit'] = TRUE;
$db['otherdb6']['stricton'] = FALSE;

$db['otherdb7']['hostname'] = "localhost";
$db['otherdb7']['username'] = "root";
$db['otherdb7']['password'] = "";
$db['otherdb7']['database'] = "cs_07";
$db['otherdb7']['dbdriver'] = "mysql";
$db['otherdb7']['dbprefix'] = "";
$db['otherdb7']['pconnect'] = FALSE;
$db['otherdb7']['db_debug'] = FALSE;
$db['otherdb7']['cache_on'] = FALSE;
$db['otherdb7']['cachedir'] = "";
$db['otherdb7']['char_set'] = "utf8";
$db['otherdb7']['dbcollat'] = "utf8_general_ci";
$db['otherdb7']['swap_pre'] = "";
$db['otherdb7']['autoinit'] = TRUE;
$db['otherdb7']['stricton'] = FALSE;

$db['otherdb8']['hostname'] = "localhost";
$db['otherdb8']['username'] = "root";
$db['otherdb8']['password'] = "";
$db['otherdb8']['database'] = "cs_08";
$db['otherdb8']['dbdriver'] = "mysql";
$db['otherdb8']['dbprefix'] = "";
$db['otherdb8']['pconnect'] = FALSE;
$db['otherdb8']['db_debug'] = FALSE;
$db['otherdb8']['cache_on'] = FALSE;
$db['otherdb8']['cachedir'] = "";
$db['otherdb8']['char_set'] = "utf8";
$db['otherdb8']['dbcollat'] = "utf8_general_ci";
$db['otherdb8']['swap_pre'] = "";
$db['otherdb8']['autoinit'] = TRUE;
$db['otherdb8']['stricton'] = FALSE;

$db['otherdb9']['hostname'] = "localhost";
$db['otherdb9']['username'] = "root";
$db['otherdb9']['password'] = "";
$db['otherdb9']['database'] = "cs_09";
$db['otherdb9']['dbdriver'] = "mysql";
$db['otherdb9']['dbprefix'] = "";
$db['otherdb9']['pconnect'] = FALSE;
$db['otherdb9']['db_debug'] = FALSE;
$db['otherdb9']['cache_on'] = FALSE;
$db['otherdb9']['cachedir'] = "";
$db['otherdb9']['char_set'] = "utf8";
$db['otherdb9']['dbcollat'] = "utf8_general_ci";
$db['otherdb9']['swap_pre'] = "";
$db['otherdb9']['autoinit'] = TRUE;
$db['otherdb9']['stricton'] = FALSE;

$db['otherdb10']['hostname'] = "localhost";
$db['otherdb10']['username'] = "root";
$db['otherdb10']['password'] = "";
$db['otherdb10']['database'] = "cs_10";
$db['otherdb10']['dbdriver'] = "mysql";
$db['otherdb10']['dbprefix'] = "";
$db['otherdb10']['pconnect'] = FALSE;
$db['otherdb10']['db_debug'] = FALSE;
$db['otherdb10']['cache_on'] = FALSE;
$db['otherdb10']['cachedir'] = "";
$db['otherdb10']['char_set'] = "utf8";
$db['otherdb10']['dbcollat'] = "utf8_general_ci";
$db['otherdb10']['swap_pre'] = "";
$db['otherdb10']['autoinit'] = TRUE;
$db['otherdb10']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */
