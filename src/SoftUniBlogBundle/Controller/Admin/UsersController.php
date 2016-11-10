<?php

namespace SoftUniBlogBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SoftUniBlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/users")
 *
 * Class UserController
 * @package SoftuniBlogBundle\Controller\Admin
 */
class UsersController extends Controller
{

    /**
     * @Route("/", name="admin_users")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listUsers()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/user/list.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/edit/{id}", name="admin_user_edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\component\HttpFoundation\Response
     */
    public function editUser($id, Request $request)
    {
        
    }
}
