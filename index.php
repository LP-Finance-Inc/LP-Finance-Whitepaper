<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>zSOL whitepaper</title>
    <meta name="keywords" content="whitepaper lp finance" />
    <meta name="description" content="Designing a synthetic asset for leveraged
      strategies" />
    <meta name="author" content="Eric lee">
    <link rel="icon" href="/public/favicon.ico" />
    <link rel="manifest" href="/public/manifest.json" />
  </head>
  <body>

  <?php 
  $file = "./whitepaper.pdf"; 
    header("Content-type: application/pdf"); 
    header("Content-Length: " . filesize($file)); 
    readfile($file); 
  ?>
  </body>
</html>