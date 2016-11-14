<?php

namespace Portal\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $message = $this->params()->fromQuery('message', 'Testing');
        return new ViewModel(array('message' => $message));
    }
}
