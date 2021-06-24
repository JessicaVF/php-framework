<?php

namespace Controllers;


class Home //extends Controller si besoin d'un model
{
    //  protected $modelName; si besoin d'un model


    /**
     * affiche l'accueil du framework 
     */
    public function index()
    {
        $titreDeLaPage = "Accueil Framework";

         $message = "Bienvenue dans la doc";

        if(!empty($_POST['message'])){
            $message = $_POST['message'];
        }

        \Rendering::render('home/home', compact('titreDeLaPage', 'message'));


    }

   



}