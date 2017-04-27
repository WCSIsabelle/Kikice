<?php
/**
 * Created by PhpStorm.
 * User: wilder3
 * Date: 27/04/17
 * Time: 14:11
 */

namespace KikiceBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectManager
use KikiceBundle\Entity\categorie;

class LoadCategorieData extends Abstra
{

    public function load(ObjectManager $manager)
    {
        $categories = array(
            array(
                "nom" => "kikicékablagué",
            ),
            array(
                "nom" => "kikicékamenti",
            ),
            array(
                "nom" => "kikicéskadiFranky",
            ),
            array(
                "nom" => "kikicéou",
            ),
            array(
                "nom" => "kikicékadidanlmouvi",
            ),
            array(
                "nom" => "kikicékachanté",
            ),
            array(
                "nom" => "kikicékipukidi"
            ),
            array(
                "nom" => "kikicékigif",
            )
        );

        foreach ($categories as $categorie){
            $categorie = new categorie();
            $categorie->setNom($categorie['nom']);
            $manager->persist($categorie);
        }
        $manager->flush();
    }
}