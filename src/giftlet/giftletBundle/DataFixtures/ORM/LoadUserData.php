<?php

namespace giftlet\giftletBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use giftlet\giftletBundle\Entity\User;
 
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $administrator = new User();
        $administrator->setUsername('Giftlet_Administrator');
        $administrator->setEmail('admin@giftlet.co.uk');
        $administrator->setPassword('efacc4001e857f7eba4ae781c2932dedf843865e'); //password
        $administrator->setSalt('admin'); //admin

        $exampleUser = new User();
        $exampleUser->setUsername('Giftlet_ExampleUser');
        $exampleUser->setEmail('example@giftlet.co.uk');
        $exampleUser->setPassword('05f7fbe9c9174d5bba40255c6c7ebfb51546c0e8'); // password
        $exampleUser->setSalt('example'); // example

        $em->persist($administrator);
        $em->persist($exampleUser);

        $em->flush();

        $this->addReference('user-administrator', $administrator);
        $this->addReference('user-exampleuser', $exampleUser);
    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}