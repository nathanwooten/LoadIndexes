<?php


global $sitedir;

require once dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'load_indexes.php';

$ldir = $sitedir . 'library' . DIRECTORY_SEPARATOR;

load_indexes( $ldir );
