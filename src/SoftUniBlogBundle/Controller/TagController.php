<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagController extends Controller
{
    /**
     * @Route("/tags/{name}", name="articles_with_tag")
     *
     * @param $name
     * @return \Symfony\component\HttpFoundation\Response
     */
    public function createCategory($name)
    {
        $tag = $this->getDoctrine()->getRepository(Tag::class)->findOneBy(['name' => $name]);

        return $this->render('tags/articles.html.twig', ['tag' => $tag]);
    }
}
