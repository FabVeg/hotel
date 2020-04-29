<?php

namespace App\DataFixtures;

use App\Repository\RoomRepository;
use App\Entity\Room;

class RoomFixtures
{
    public function load()
    {
        $repository = new RoomRepository();
        $floor = 1;
        $types = ['Single', 'Double','Suite'];

        for ($i = 0; $i < 50; $i++) {

            if($i % 10 == 0){
                $floor++;
            }
        $room = new Room();
        $room->setNumber($floor*100+$i);
        $room->setFloor($floor);
        $room->setType($types[array_rand($types)] );
        $room->setBeds(rand(1,4));
        $room->setHasAirConditioner(rand(0,1) == 1);
        $room->setHasTelevision(rand(0,1) == 1);
        $room->setCostPerNight(rand(50,500));
        /*$room->serBookings();*/
        
        $repository->add($room);
        }     
    }
}


