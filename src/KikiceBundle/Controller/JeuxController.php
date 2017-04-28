<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 28/04/17
 * Time: 11:27
 */

namespace KikiceBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class AccueilController
 * @package KikiceBundle\Controller
 * @Route("jeux")
 */
class JeuxController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="jeux_index")
     */
    public function indexAxtion()
    {
        return $this->render('typeJeux.html.twig');
    }

    /**
     * @Route("/expert/3", name="jeu_Franky")
     * @Method("GET")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('KikiceBundle:Question')
            ->findQuestionInExpert(3);
        return $this->render('expert.html.twig', array(
            'questions' => $questions,
        ));
    }

    /**
     * @Route("/expert/5", name="jeu_Mouvi")
     * @Method("GET")
     */
    public function list2Action()
    {
        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('KikiceBundle:Question')
            ->findQuestionInExpert(5);
        return $this->render('expert.html.twig', array(
            'questions' => $questions,
        ));
    }
}