<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['selection']) && !empty($_POST['message'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $selection = $_POST['selection'];
       $message = $_POST['message'];

       $header = "From: aguilaramilcar96@gmail.com" . "\r\n";
       $header.= "Reply-To aguilaramilcar96@gmail.com" . "\r\n";
       $header.= "X-Mailer: PHP/". phpversion();
       $mail= @mail($email, $selection, $message, $header);
       if ($mail) {
           echo "<h4> Mail enviado exitosamente </h4>";
       }
    }
}
