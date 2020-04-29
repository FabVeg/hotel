<?php

namespace Falcon\Database;
 
use Falcon\GenericSingleton;
use MongoDB\Client;

class MongoDB extends GenericSingleton implements IDatabase
{
    private $db;
    
    protected function __construct() 
    {
        $client =  new Client('mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass%20Community&ssl=false');
        $this->db = $client->admin;
        
       /* $config = include dirname(__DIR__, 2). '/config.php';
        $client =  new Client($config['mongodb']['host']);
        $this->db = $client->selectDatabase($config['mongodb']['dbname']);*/
        
    }
    
    public function getDatabase() 
    {
        return $this->db;
    }

}
        