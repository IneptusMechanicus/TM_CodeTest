<!DOCTYPE html>
<html>
  <head>
    <title>TM Author Search</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
  </head>
  <body>
    <?php
      require_once("app/controllers/library.php");

      $app = new LibraryController();
      $app->renderView("searchPage");
    ?>
    <script>
    var data = JSON.stringify(<?php echo json_encode($app->searchAuthors("test")); ?>);
    document.getElementById('contentSection').innerHTML += data;
    </script>
  </body>
</html>
