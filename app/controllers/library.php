<?php
require_once("app/core/controller.php");
require_once("app/models/library.php");
require_once("app/config.php");

class LibraryController extends Controller {

  private $libModel;

  function __construct()
  {
    $libModel = new LibraryModel(pg_connect('host='.DB_HOST.' port=5432 dbname='.DB_NAME.' user='.DB_USER.' password='.DB_PASS));
  }

  public function searchAuthors($searchQuery) {
    return pg_fetch_array(pg_query("SELECT * FROM library"));
  }
}
