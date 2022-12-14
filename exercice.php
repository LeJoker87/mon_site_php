<!--Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »-->
<?php
for($i = 4; $i <=12; $i++)
{
    echo "$i .  ";
}
?>
<br>
<!--Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.-->
<?php
function soustraction($s)
{
    if($s > 0)
    {
        echo ("$s\n");
        soustraction($s - 1);
    }
}
soustraction(10);
?>
<br>
<!--Écrivez un script PHP, pour vérifier si la page est appelée depuis ‘HTTPS’ ou ‘HTTP’.-->
<?php
if(!empty($_SERVER['HTTPS']))
{
    echo 'Site sécurisé';
}
else
{
    echo 'Site non sécurisé';
}
?>
<br>
<!--Écrivez un script PHP pour rediriger un utilisateur vers une autre page.-->
<?php
/*header('Location: https://osengo.com/');*/
?>
<br>
<!--Écrivez un programme PHP pour supprimer les doublons d’un tableau triée.-->
<?php
$tab = array(1, 2, 2, 3, 3, 3, 4, 5, 5);
print_r(array_values(array_unique($tab)));
?>
<br>
<!--Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for en PHP-->
<?php
$n = 3;
$f = 1;
for($i = $n; $i >= 1; $i--)
{
    $f = $f * $i;
}
echo "La factorielle de $n est $f";
?>
<br>
<!--Écrivez un programme PHP pour trouver la factorielle d’un nombre en utilisant une fonction récursive.-->
<?php
function factorielle($n){
    if($n <= 1){
        return 1;
    }
    else{
        return $n * factorielle($n - 1);
    }
}
$n = 3;
$f = factorielle($n);
echo "La factorielle de $n est $f";
?>
<br>
<!--Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.-->
<?php
for($ligne = 1; $ligne <= 10; $ligne++)
{
    for($etoile = 1; $etoile <= $ligne; $etoile++)
    {
        echo "*";
    }
    echo "<p>\n</p>";
}
?>
<br>
<!--Écrivez un programme PHP pour afficher la table de multiplication jusqu’à 5 * 5.-->
<?php
for($i = 1; $i <= 5; $i++)
{
    for($j = 1; $j <= 5; $j++)
    {
        if($j == 1)
        {
            echo str_pad($i * $j, 2, " ");
        }
        else {
            echo str_pad($i * $j, 4, " ");
        }
    }
    echo "<p>\n</p>";
}
?>
<br>
<!--Créer une calculatrice en PHP avec des bouton en html et css-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculatrice</title>
</head>
<body>
    <form method="GET">
        <h2>Calculatrice</h2>
        <label for="a">Entrez une valeur</label>
        <input type="number" name="a" id="a">
        <label for="operation">Entrez un opérateur (+, -, x, ou /)</label>
        <input type="text" name="operation" id="o" maxlength="1">
        <label for="b">Entrez une valeur</label>
        <input type="number" name="b" id="b">
        <button>Calculer</button>
        <p id="resultat">
            <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            $o = $_GET['operation'];
            switch ($o) {
                case '+': $resultat = $a + $b; break;
                case '-': $resultat = $a - $b; break;
                case '*': $resultat = $a * $b; break;
                case 'x': $resultat = $a * $b; break;
                case '/': $resultat = $b != 0 ? $a / $b: "Peut pas diviser par 0."; break;
                default: $resultat = "Operation non valide."; break;
            }
            echo "$a $o $b = $resultat";
            ?>
        </p>
    </form>
</body>
</html>