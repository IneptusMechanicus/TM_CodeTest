<?php
require_once("../app/models/library.php");
require_once("../app/config.php");

$file = argv[1];
$rawXML = simplexml_load_file(utf8_encode($file)) or die("Error: Cannot create object");
$libModel = new LibraryModel(DB_HOST, DB_NAME, DB_USER, DB_PASS);

foreach($rawXML->children() as $book) {
  $libModel->addBook($book->name, $book->$author);
}

?>
