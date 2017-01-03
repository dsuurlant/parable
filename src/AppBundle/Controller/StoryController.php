<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class StoryController
 * @Route("/story")
 */
class StoryController extends Controller
{
    /**
     * @Route("/all", name="story_list")
     * @Template()
     */
    public function listAction()
    {
        // get stories
        $stories = $this->getDoctrine()->getRepository('AppBundle:Story')->findAll();

        return array('page_title' => 'Story -> List', 'stories' => $stories);
    }

    /**
     * @Route("/create", name="story_create")
     * @Template()
     */
    public function createAction()
    {
        return array('page_title' => 'Story -> Create New');
    }
}