<?php ?>

<?php

require_once __DIR__ . "/partials/functions.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- /Link Bootstrap -->

   <!-- Link Fontawesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- /Link Fontawesome -->

   <title>PHP - Newsletter Inscription (Fake)</title>

</head>

<body>

   <div class="container-md">

      <h1 class="text-primary text-center mt-3 mb-5">Login to our newsletter.</h1>

      <!-- Form Section -->
      <section class="row justify-content-center">

         <form class="col-6 mb-3" action="index.php" method="POST">

            <div class="mb-3">

               <label for="input-email" class="form-label">Insert your email here.</label>

               <input type="text" class="form-control" id="input-email" placeholder="email@gmail.com" name="email">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

         </form>

      </section>
      <!-- /Form Section -->

      <!-- Alert Section -->
      <section class="row justify-content-center">

         <?php
         if (isset($_POST['email'])) {

            echo $alert;
         }
         ?>

      </section>
      <!-- /Alert Section -->

   </div>

</body>

</html>