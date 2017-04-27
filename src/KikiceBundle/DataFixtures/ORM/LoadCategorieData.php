<?php
/**
 * Created by PhpStorm.
 * User: wilder3
 * Date: 27/04/17
 * Time: 14:11
 */

namespace KikiceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use KikiceBundle\Entity\categorie;

class LoadCategorieData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $categorie1 = new categorie();
        $categorie1->setNom('kikicékablagué');

        $manager->persist($categorie1);

        $this->addReference('cat1', $categorie1);

        $categorie2 = new categorie();
        $categorie2->setNom('kikicékamenti');

        $manager->persist($categorie2);

        $this->addReference('cat2', $categorie2);

        $categorie3 = new categorie();
        $categorie3->setNom('kikicéskadiFranky');

        $manager->persist($categorie3);

        $this->addReference('cat3', $categorie3);

        $categorie4 = new categorie();
        $categorie4->setNom('kikicéou');

        $manager->persist($categorie4);

        $this->addReference('cat4', $categorie4);

        $categorie5 = new categorie();
        $categorie5->setNom('kikicékadidanlmouvi');

        $manager->persist($categorie5);

        $this->addReference('cat5', $categorie5);

        $categorie6 = new categorie();
        $categorie6->setNom('kikicékachanté');

        $manager->persist($categorie6);

        $this->addReference('cat6', $categorie6);

        $categorie7 = new categorie();
        $categorie7->setNom('kikicékipukidi');

        $manager->persist($categorie7);

        $this->addReference('cat7', $categorie7);

        $categorie8 = new categorie();
        $categorie8->setNom('kikicékigif');

        $manager->persist($categorie8);

        $this->addReference('cat8', $categorie8);

        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }

}