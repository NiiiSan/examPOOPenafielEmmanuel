<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>

    <body>
    <div class="container">
    <h1>Welcome Home</h1>

    <a href="../examPOOEmmanuelPenafiel/index.php?controller=recipe&action=addForm">
        <button style="margin-bottom:10px;" class="btn btn-success">Ajouter un article</button>
    </a>
    <table class="table">
        <thead>
            <td>Id</td>
            <td>Title</td>
            <td>Ingredients</td>
            <td>Content</td>
            <td>Image</td>
            <td>Buttons</td>
        </thead>

        <tbody>
            <?php
                foreach ($recipes as $rec) {
                    ?>
                    <tr>
                        <td><?php echo $rec->getId()?></td>
                        <td><?php echo $rec->getTitle()?></td>
                        <td><?php echo $rec->getIngredients()?></td>
                        <td><?php echo $rec->getContent()?></td>
                        <td><?php echo $rec->getImage()?></td>
                        <td>
                            <a href="../examPOOEmmanuelPenafiel/index.php?controller=recipe&action=delete&id=<?php echo $art->getId()?>">Supprimer</a>
                            <a href="../examPOOEmmanuelPenafiel/index.php?controller=recipe&action=updateForm&id=<?php echo $art->getId()?>">Modifier</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
    </body>
</html>