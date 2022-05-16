<?php
use App\core\Role;
use App\core\Session;
use App\controllers\RequestController;
use App\core\Constantes;

$controller = new RequestController();
$user = $controller->session->getSession(Constantes::USER_KEY);
$classeRole = new Role($user->role);
$role = $classeRole->getRole();
$textRole = explode('_', $role);
?>

<div class="container flex flex-col justify-center items-center pt-52">
  <h1 class="pb-1 text-3xl text-light-900">Bienvenue <?php echo end($textRole)?></h1>
  <div class="w-36 border-1 border-black animate-bounce"></div>
  <div class="accordion w-1/2 pt-5 shadow-gray-700" id="accordionExample">
    <?php if($role == Constantes::ROLE_RP){ ?>
    <div class="accordion-item w-full">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Gestion Classes
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse w-full" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body  w-full">
          <strong>Creer classe:</strong> instancier une nouvelle classe. <br>
          <strong>Lister classes:</strong> lister toutes les classes. <br>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Gestion Professeurs
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse  w-full" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body  w-full">
          <strong>Ajouter un professeur:</strong> ajouter une professeur dans la base de donnee. <br>
          <strong>Lister professeurs:</strong> lister les professeur. <br>
          <strong>Affecter classe a un professeur</strong> <br>
          <strong>Affecter module a un professeur</strong> <br>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Gestion Demandes
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse w-full" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body w-full">
          <strong>Traiter une demande:</strong> accepter ou refuser une demande. <br>
          <strong>Lister demandes</strong>.
        </div>
      </div>
    </div>
    <?php } ?>

    <?php if($role == Constantes::ROLE_AC){ ?>
      <div class="accordion-item w-full">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Gestion Etudiants
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show w-full" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body  w-full">
            <strong>Inscrire etudiant:</strong> Inscrire ou reinscrire un etudiant . <br>
            <strong>Lister etudiants:</strong> lister touts les etudiants. <br>
          </div>
        </div>
      </div>
      <div class="accordion-item w-full">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Gestion demandes
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show w-full" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body  w-full">
            <strong>Lister demandes</strong>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php if($role == Constantes::ROLE_ETUDIANT){ ?>
      <div class="accordion-item w-full">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Gestion demandes
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show w-full" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body  w-full">
            <strong>Ajouter demande</strong>
            <strong>Lister demandes</strong>
          </div>
        </div>
      </div>
    <?php } ?>  
  </div>
</div>
