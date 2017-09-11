<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
}
