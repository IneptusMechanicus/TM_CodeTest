<?php

// Base model class
// Used primarily to setup PostgreSQL database connection
class Model {

  protected $db;

  function __construct($host, $dbName, $dbUser, $dbPass) {
    $this->db = pg_connect('host='.$host.'
                            port=5432
                            dbname='.$dbName.'
                            user='.$dbUser.'
                            password='.$dbPass);
  }

}
