<?php

//you can edit this file load the way you see fit, it's just an example, but index files always contain autoloading and/or requires

require_once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'load_indexes.php';

//edit below

global $sitedir;
$ldir = $sitedir . 'library' . DIRECTORY_SEPARATOR;

nathanwooten\LoadIndexes\load_indexes( $ldir );
