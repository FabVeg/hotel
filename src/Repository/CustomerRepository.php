<?php
namespace App\Repository;
 
use Falcon\AbstractRepository;
use App\Entity\Customer;
 
class CustomerRepository extends AbstractRepository
{
    public function __construct(string $typeDB = null) 
    {
        parent::__construct($typeDB ?? 'mongodb');
    }

    public function add( Customer $customer )
    {
    	$this->db->getDatabase()->customers->insertOne( 
    		$this->getEntity($customer)
    	);
    }
 
  
}
