<?php

  ini_set("SMTP","ssl://smtp.gmail.com");
  ini_set("smtp_port","465");

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mail = $_POST['mail'];
  $comment = $_POST['comment'];

  $dest = "anthonyaradeportfolio@gmail.com";
  $sujet = "formulaire portfolio";
  $corp = " Prénom :" . $firstname . " Nom :" . $lastname . "Mail :" . $mail . "Commentaire :" . $comment ." ";
  $headers = "From:anthonyaradeportfolio@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }

?>