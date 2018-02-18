<?php
    function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
        break;
        case 'submits':
           require_once('models/submit.php');
            $controller = new SubmitsController();
        break;
        case 'orders':
            // we need the model to query the database later in the controller
            require_once('models/order.php');
            $controller = new OrdersController();
        break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'orderlist', 'error'],
                       'orders' => ['index', 'show']);

  if (array_key_exists($controller, $controllers) && in_array($action, $controllers[$controller])) {
      call($controller, $action);
  } else {
    call('pages', 'error');
  }
?>