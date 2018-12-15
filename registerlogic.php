<?php
  include("header.php");
?>
<div class="ui container">

    <?php

        error_reporting(E_ALL ^ E_NOTICE);     


      include_once("config.php");

      if(isset($_POST['submit'])){

        if($_POST['other_institute'] != NULL){
            $institute = $_POST['other_institute'];
        } else {
            $institute = $_POST['institute'];
        }
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $acad_year = $_POST['acad_year'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $team_name = $_POST['team_name'];
        $team_size = $_POST['team_size'];

        //EVENTS FOR BOYS
        $athletics = $_POST['athletics'];
        $aquatics = $_POST['aquatics'];
        $cricket = $_POST['cricket'];
        $football = $_POST['football'];
        $volleyball = $_POST['volleyball'];
        $basketball = $_POST['basketball'];
        $badminton = $_POST['badminton'];
        $chess = $_POST['chess'];
        $carrom = $_POST['carrom'];
        $squash = $_POST['squash'];
        $table_tennis = $_POST['table_tennis'];
        $lawn_tennis = $_POST['lawn_tennis'];
        $snooker = $_POST['snooker'];
        $power_lifting = $_POST['power_lifting'];
        $pubg = $_POST['pubg'];

        //EVENTS FOR GIRLS
        $athletics_girls = $_POST['athletics_girls'];
        $aquatics_girls = $_POST['aquatics_girls'];
        $volleyball_girls = $_POST['volleyball_girls'];
        $basketball_girls = $_POST['basketball_girls'];
        $badminton_girls = $_POST['badminton_girls'];
        $chess_girls = $_POST['chess_girls'];
        $carrom_girls = $_POST['carrom_girls'];
        $squash_girls = $_POST['squash_girls'];
        $table_tennis_girls = $_POST['table_tennis_girls'];
        $lawn_tennis_girls = $_POST['lawn_tennis_girls'];
        $snooker_girls = $_POST['snooker_girls'];
        $power_lifting_girls = $_POST['power_lifting_girls'];
        $pubg_girls = $_POST['pubg_girls'];


        $events = "";

//BOYS
        if($athletics != NULL){
            $events = $events."Athletics <br>";
        }
        if($aquatics != NULL){
            $events = $events."Aquatics <br>";
        }
        if($cricket != NULL){
            $events = $events."Cricket <br>";
        }
        if($football != NULL){
            $events = $events."Football <br>";
        }
        if($volleyball != NULL){
            $events = $events."Volleyball <br>";
        }
        if($basketball != NULL){
            $events = $events."Basketball <br>";
        }
        if($badminton != NULL){
            $events = $events."Badminton <br>";
        }
        if($chess != NULL){
            $events = $events."Chess <br>";
        }
        if($carrom != NULL){
            $events = $events."Carrom <br>";
        }
        if($squash != NULL){
            $events = $events."Squash <br>";
        }
        if($table_tennis != NULL){
            $events = $events."Table Tennis <br>";
        }
        if($lawn_tennis != NULL){
            $events = $events."Lawn Tennis <br>";
        }
        if($snooker != NULL){
            $events = $events."Snooker <br>";
        }
        if($power_lifting != NULL){
            $events = $events."Power Lifting <br>";
        }
        if($pubg != NULL){
            $events = $events."PUBG <br>";
        }
//GIRLS
        if($athletics_girls != NULL){
            $events = $events."Athletics (GIRLS) <br>";
        }
        if($aquatics_girls != NULL){
            $events = $events."Aquatics (GIRLS) <br>";
        }
        if($volleyball_girls != NULL){
            $events = $events."Volleyball (GIRLS) <br>";
        }
        if($basketball_girls != NULL){
            $events = $events."Basketball (GIRLS) <br>";
        }
        if($badminton_girls != NULL){
            $events = $events."Badminton (GIRLS) <br>";
        }
        if($chess_girls != NULL){
            $events = $events."Chess (GIRLS) <br>";
        }
        if($carrom_girls != NULL){
            $events = $events."Carrom (GIRLS) <br>";
        }
        if($squash_girls != NULL){
            $events = $events."Squash (GIRLS) <br>";
        }
        if($table_tennis_girls != NULL){
            $events = $events."Table Tennis (GIRLS) <br>";
        }
        if($lawn_tennis_girls != NULL){
            $events = $events."Lawn Tennis (GIRLS) <br>";
        }
        if($snooker_girls != NULL){
            $events = $events."Snooker (GIRLS) <br>";
        }
        if($power_lifting_girls != NULL){
            $events = $events."Power Lifting (GIRLS) <br>";
        }
        if($pubg_girls != NULL){
            $events = $events."PUBG (GIRLS) <br>";
        }



        // var_dump($trial);

        $sql = "INSERT INTO pdotrial1(institute, name, designation, acad_year, email, phone, team_name, team_size, athletics, aquatics, cricket, football, volleyball, basketball, badminton, chess, carrom, squash, table_tennis, lawn_tennis, snooker, power_lifting, pubg, athletics_girls, aquatics_girls, volleyball_girls, basketball_girls, badminton_girls, chess_girls, carrom_girls, squash_girls, table_tennis_girls, lawn_tennis_girls, snooker_girls, power_lifting_girls, pubg_girls, events) VALUES(:institute, :name, :designation, :acad_year, :email, :phone, :team_name, :team_size, :athletics, :aquatics, :cricket, :football, :volleyball, :basketball, :badminton, :chess, :carrom, :squash, :table_tennis, :lawn_tennis, :snooker, :power_lifting, :pubg, :athletics_girls, :aquatics_girls, :volleyball_girls, :basketball_girls, :badminton_girls, :chess_girls, :carrom_girls, :squash_girls, :table_tennis_girls, :lawn_tennis_girls, :snooker_girls, :power_lifting_girls, :pubg_girls, :events)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["institute" => $institute, "name" => $name, "designation" => $designation, "acad_year" => $acad_year, "email" => $email, "phone" => $phone, "team_name" => $team_name, "team_size" => $team_size, "athletics" => $athletics, "aquatics" => $aquatics, "cricket" => $cricket, "football" => $football, "volleyball" => $volleyball, "basketball" => $basketball, "badminton" => $badminton, "chess" => $chess, "carrom" => $carrom, "squash" => $squash, "table_tennis" => $table_tennis, "lawn_tennis" => $lawn_tennis, "snooker" => $snooker, "power_lifting" => $power_lifting, "pubg" => $pubg, "athletics_girls" => $athletics_girls, "aquatics_girls" => $aquatics_girls, "volleyball_girls" => $volleyball_girls, "basketball_girls" => $basketball_girls, "badminton_girls" => $badminton_girls, "chess_girls" => $chess_girls, "carrom_girls" => $carrom_girls, "squash_girls" => $squash_girls, "table_tennis_girls" => $table_tennis_girls, "lawn_tennis_girls" => $lawn_tennis_girls, "snooker_girls" => $snooker_girls, "power_lifting_girls" => $power_lifting_girls, "pubg_girls" => $pubg_girls, "events" => $events]);
        
        echo "<h1>Thanks for registering!</h1>";

        // echo "registered";
        // echo '<script>window.location.href = "index.html";</script>';
      }
     ?>

     
   </div>
   <?php
     include("footer.php");
   ?>
