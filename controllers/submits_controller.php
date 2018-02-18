<?php
    class SubmitsController {
        //public function sumbit() {
        public function index() {
            $submits = Submit::push();
            require_once('views/pages/orderlist.php');
    }
            //echo "Yayyyy!!";
            
                
            
        //}

  }
?>