<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 27/04/17
 * Time: 21:43
 */

namespace KikiceBundle\Controller;

use KikiceBundle\Entity\Question;
use KikiceBundle\Entity\reponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExpertController extends Controller
{
    /**
     * @Route("/expert/{categid}")
     * @Method("GET")
     */
    public function listAction($categid)
    {
        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('KikiceBundle:Question')
            ->findQuestionInExpert($categid);
//        foreach ($questions as $question) {
//            $reponses[$question->getId()] = $question->getReponses();
//        }

//        $reponses = $em->getRepository('KikiceBundle:reponse')
//            ->findReponseInQuestion($questid);
        return $this->render('expert.html.twig', array(
            'questions' => $questions,
        ));
    }

//    /**
//     * @Route("/expert/{categid}")
//     * @Method("GET")
//     */
//    public function listActionRep(Question $question)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $reponses = $em->getRepository('KikiceBundle:reponse')
//            ->findReponseInQuestion($questid);
//var_dump($questid);
//        return $this->render('expert.html.twig', array(
//            'reponses' => $reponses,
//        ));
//    }
//
//
}