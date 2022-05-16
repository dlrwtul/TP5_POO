<?php
use App\core\Constantes;
?>
<body class="p-0 m-0">
<div class="container-fluid flex flex-col items-center justify-center w-screen h-screen overflow-y-hidden bg-gray-100">
    <form class="needs-validation border-8 rounded border-dark-50 p-8 w-1/3 bg-gray-50 " action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."login" ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="login" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="flex flex-row justify-between items-center mt-2">
            <button type="submit" class="btn btn-primary rounded-lg">Sign Up</button>
            <!-- <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.'signin' ?>">Sign In ?</a> -->
        </div>
    </form>
</div>