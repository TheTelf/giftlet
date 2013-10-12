<?php

namespace giftlet\giftletBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use giftlet\giftletBundle\Entity\Contribution;
 
class LoadContributionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $firstPayment = new Contribution();
    $firstPayment->setAmount(5.5);
    $firstPayment->setGift($em->merge($this->getReference('gift-pictureframe')));
    $firstPayment->setUser($em->merge($this->getReference('user-administrator')));

    $secondPayment = new Contribution();
    $secondPayment->setAmount(100);
    $secondPayment->setGift($em->merge($this->getReference('gift-golfcart')));
    $secondPayment->setUser($em->merge($this->getReference('user-administrator')));

    $thirdPayment = new Contribution();
    $thirdPayment->setAmount(50);
    $thirdPayment->setGift($em->merge($this->getReference('gift-golfcart')));
    $thirdPayment->setUser($em->merge($this->getReference('user-exampleuser')));

    $em->persist($firstPayment);
    $em->persist($secondPayment);
    $em->persist($thirdPayment);

    $em->flush();
  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}