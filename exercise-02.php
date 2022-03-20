<?php
require_once "db.php";

function get_order($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM orders WHERE id = ?");
    $orders_query->execute($id);
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT, 30);
}

function get_orders()
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM orders");
    $orders_query->execute();
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT, 30);
}

echo get_order(32);
