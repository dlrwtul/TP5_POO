<div class="container p-10 my-20 rounded-2xl border-4 animate-flash">
    <h1 class="text-4xl">Details du Module</h1>
    <div class="col-md-4 position-relative my-4">
        <span class="text-2xl text-blue-800 underline mr-5">Module  : </span>
        <span><?php echo $data[0][1] ?></span>
    </div>
    <div class="col-md-4 position-relative"> 
        <span class="text-2xl text-blue-800 underline mb-5">Professeurs </span>
        <ul class="list-group">
            <?php foreach ($data[1] as $key => $professeur) {?>
                <li class="list-group-item"><?php echo $professeur->nom_complet ?></li>
            <?php }?>
        </ul>
    </div>
</div>





