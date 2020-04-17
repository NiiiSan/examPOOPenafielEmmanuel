<?php

class RecipeManager extends DbManager{

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll(){
        $recipes = [];
        $sql =  'SELECT * FROM recipes ORDER BY id';
        foreach  ($this->bdd->query($sql) as $row) {
            $articles[] = new Recipe($row['id'], $row['title'], $row['ingredients'], $row['content'], $row['image']);
        }
        return $recipes;
    }
    
    public function selectOne($id){
        $request =  $this->bdd->prepare("SELECT * FROM recipes WHERE id=?");
        $request->bindParam(1, $id);
        $request->execute();
        $res = $request->fetch();
        $recipe = new Recipe($res['id'], $res['title'], $res['ingredients'], $res['content'], $res['image']);
        
        return $recipe;
    }

    public function insert(Recipe $recipe){
        $title = $recipe->getTitle();
        $ingredients = $recipe->getIngredients();
        $content = $recipe->getContent();
        $image = $recipe->getImage();
        $request = $this->bdd->prepare("INSERT INTO recipes (title, ingredients, content, image) VALUES (?,?,?,?)");
        $request->bindParam(1, $title);
        $request->bindParam(2, $ingredientsu);
        $request->bindParam(3, $content);
        $request->bindParam(4, $image);
        $request->execute();
        $recipe->setId($this->bdd->lastInsertId());
    }

    public function update(Recipe $recipe){
        $title = $recipe->getTitle();
        $ingredients = $recipe->getIngredients();
        $content = $recipe->getContent();
        $image = $recipe->getImage();
        $request = $this->bdd->prepare("UPDATE recipes SET title =?, ingredients =?, content =?, image =? WHERE id =?");
        $request->bindParam(1, $title);
        $request->bindParam(2, $ingredients);
        $request->bindParam(3, $content);
        $request->bindParam(4, $image);
        $request->execute();
    }

    public function delete(){
        $request = $this->bdd->prepare("DELETE FROM recipes WHERE id =?");
        $request->bindParam(1,$id);
        $request->execute;
    }   

}

?>