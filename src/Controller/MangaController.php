<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MangaController extends AbstractController
{
    /**
     * @route("/", name="mangatek_homepage")
     * @return mixed
     */
    public function index()
    {
        return $this->render('manga/index.html.twig');
    }
}