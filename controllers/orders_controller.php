<?php
    class OrdersController {
        public function index() {
            
            // we store all the orders in a variable
            $orders = Order::all();
            require_once('views/pages/orderlist.php');
            //require_once('views/orders/index.php'); //views/orders/index.php
        }

        public function show() {
            // we expect a url of form ?controller=orders&action=show&id=x
            // without an id we just redirect to the error page as we need the order id to find it in the database
            if (!isset($_GET['id']))
                return call('pages', 'error');
            
            // we use the given id to get the right order
            $order = Order::find($_GET['id']);
            //require_once('views/pages/orderlist.php'); 
            require_once('views/orders/index.php'); //views/orders/index.php
    }
  }
?>