<?php
    class Order {
        // we define 3 attributes
        // they are public so that we can access them using $order->quantity directly
        public $id;
        public $quantity;
        public $firstname;
        public $lastname;
        public $email;

        public function __construct($id, $quantity, $firstname, $lastname, $email) {
            $this->id      = $id;
            $this->quantity  = $quantity;
            $this->firstname = $firstname;
            $this->lastname  = $lastname;
            $this->email     = $email;
        }

        public static function all() {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT * FROM userorders');

            // we create a list of Order objects from the database results
            foreach($req->fetchAll() as $order) {
                $list[] = new Order($order['id'], $order['quantity'], $order['firstname'], $order['lastname'], $order['email']);
            }

            return $list;
        }

        public static function find($id) {
            $db = Db::getInstance();
            // we make sure $id is an integer
            $id = intval($id);
            $req = $db->prepare('SELECT * FROM userorders WHERE id = :id');
            // the query was prepared, now we replace :id with our actual $id value
            $req->execute(array('id' => $id));
            $order = $req->fetch();

            return new Order($order['id'], $order['quantity'], $order['firstname'], $order['lastname'], $order['email']);
        }
  }
?>