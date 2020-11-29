<?php

//Library Model for interacting with the Library Database
class LibraryModel extends Model {

  //Method for adding a new book via the XML Parser Script
  public function addEntry($data) {
    print_r("Adding...");
  }

  //Method for searching the database by author for the front end
  public function searchByAuthor($author) {
    print_r("Searching...");
  }
}
