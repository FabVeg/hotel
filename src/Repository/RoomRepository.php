<?php
namespace App\Repository;
 
use Falcon\AbstractRepository;
use App\Entity\Room;
 
class RoomRepository extends AbstractRepository
{
    public function __construct(string $typeDB = null) 
    {
        parent::__construct($typeDB ?? 'mongodb');
    }

    public function add( Room $room )
    {
    	$this->db->getDatabase()->rooms->insertOne( 
    		$this->getEntity($room)
    	);
    }
 
  
}
