<?php
function getAllProduits(){
    $connec = new PDO('mysql:dbname=Produits','root','0000');
    $request = $connec->prepare('SELECT * FROM produits');
    $request->execute();
    return $request->fetchAll();
};

function produits($nom, $image, $prix){
    $connec = new PDO('mysql:dbname=Produits','root','0000');
    $request = $connec->prepare("INSERT INTO produits (nom, image, prix)
    VALUES (:nom, :image, :prix);");
    $request->execute([
        ":nom" => $nom,
        ":image" => $image,
        ":prix" => $prix.":€",
    ]);
};
?>
