<?php

session_start();

$_SESSION['signed_emails'] = ['me@gmail.com', 'you@gmail.com', 'them@gmail.com',];

var_dump($_SESSION['signed_emails']);

if (isset($_POST['email'])) {

   $user_email = $_POST["email"];

   if (str_contains($user_email, '@') && str_contains($user_email, '.')) {

      if (in_array($user_email, $_SESSION['signed_emails'])) {

         // $alert =
         //    '<div class="col-4 alert alert-success" role="alert"> 
         //       <h3 class="text-center">Welcome back!</h3>
         //    </div>';

         header('Location: ./thankyou.php');
      } else {

         $_SESSION['signed_emails'][] = $user_email;

         var_dump($_SESSION['signed_emails']);

         $alert =
            "<div class='col-4 alert alert-danger' role='alert'> 
               <h3 class='text-center'>We didn't find your e-mail.</h3>
            </div>";
      };
   } else {

      $alert =
         '<div class="col-4 alert alert-danger" role="alert"> 
         <h3 class="text-center">PLease, enter a valid email.</h3>
      </div>';
   }
}
