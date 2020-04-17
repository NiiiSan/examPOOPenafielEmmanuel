<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
    <div class="container">
        <h1>Ajout</h1>

        <a href="../examPOOPenafielEmmanuel/index.php?controller=default&action=home'">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
        </a>

        <form method="post" action="index.php?controller=recipe&action=addRecipe">

            <label>Title</label>
            <input name="title" class="form-control">

            <label>Ingrédients</label>
            <input name="ingredients" class="form-control">

            <label>Recette</label>
            <input name="content" class="form-control">

            <label>Image</label>
            <input name="image" class="form-control">

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>
</html>