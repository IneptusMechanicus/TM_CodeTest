<?php
require_once("app/core/controller.php");
require_once("app/models/library.php");
require_once("app/config.php");

class LibraryController extends Controller {

  function __construct()
  {
    $this->model = new LibraryModel(DB_HOST, DB_NAME, DB_USER, DB_PASS);
  }

  public function searchAuthors($searchQuery) {
    return $this->model->searchByAuthor($searchQuery);
  }
}
