<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2004-2013 The Cacti Group                                 |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDTool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/
date_default_timezone_set('America/New_York');
/* make sure these values refect your actual database/host/user/password */
$database_type = "mysql";
$database_default = getenv('OPENSHIFT_APP_NAME');
$database_hostname = getenv('OPENSHIFT_MYSQL_DB_HOST');
$database_username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$database_password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$database_port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$database_ssl = false;

/*
   Edit this to point to the default URL of your Cacti install
   ex: if your cacti install as at http://serverip/cacti/ this
   would be set to /cacti/
*/
$url_path = "/";

/* Default session name - Session name must contain alpha characters */
//$cacti_session_name = "Cacti";

?>
