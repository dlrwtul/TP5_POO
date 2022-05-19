<?php
use App\core\Constantes;
?>
<body class="p-0 m-0">
<div class="container-fluid login flex flex-col items-center justify-center w-screen h-screen overflow-y-hidden bg-blue-100">
    <div class="w-screen h-2 bg-blue-900 absolute top-0 z-20 rounded-b-xl animate-pulse"></div>
    <div class="w-screen h-4 bg-blue-600 absolute top-0 z-10 rounded-b-xl animate-pulse"></div>
    <div class="w-screen h-8 bg-blue-300 absolute top-0 z-0 rounded-b-2xl animate-pulse"></div>
    <div class="w-screen h-12 bg-blue-200 absolute top-0 z-0 animate-pulse"></div>
    <form class="border-8 rounded-2xl border-dark-50 p-8 w-1/3 bg-gray-50 needs-validation" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."login" ?>" method="POST" novalidate>
        <div class="mb-3 has-validation">
            <label for="email" class="form-label">Login</label>
            <input type="email" class="form-control rounded" name="login" id="email" aria-describedby="emailHelp" required>
            <div class="valid-tooltip">
                login correct!
            </div>
            <div class="invalid-tooltip">
                veuillez saisir un login correct!
            </div>
        </div>
        <div class="mb-3 has-validation">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control rounded" name="password" id="password" required>
            <div class="valid-tooltip">
                password correct!
            </div>
            <div class="invalid-tooltip">
                veuillez saisir un password correct!
            </div>
        </div>
        <div class="flex flex-row justify-between items-center mt-2">
            <button type="submit" class="btn btn-primary rounded-lg bg-blue-600">Sign Up</button>
            <!-- <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.'signin' ?>">Sign In ?</a> -->
        </div>
    </form>
    <div class="loginbot absolute right-0 bottom-0 h-14 w-14 p-0.5 bg-red-800 text-white flex justify-end items-end text-xl">
        <span> <i class='bx bxs-user-pin nav_icon' ></i></span>
    </div>
</div>
