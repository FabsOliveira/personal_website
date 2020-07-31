<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $from = 'From: My website';
   $to = 'fabricio.carlos.oliveira@gmail.com';
   $subject = 'Hello';
   $human = $_POST['human'];

   if ($_POST['submit'] && $human == '4') {
      if (mail($to, $subject, $message, $from)) {
         echo '<p>Your message has been sent!</p>';
   } else {
         echo '<p>Something went wrong, go back and try again!</p>';
   }
   } else if ($_POST['submit'] && $human != '4') {
   echo '<p>You answered the anti-spam question incorrectly!</p>';
   }
?>
