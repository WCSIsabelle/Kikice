<?php
/**
 * Created by PhpStorm.
 * User: wilder3
 * Date: 27/04/17
 * Time: 14:11
 */

namespace KikiceBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;

class LoadCategorieData
{

    public function load(ObjectManager $manager)
    {
        $categories = array(
            array(
                "nom" => "kikicekadi",
            ),
        );
    }
}