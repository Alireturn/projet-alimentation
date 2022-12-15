<?php 

// connexion a la bdd

// un users c'est connecté

// on stock les inforamtions du user dans une variable

$user=[
  "id"=>1,
  "name"=>"Ali",
  "age"=>29,
  "sexe"=>"homme",
  "weight"=>70,
  "size"=>173,
  "IMC"=>23,4,
  "email"=>"alib.38@outlook.fr",
  "isLogged"=>true
];

if(!$user["isLogged"]){
  header("location:login.php");
  exit;
}



$page=[
  "title" => "Track Calorie - Acceuil"
];

include_once("includes/header.php");

?>

<div class="conatiner">
  <header>
    <div class="title">Track Calories</div>
    <div class="profil">
      <?php echo $user['name']; ?>
    </div>
  </header>

  <section class="dataUser">
    <div>Graph</div>
    <div>IMC</div>
    <div>
      <?php echo $user['weight']; ?>Kg
    </div>
  </section>
  <section class="date">
    <div>
      <?php echo date('l d M Y'); ?>
    </div>
  </section>
  <section class="list">
    <div class="food">
      <div class="titleFood">Big Mac</div>
      <div class="kgFood">504 kcal</div>
    </div>
  </section>

  <footer>
    <button>+</button>
  </footer>
</div>














<?php
include_once('includes/header.php');

?>