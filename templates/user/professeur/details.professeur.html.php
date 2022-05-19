<div class="container p-10 my-20 rounded-2xl border-4 animate-flash">

    <h1 class="text-4xl">Details du Professeur</h1>
    <div class="col-md-4 position-relative my-4">
        <span class="text-2xl text-blue-800 underline mr-5">Nom Complet  : </span>
        <span><?php echo $data[0][1] ?></span>
    </div>

    <div class="col-md-4 position-relative my-4">
        <span class="text-2xl text-blue-800 underline mr-5">Grade  : </span>
        <span><?php echo $data[0][6] ?></span>
    </div>

    <div class="col-md-4 position-relative"> 
        <span class="text-2xl text-blue-800 underline mb-5">Classes </span>
        <ul class="list-group">
            <?php foreach ($data[1] as $key => $classe) {?>
                <li class="list-group-item"><?php echo $classe->libelle ?></li>
            <?php }?>
        </ul>
    </div>

    <div class="col-md-4 position-relative"> 
        <span class="text-2xl text-blue-800 underline mb-5">Modules </span>
        <ul class="list-group">
            <?php foreach ($data[2] as $key => $module) {?>
                <li class="list-group-item"><?php echo $module->libelle ?></li>
            <?php }?>
        </ul>
    </div>
</div>





