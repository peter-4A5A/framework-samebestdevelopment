<?php
  require_once 'model/DatabaseHandler.class.php';
  
  class displayController {

    public function default() {
      include 'view/header.php';
        include 'view/result.php';
        include 'view/sidebar.html';
      include 'view/footer.php';
    }
  }

?>
