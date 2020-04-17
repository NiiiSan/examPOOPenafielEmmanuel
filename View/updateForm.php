<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
    <div class="container">
        <h1>Modification de la recette <?php echo $recipe->getTitle();?></h1>

        <a href="../examPOOPenafielEmmanuel/index.php?controller=default&action=home'">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
        </a>

        <form method="post" action="index.php?controller=recipe&action=addRecipe">

            <label>Title</label>
            <input name="title" class="form-control" value="<?php echo $recipe->getTitle()?>">

            <label>Ingrédients</label>
            <input name="ingredients" class="form-control" value="<?php echo $recipe->getIngredients()?>">

            <label>Recette</label>
            <input name="content" class="form-control" value="<?php echo $recipe->getContent()?>">

            <label>Image</label>
            <input name="image" class="form-control" value="<?php echo $recipe->getImage()?>">

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>
</html>