<?php


namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $quantity = 1)
    {
        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['quantity'] += $quantity;
        } else {
            $_SESSION['cart'][$product->id] = [
                'name' => $product->name,
                'price' => (int)$product->price,
                'quantity' => $quantity,
            ];
        }

        $_SESSION['cart.total'] = isset($_SESSION['cart.total'])
            ? $_SESSION['cart.total'] + $quantity
            : $quantity;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum'])
            ? $_SESSION['cart.sum'] + (int)$product->price * $quantity
            : $quantity * (int)$product->price;
    }
}