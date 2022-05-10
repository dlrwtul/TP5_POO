<?php
require_once('../vendor/autoload.php');
use App\models\Professeur;

/* $prof = new Professeur;
$prof->setNomComplet("Lang Diop");
$prof->setGrade('Bongoman');
$prof->insert(); */
Professeur::findAll();