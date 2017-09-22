<?php

require_once 'app/CommentController.php';
$commentController = new CommentController();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
    $commentController->insert();

$commentController->index();
