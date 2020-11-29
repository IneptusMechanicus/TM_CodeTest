<?php

//Base Controller class with methods for fetching required models and views.
class Controller {

  //Fetches the model php file and instantiates that model
  public function initModel($model) {
    require_once('app/models/' . $model . '.php');
    return new $model();
  }

  //Renders the required view
  public function renderView($view) {

    if (file_exists('app/views/' . $view . '.php')) {
        require_once('app/views/' . $view . '.php');
    } else {
        die("View does not exists.");
    }
  }
}
