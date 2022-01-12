<?php
require_once "vendor/autoload.php";

use App\Entity\Member;
use App\Entity\Admin;
use App\Entity\Article;
use App\Entity\User;
use App\Helpers\EntityManagerHelper;

$user = new User(65115, 'Paul', 'Dausseur', 18, "Paulebogoss@gmail.com", true);
$user2 = new User(25854, 'Clément', 'Beaudouin', 20, "clement0201@gmail.com", false);
$content = "puceau moi ? serieusement ^^ haha on me l avait pas sortie celle la depuis loooongtemps :) demande a mes potes si je suis puceau tu vas voir les reponses que tu vas te prendre XD";

$article = new Article("Star Wars et les enfants du sabre", $content, $user2);

echo $user2->getFullName() . ' ' . "est l'auteur de " . $article->setTitle("C'est jean marie bigard ma couillasse")->getTitle() . " le contenu de l'article est " . $article->getContent();

$em = EntityManagerHelper::getEntityManager();

$em->persist($user2);

$em->flush();
