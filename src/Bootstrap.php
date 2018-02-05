<?php
namespace App;

use Pabana\Database\Datasource\Sqlite;
use Pabana\Database\Connection;
use Pabana\Database\ConnectionCollection;

class Bootstrap extends \Pabana\Core\Bootstrap
{
    public function initialize()
    {
    	// Set path to SQLite Database
    	$sDatabasePath = APP_ROOT . '/data/database/bookmark.db';
        // Create a Datasource to SQLite database for bookmark exemple
        $dataBookmark = new Sqlite('bookmark');
        $dataBookmark->setDatabase($sDatabasePath);
        // Do connexion
        $cnxBookmark = new Connection($dataBookmark);
        // Register Datasource 'bookmark' to Datasource Collection to re use it in other page 
        ConnectionCollection::add($cnxBookmark, true);
    }
}