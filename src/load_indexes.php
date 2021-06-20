<?php

namespace LoadIndexes;

function load_indexes( $lDir, $loadMe = [ 'Filesystem' ] )
{

	$scan = scandir( $ldir );
	foreach ( $scan as $item ) {
		if ( '.' === $item || '..' === $item ) continue;
		$path = $ldir . $item;
		if ( is_dir( $path ) ) {
			$index = $path . '\index.php';
			if ( in_array( $item, $loadMe ) && file_exists( $index ) ) {
				$result = require_once $index;
				if ( ! $result ) {
					throw new Exception( 'Error loading package: ' . $item );
				}
			}
		}
	}

}
