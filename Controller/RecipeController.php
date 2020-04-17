<?php

class RecipeController{

    public function addForm(){

        require 'View/addForm.php';

    }

    public function addRecipe(){
        $recipe = new Recipe(null, $_POST['title'], $_POST['ingredients'], $_POST['content'], $_POST['image']);
        $recipeManager = new RecipeManager();
        $recipeManager->insert($recipe);

        header('Location: /examPOOPenafielEmmanuel/index.php?controller=default&action=home');
    }

    public function updateForm($id){
        $recipeManager = new RecipeManager();
        $recipe = $recipeManager->selectOne($id);

        require 'View/updateForm.php';
    }

    public function updateRecipe($id){
        $recipeManager = new RecipeManager();
        $recipe = $recipeManager->selectOne($id);
        $recipe = new Recipe($id, $_POST['title'], $_POST['ingredients'], $_POST['content'], $_POST['image']);
        $recipeManager->update($recipe);

        header('Location: /examPOOPenafielEmmanuel/index.php?controller=default&action=home');
    }

    public function delete($id){
        $recipeManager = new RecipeManager();
        $recipeManager->delete($id);

        header('Location: /examPOOPenafielEmmanuel/index.php?controller=default&action=home');
    }
}
?>