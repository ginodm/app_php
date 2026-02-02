<?php

require_once '../config/config.php';

class Request {

    /**
     * La funzione ritorna i parametri passati tramite il metofo
     * HTTP GET.
     * INPUT_GET serve a dire a PHP: “leggi i parametri GET”
     *
     * @param $key string Nome del parametro passato tramite GET
     *
     * @returns
     *  @return valaore parametro
     *  @return query string
     */
    public function get(string $key = null, $default = null){

         if ($key === null) {
            return filter_input_array(INPUT_GET) ?? [];
        }

        return filter_input(INPUT_GET, $key) ?? $default;

    }

    public function post(string $key = null, $default = null){

        if ($key === null) {
            return filter_input_array(INPUT_POST) ?? [];
        }

        return filter_input(INPUT_POST, $key) ?? $default;

    }

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isPost(): bool
    {
        return $this->method() === 'POST';
    }

    public function isGet(): bool
    {
        return $this->method() === 'GET';
    }
}

