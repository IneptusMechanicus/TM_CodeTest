<?php

// Base model class
// Used primarily to setup PostgreSQL database connection
class Model {

  private $db;

  function __construct($connection) {
    $this->db = $connection;
  }

}
