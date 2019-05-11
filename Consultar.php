<?php

include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_jgAooZS3dhPgxQtXuPaT4yplOpvnAJ');

$transacao = $pagarme->transactions()->get([
    'id' => '6337488'
]);

echo $transacao->status;