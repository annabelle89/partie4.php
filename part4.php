<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo1php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

        <h1>Exercice 1</h1>
    <?php
    
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.


//Je choisis le nom de ma fonction, et je saisis les instructions à l'intérieur des accolades.
function prendre($type)
{
    return strtoupper($type);//retourne la valeur en majuscule.
}
echo prendre("protéinée");//Affiche la fonction prendre en majuscule.

?>

<hr>


<h1>Exercice 2</h1>
    <?php
//Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.

function préparer($parfum, $genre = "chocolat")
{
    return "Préparer un gâteau au $genre $parfum \n";
}
 
echo préparer("blanc");   
?>

<hr>

<h1>Exercice 3</h1>
<?php
//Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//Les deux nombres sont identiques si les deux nombres sont égaux

function compareNumber($number1,$number2){

if($number1>$number2){
    return "Le premier nombre est plus grand";
}
else if($number1<$number2){
    return "Le premier nombre est plus petit";
}
else{
    return "Les deux nombres sont identiques"; 
}
}
echo compareNumber(15,7);

?>

<hr>

<h1>Exercice 4</h1>

<?php
//Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme : Bonjour + name + firstname + , tu as + age + ans.

//J'appelle mes variables avant la 'function'.
$firstname='Annabelle';
$lastname='Hoarau';
$age=(int)31;

function ident($firstname,$lastname,$age){

//Je renvois une chaîne de caractère contenant les variables.
return "Bonjour ".$lastname." ".$firstname. ", tu as " .$age. " ans";
}
//J'affiche le résultat.
echo ident($lastname,$firstname,$age);

?>


<hr>

<h1>Exercice 5</h1>
<h2>Nombres impairs</h2>

<?php
//Afficher tous les nombres impairs entre 0 et 300, par ordre croissant.


//On créé une boucle, i=0 et i sera inférieur ou égale à 300 et $i++ signifie qu'on ajoute 1. 
//On vérifie qu'on est tjs dans les conditions de la boucle.
//i pour itération, utilisé lorqu'on a un compteur.
//Le code dans la boucle va être exécuté 300 fois.
//On peut exécuter ce code sans fonction.
    for($i=0;$i<=300;$i++){

    if ($i % 2 == 1){
        echo "<li>$i</li>";
    }
    else{
        
    }
    } 
?>

<hr>

<h1>Exercice 6</h1>
<?php
//Afficher les nombres de 1 à 100. En remplaçant le nombre par un mot selon certaines conditions :
//Le mot Fizz s'il est multiple de 3
//Le mot Buzz s'il est multiple de 5
//Le mot FizzBuzz s'il est multiple de 3 et de 5

for($i=1;$i<=100;$i++){

    if(($i % 3 == 0) &&($i % 5 ==0)){ echo '<li>fizzbuzz</li>';  }
    else if($i % 3 == 0)            { echo '<li>fizz</li>';      }
    else if($i % 5 == 0)            { echo '<li>buzz</li>';      }
    else                            { echo '<li>'.$i.'</li>';    }

}

?>
<hr>
    </body>
</html>