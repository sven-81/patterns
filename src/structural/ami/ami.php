<?php

declare(strict_types=1);

namespace patterns\structural\ami;

use React\EventLoop\Loop;
use React\Http\Browser;

// Erstelle einen Event-Loop
$browser = new Browser();

// Asynchrone HTTP-Anfrage
$browser->get('https://jsonplaceholder.typicode.com/posts')
    ->then(
        function (\Psr\Http\Message\ResponseInterface $response) {
            echo 'Antwort erhalten: ' . $response->getBody() . PHP_EOL;
        },
        function (\Exception $e) {
            echo 'Fehler: ' . $e->getMessage() . PHP_EOL;
        }
    );

// Start des Event-Loops, um die Anfrage zu verarbeiten
Loop::run();
