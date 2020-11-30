<?php
require_once("app/core/model.php");

//Library Model for interacting with the Library Database
class LibraryModel extends Model {

  //Method for adding a new book via the XML Parser Script
  public function addBook($name, $author) {
    $presentEntry = pg_fetch_array(pg_query("SELECT id FROM library WHERE name='$name' and author='$author';"));
    $date = date("Y-m-d");
    if (sizeof($presentEntry) == 0)
    {
      pg_query("INSERT INTO library VALUES('$name', '$author', '$date')");
    } else {
      pg_query("UPDATE library SET last_edited='$date' WHERE id =$presentEntry[0][0];")
    }
  }

  //Method for searching the database by author for the front ends
  public function searchByAuthor($author) {
    $result = pg_query("SELECT name, author, last_edited FROM library WHERE author='$author';");
    if(pg_num_rows($result) == 0)
    {
      return null;
    } else {
      return pg_fetch_array($result);
    }
  }
}
