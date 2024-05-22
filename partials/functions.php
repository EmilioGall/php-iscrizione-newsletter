<?php

$signed_emails = ['me@gmail.com', 'you@gmail.com', 'them@gmail.com',];

if (!isset($_SESSION)) {

   session_start();
}

if (isset($_POST['email'])) {

   $user_email = $_POST["email"];

   if (str_contains($user_email, '@') && str_contains($user_email, '.')) {

      foreach ($signed_emails as $email) {

         if ($user_email === $email) {

            $alert =
               '<div class="col-4 alert alert-success" role="alert"> 
               <h3 class="text-center">Welcome back!</h3>
            </div>';

            // $_SESSION['authorized'] = true;

            break;
         } else {

            $alert =
               "<div class='col-4 alert alert-danger' role='alert'> 
               <h3 class='text-center'>We didn't find your e-mail.</h3>
            </div>";
         };
      }
   } else {

      $alert =
         '<div class="col-4 alert alert-danger" role="alert"> 
         <h3 class="text-center">PLease, enter a valid email.</h3>
      </div>';
   }
}

?>