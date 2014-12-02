<?php
namespace WeCMS\AdminBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_we_admin")
     * @Template(engine="php")
     */
    public function indexAction()
    {
        
    }
}