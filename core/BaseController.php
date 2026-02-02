<?php

require_once 'Request.php';

class BaseController {

    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    protected function view($view, $data = [])
    {
        extract($data, EXTR_PREFIX_ALL, 'data');

        require BASE_PATH . "/app/views/$view.php";
    }
}

