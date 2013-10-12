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
    $administrator->setHandle('Giftlet_Administrator');

    $exampleUser = new User();
    $exampleUser->setHandle('Giftlet_ExampleUser');

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