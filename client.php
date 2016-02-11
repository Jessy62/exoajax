<?php

DEFINE(SERVER, "localhost");
DEFINE(LOGIN, "adminsql");
DEFINE(MDP, "mdpsql");
DEFINE(BASE, "Ajax");

 $id=$_POST['var'];
 $connect=mysqli_connect(SERVER, LOGIN, MDP, BASE)or die("problème de connexion au serveur");
 $res=mysqli_query($connect, "SELECT * FROM Clients WHERE id=".$id);

 while ($data=mysqli_fetch_assoc($res)) {

   echo "nom : ".$data['name']."<br/><br/>";
   echo "prénom : ".$data['lastname']."<br/><br/>";
   echo "mail : ".$data['mail']."<br/><br/>";
   echo "tél : ".$data['phone']."<br/><br/>";
   echo "emploi : ".utf8_encode($data['job'])."<br/><br/>";
   echo "age : ".$data['age']."<br/><br/>";

 }
