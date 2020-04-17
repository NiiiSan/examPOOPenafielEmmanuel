Partie Théorique : 

1-	
	interface RandomInterface {
  		public function login($user, $password);
  	}
 
	class Random implements RandomInterface {
		public function login($user, $password){
  		}
	}

2- 	
	class Exemple {
  		__construct(){
			//on crée l'objet
  		}
  		__destruct() {
			//on détruit l'objet à la fin du script
  		}
	}

	class Exemple {
    		public function __set($name,$value){
			//on essaie d'attribuer une valeur à un attribut dont on a pas l'accès ou qui n'existe pas
    		}
    		public function __get($name){
			//on cherche à obtenir la valeur d'un attribut dont on a pas l'accès (privé ou protected ou qui n'existe pas)
    		}
  	}

	class Exemple {
  		public function __isset() {
			//est sollicitée lorsque isset() ou empty() sont appelées sur des propriétés inaccessibles (protégées ou privées) ou non existante
  		}
  		public function __unset() {
			//est invoquée lorsque unset() est appelée sur des propriétés inaccessibles (protégées ou privées) ou non existante
  		}
	}

3- je suis __destruct()

4- je suis une classe abstraite
   on me crée de la meme façon qu'une classe, avec abstrat devant 
	
	abstract class{
	}

5- private => variables uniquement dispos pour l'objet
   public => variables dispos à l'extérieur de l'objet
   protected => variables dispos pour l'objet et les classes qui en héritent

6- une exception est un objet sur lequel on configure un message, qui sera appelé sous certaines conditions
   il contient donc le message d erreur, souvent une fonction et un try/catch

7- le routeur (index.php) est la pour rediriger l'utilisateur vers les pages requises
   il utilise le variable superglobale _GET (contenues dans l'url) pour savoir où il doit envoyer l'utilisateur

8-9- le MVC nous permet d'organiser notre code de façon très propre et pratique, le tout étant séparé en 3 parties : 
	- View : tout ce qui sera affiché (contient donc tous les scripts html)
	- Model : qui contiendra nos classes et nos requetes SQL (c'est le crew des objets et des requetes SQL)
	- Controller : qui réunira toutes les fonctions ~~et les trucs compliqués ^^~~

