<!DOCTYPE html>
<html>
  <head>
    <title>TM Author Search</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
  <body>
    <?php
      session_start();
      require_once("app/controllers/library.php");

      $app = new LibraryController();
      $app->renderView("searchPage");
    ?>
  </body>
</html>
