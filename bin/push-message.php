<?php
    // post.php ???
    // This all was here before  ;)
    $entryData = array(
        'cat'     => 'kittensCategory'
      , 'title'   => 'some title'
      , 'article' => 'some article'
      , 'when'    => time()
    );

    // This is our new stuff
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
    $socket->connect("tcp://localhost:5555");

    $socket->send(json_encode($entryData));