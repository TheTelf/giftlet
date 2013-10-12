<?php

namespace giftlet\giftletBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use giftlet\giftletBundle\Entity\Gift;
 
class LoadGiftData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $pictureFrame = new Gift();
    $pictureFrame->setTitle('GiftletExample: Picture Frame');
    $pictureFrame->setCost(10);
    $pictureFrame->setCreatedby($em->merge($this->getReference('user-administrator')));

    $golfCart = new Gift();
    $golfCart->setTitle('GiftletExample: Golf Cart');
    $golfCart->setCost(1000);
    $golfCart->setCreatedby($em->merge($this->getReference('user-exampleuser')));

    $em->persist($pictureFrame);
    $em->persist($golfCart);

    $em->flush();
 
    $this->addReference('gift-pictureframe', $pictureFrame);
    $this->addReference('gift-golfcart', $golfCart);
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}