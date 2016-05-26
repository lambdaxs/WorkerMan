<?php
    use Workerman\Worker;
    require_once 'Autoloader.php';

    $text_worker = new Worker("http://0.0.0.0:5678");

    $text_worker->onMessage = function($connection, $data)
    {
        var_dump($data);
        $connection->send("hello world");
    };

    Worker::runAll();