<?php
// les données sont envoyées
$envoyer = $_GET['Send'];
$formulaire = $_GET['formulaire'];
$nom = $_GET['Nom'];
$prenom = $_GET['Prenom'];
$email = $_GET['Email'];
$telephone = $_GET['Telephone'];
$adresse = $_GET['Adresse'];


// Stocker données du formulaire dans un tableau
if (isset($_GET['Send'])
&& (isset($_GET['Nom']))
&&(isset($_GET['Prenom']))
&&(isset($_GET['Email']))
&&(isset($_GET['Telephone']))
&&(isset($_GET['Adresse']))
)
{
if(!empty($nom) && !empty($prenom)&& !empty($email)&& !empty($telephone)&& !empty($adresse)){
    $tab = [
        'TabForm' =>[
        $nom = $_GET['Nom'],
        $prenom = $_GET['Prenom'],
        $email = $_GET['Email'],
        $telephone = $_GET['Telephone'],
        $adresse = $_GET['Adresse']
    ]
    ];

 
    
    print_r($tab['TabForm'][0]);
    echo "<br>";
    print_r($tab['TabForm'][1]);
    echo "<br>";
    print_r($tab['TabForm'][2]);
    echo "<br>";
    print_r($tab['TabForm'][3]);
    echo "<br>";
    print_r($tab['TabForm'][4]);
}
if(empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse)){
    echo "Champs manquants !";
};
};


?>

<!-- Quand on enlève l’attribut « name » du champ nom, ce message s'affiche :

Warning: Undefined array key "formulaire" in /var/www/html/FormulairePHP/contact.php on line 4

Warning: Undefined array key "Nom" in /var/www/html/FormulairePHP/contact.php on line 5 -->



<!-- Quand j'essaye d'ouvrir le fichier php sans passer par le html : 

Warning: Undefined array key "Send" in /var/www/html/FormulairePHP/contact.php on line 3 

Warning: Undefined array key "formulaire" in /var/www/html/FormulairePHP/contact.php on line 4 

Warning: Undefined array key "Nom" in /var/www/html/FormulairePHP/contact.php on line 5

Warning: Undefined array key "Prenom" in /var/www/html/FormulairePHP/contact.php on line 6

Warning: Undefined array key "Email" in /var/www/html/FormulairePHP/contact.php on line 7

Warning: Undefined array key "Telephone" in /var/www/html/FormulairePHP/contact.php on line 8

Warning: Undefined array key "Adresse" in /var/www/html/FormulairePHP/contact.php on line 9 -->