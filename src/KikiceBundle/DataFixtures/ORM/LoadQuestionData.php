<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 27/04/17
 * Time: 13:38
 */
namespace KikiceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use KikiceBundle\Entity\Question;



class LoadQuestionData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $questions= array(
            array(
                "contenu" => "c est la porte ouverte a toutes les fenetres",
                "categorie" => "cat1"
            ),
            array(
                "contenu" => "Est-ce que les pierres tombales sont garanties à vie ?",
                "categorie" => "cat2"
            ),
            array(
                "contenu" => "Est-ce que les manchots ont 50% lorsqu'ils n'achètent qu'un seul gant ?",
                "categorie" => "cat3"
            ),
            array(
                "contenu" => "Peut-on faire de la confiture de coings dans une casserole ronde ?",
                "categorie" => "cat7"
            ),
            array(
                "contenu" => "Que devient le vent coupé par un coupe-vent ?",
                "categorie" => "cat8"
            ),
            array(
                "contenu" => "Si j'appelle un chat Terton peut-il rester scotché ?",
                "categorie" => "cat5"
            ),
            array(
                "contenu" => "Entre le caillou et le coquillage, lequel était le mieux coté en bourse à la préhistoire ?",
                "categorie" => "cat6"
            ),
            array(
                "contenu" => "Si le hasard fait si bien les choses, où puis-je le trouver pour lui déléguer quelques affaires urgentes ? ",
                "categorie" => "cat4"
            ),
        );

        foreach ($questions as $pregunta){
            $question = new Question();
            $question->setContenu($pregunta['contenu']);
            $question->setCategorie($this->getReference($pregunta['categorie']));

            $manager->persist($question);
        }
        $manager->flush();
    }
    public function getOrder()
    {
        return 2;
    }
}