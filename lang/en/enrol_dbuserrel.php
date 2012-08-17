<?php
$string['pluginname'] = 'User role assignment';
$string['dbtype'] = 'Database type';
$string['dbtype_desc'] = 'ADOdb database driver name, type of the external database engine.';
$string['dbhost'] = 'Server IP name or number';
$string['dbhost_desc'] = 'Type database server IP address or host name';
$string['dbuser'] = 'Server user';
$string['dbpass'] = 'Server password';
$string['dbname'] = 'Database name';
$string['dbtable'] = 'Database table';
$string['dbencoding'] = 'Database encoding';
$string['useenroldatabase'] = 'Same database connection?';
$string['useenroldatabase_desc'] = 'Use the same settings for database connection as the Database enrolment plugin is using (You will still have to specify table name)';
$string['useauthdb'] = 'useauthdb.....';
$string['useauthdb_desc'] = 'Use the same settings for database connection as the Database authentication plugin is using (You will still have to specify table name)';
$string['description'] = 'You can use a external database (of nearly any kind) to control your relationships between users. It is assumed your external database contains a field containing two user IDs, and a Role ID.  These are compared against fields that you choose in the local user and role tables';
$string['enrolname'] = 'External Database (User relationships)';
$string['localrolefield'] = 'Local role field';
$string['localsubjectuserfield'] = 'Local subject field';
$string['localobjectuserfield'] = 'Local object field';
$string['localrolefield_desc'] = 'The name of the field in the roles table that we are using to match entries in the remote database (eg shortname).';
$string['localsubjectuserfield_desc'] = 'The name of the field in the user table that we are using to match entries in the remote database (eg idnumber). for the <i>subject</i> role assignment';
$string['localobjectuserfield_desc'] = 'The name of the field in the user table that we are using to match entries in the remote database (eg idnumber). for the <i>object</i> role assignment';
$string['remote_fields_mapping'] = 'Database field mapping';
$string['remoterolefield'] = 'Remote role field';
$string['remotesubjectuserfield'] = 'Remote subject field';
$string['remoteobjectuserfield'] = 'Remote object field';
$string['remoterolefield_desc'] = 'The name of the field in the remote table that we are using to match entries in the roles table.';
$string['remotesubjectuserfield_desc'] = 'The name of the field in the remote table that we are using to match entries in the user table for the <i>subject</i> role assignment';
$string['remoteobjectuserfield_desc'] = 'The name of the field in the remote table that we are using to match entries in the user table for the <i>object</i> role assignment';
$string['server_settings'] = 'External Database Server Settings';
$string['pluginname_desc'] = 'You can use an external database (of nearly any kind) to control your mentor role. It is assumed your external database contains at least a field containing a student username, a mentor role, and a field containing a mentor username. These are compared against fields that you choose in the local role and user tables.';
$string['settingsheaderdb'] = 'External database connection';
$string['remoteenroltable'] = 'Remote user enrolment table';
$string['remoteenroltable_desc'] = 'Specify the name of the table that contains list of user enrolments. Empty means no user enrolment sync.';
