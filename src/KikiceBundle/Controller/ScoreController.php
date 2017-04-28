<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 28/04/17
 * Time: 03:41
 */

namespace KikiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ScoreController extends Controller
{
    /**
     * @Route("/score", name="score")
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function ShowScore(Request $request)
    {
        parse_str($request->getContent(), $tab);

        $count = 0;
        foreach ($tab as $value) {
            if ($value == '1'){
                $count++;
            }
        }

        $param = array(
            'count' => $count,
        );

        return $this->render('scorepartie.html.twig', $param);
    }


}