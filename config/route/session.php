<?php

$app->router->add("session", function () use ($app) {
    $app->session->start();

    $app->view->add("take1/header", ["title" => "Session"]);
    $app->view->add("take1/navbar");
    $app->view->add("take1/container");
    $app->view->add("session/session");
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/increment", function () use ($app) {
    $app->session->start();

    $app->session->set("number", ($app->session->get("number")) ? $app->session->get("number") + 1 : 1);

    $app->response->redirect("../session");
});

$app->router->add("session/decrement", function () use ($app) {
    $app->session->start();

    $app->session->set("number", ($app->session->get("number")) ? $app->session->get("number") - 1 : -1);

    $app->response->redirect("../session");
});

$app->router->add("session/status", function () use ($app) {
    $app->session->start();

    $data = [
        "id" => session_id(),
        "name" => session_name(),
        "status" => session_status(),
    ];

    $app->response->sendJson($data);
});

$app->router->add("session/dump", function () use ($app) {
    $app->session->start();

    $app->view->add("take1/header", ["title" => "Dump"]);
    $app->view->add("take1/navbar");
    $app->view->add("take1/container");
    $app->view->add("session/dump", ["data" => $app->session->dump()]);
    $app->view->add("take1/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/destroy", function () use ($app) {
    $app->session->start();

    $app->session->destroy();

    $app->response->redirect("../session/dump");
});
