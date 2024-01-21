<?php

    class Router {
        public function execute(closure $callback, ...$args){
            return call_user_func_array($callback, [...$args]);
        }
    }

    class Route {
        public function rotear($params){
            return 'route executed by '. $params;
        }
    }

    $route = new Route();
    $closure = Closure::fromCallable([$route, 'rotear']);

    $router = new Router();
    var_dump($router->execute($closure, 'João','Andre'));

    //  $resultados = array_map([$route, 'rotear'], ['Andre', 'Juliana']);
    //  var_dump($resultados);