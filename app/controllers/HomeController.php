<?php

require_once '../config/config.php';

require_once BASE_PATH.'/core/BaseController.php';

class HomeController extends BaseController {

    public function indexAction(){

        $this->view('home', [
            'message' => 'ciao'
        ]);
    }
}
