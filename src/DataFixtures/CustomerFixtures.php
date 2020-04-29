<?php


namespace App\DataFixtures;

use App\Repository\CustomerRepository;
use App\Entity\Customer;


class CustomerFixtures
{
    public function load()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $repository = new CustomerRepository();
       
        // inserer un utilisateur 
        for ($i = 0; $i < 50; $i++) {

            $customer = new Customer();
            $customer->setFirstname($faker->firstname);
            $customer->setLastname($faker->lastname);
            $customer->setEmail($faker->email);
            $customer->setPassword($faker->password);
            $customer->setAddress($faker->address);
            $customer->setPostcode($faker->postcode);
            $customer->setCity($faker->city);
            $customer->setCountry($faker->country);
            $customer->setPhone($faker->phoneNumber);

        	$repository->add($customer);
           
        }

	
    }
}


