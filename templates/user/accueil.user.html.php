<?php
use App\core\Constantes;
require_once(Constantes::cheminDossier('templates','include','header.html.php'));
use App\core\Role;
use App\controllers\RequestController;

$controller = new RequestController();
$user = $controller->session->getSession(Constantes::USER_KEY);
$classeRole = new Role($user->role);
$role = $classeRole->getRole();
$textRole = explode('_', $role);

?>
<body id="body-pd" class="body-pd overflow-hidden">
    <header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar rounded-md show" id="nav-bar">
        <nav class="nav bg-gray-800 ">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Gestin Inscription</span> </a>
                <ul class="nav_list"> 
                <?php if($role == Constantes::ROLE_RP){ ?>
                    <li>
                        <button type="button" class="" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <a href="#" class="nav_link"> <i class='bx bxs-school nav_icon'></i> <span class="nav_name">Classes</span> </a>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."creer-classe" ?>" class="nav_link"><span class="nav_name">Creer classe</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."lister-classe" ?>" class="nav_link"><span class="nav_name">Lister classes</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example1">
                            <a href="#" class="nav_link"> <i class='bx bxs-user-badge nav_icon' ></i></i> <span class="nav_name">Professeurs</span> </a>  
                        </button>
                        <ul id="dropdown-example1" class="hidden py-2 space-y-2">
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."ajouter-professeur" ?>" class="nav_link"><span class="nav_name">Ajouter professeur</span> </a>
                            </li>
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."lister-professeur" ?>" class="nav_link"><span class="nav_name">Lister professeurs</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example2">
                            <a href="#" class="nav_link"> <i class='bx bxs-folder-open nav_icon' ></i> <span class="nav_name">Modules</span> </a> 
                        </button>
                        <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."lister-module" ?>" class="nav_link"><span class="nav_name">Lister modules</span> </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if($role == Constantes::ROLE_AC){ ?>
                    <li>
                        <button type="button" class="" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example3">
                            <a href="#" class="nav_link"> <i class='bx bx-message-square-add nav_icon' ></i> <span class="nav_name">Inscription</span> </a> 
                        </button>
                        <ul id="dropdown-example3" class="hidden py-2 space-y-2">
                            <li>
                                <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."inscrire-etudiant" ?>" class="nav_link"><span class="nav_name">Inscrire etudiant</span> </a>
                            </li>
                        </ul>
                    </li>
                    <a href="#" class="nav_link"> <i class='bx bxs-user-pin nav_icon' ></i> <span class="nav_name">Etudiant</span> </a> 
                <?php } ?>
                    <a href="#" class="nav_link"> <i class='bx bx-text nav_icon'></i></i> <span class="nav_name">Demandes</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> 
                </div>
            </ul>
            <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.'logout' ?>" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Deconnexion</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <?php echo self::$content_for_view; ?>
    <!--Container Main end-->
<?php 
require_once(Constantes::cheminDossier('templates','include','footer.html.php'));
?>