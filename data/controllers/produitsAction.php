<?php
session_start();
require_once('./db.php');
produits($_POST['nom'],$_POST['image'],$_POST['prix']);
header('Location: /home.php');die;
