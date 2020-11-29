<?php

// Base model class
// Used primarily to setup PostgreSQL database connection
class ClassName extends AnotherClass
{

  function __construct(argument)
  {
    // code...
  }
}

require_once("app/config.php");

class Model {

  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $name = DB_NAME;

  public function __construct($dbConnection) {
    $dbConnection = $_SESSION["DB_CONNECTION"];
  }

}
