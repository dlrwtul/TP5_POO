<?php
use App\core\Constantes;
?>
<div class="container flex flex-col items-center justify-center w-screen h-screen">
    <form class="border-4 rounded border-blue-300 p-8 w-1/2" action="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR."login" ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="login" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-4 flex flex-row justify-between items-center ">
            <button type="submit" class="btn btn-primary rounded-lg">Sign Up</button>
            <a href="<?php echo Constantes::WEBROOT()."index.php".DIRECTORY_SEPARATOR.'signin' ?>">Sign In ?</a>
        </div>
    </form>
</div>