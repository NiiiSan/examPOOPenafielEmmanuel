<?php
class DefaultController{

    public function home()
    {
        $recipeManager = new RecipeManager();
        $recipes = $recipeManager->selectAll();
        require 'View/homeView.php';
    }
}