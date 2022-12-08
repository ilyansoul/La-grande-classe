<?php
//afficher la saisie de l'utulisateur
// echo "Je m'apelle " . $_GET['Nom'] . " et mon nom est : " .$_GET['Prenom'] . " et mon genre est : " .$_GET['sexe'];

// recup les inf saisis par l'utulisateur

$nom = $_POST['nom'];
$email = $_POST['email'];
$nomPhoto = $_FILES['photo']['name'];
$fichierTempo = $_FILES['photo']['tpm_name'];

//deplacer le fichier temporel vers le dossier images de mnotre application

move_uploaded_file($fichierTempo, './images/' . $nomPhoto);



// envoie des donnes vers la BD
//se connecter a la base de donnees

require_once('connexion.php');

//creer objet prepare statment $ps.. je vais inserer dans la table etudiant, le nom emaiul photo

$ps=$pdo->prepare("INSERT INTO Etudiants(NOM,EMAIL,PHOTO) VALUES (? , ? , ?)");

// stocker les param(dans l'ordre) dans un tableau

$params = array($nom, $email, $nomPhoto);

// executer la requete + tranferer les parametres dans l'ordres

$ps->execute($params); //les donnes sont stockees dans la base de donnees

// rediriger : revenir vers l'apache pour afficher les etudiants

header("location: etudiants.php")



?>