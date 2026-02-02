<?php
/*
 * SPDX-FileCopyrightText: 2026 <copyright holder> <email>
 * SPDX-License-Identifier: Apache-2.0
 */
require_once '../config/config.php';
require_once 'Request.php';

class Router
{
    public function dispatch($url){

        $request = new Request();

        $url = trim($url); // Elimino gli spazi bianci all'inizio e alla fine

        $parts = explode('/', $url); // Divido l'url nelle sue parti Controller Action

        $controllerName = ucfirst($parts[0] ?: 'home')."Controller";
        $actionName = ucfirst($parts[1] ?? 'index').'Action';

        $controllerFile = BASE_PATH . "/app/controllers/$controllerName.php";

        if (!file_exists($controllerFile)) {
            die("Controller $controllerFile non trovato");
        }

        require_once $controllerFile;
        $controller = new $controllerName($request);

        if (!method_exists($controller, $actionName)) {
            die("Metodo '$actionName' non trovato");
        }

        $controller->$actionName();
    }
}
