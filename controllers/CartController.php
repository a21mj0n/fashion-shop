<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Product;
use app\models\User;
use app\modules\admin\models\Order;
use app\modules\admin\models\OrderItem;
use Yii;
use yii\data\ActiveDataProvider;
use yii\debug\models\timeline\DataProvider;

class CartController extends AppController
{
    public function actionAdd()
    {
        $productId = Yii::$app->request->get('productId');
        $quantity = Yii::$app->request->get('quantity');

        $product = Product::findOne($productId);
        if (empty($product))
            return false;

        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product, $quantity);

        $this->layout = false;

        return $this->render('modal-body', compact('session'));
    }

    public function actionView()
    {
        $user = new User();
        $session = Yii::$app->session;
        $session->open();
        if ($user->load(Yii::$app->request->post()) && $user->save()) {

            $order = new Order();
            $order->name = $this->orderName($user->name);
            $order->user_id = $user->id;
            $order->amount = $session['cart.total'];
            $order->sum = $session['cart.sum'];
            $order->shipment_address = $user->address;
            $order->status = 'accepted';

            if ($order->save()) {
                foreach ($session['cart'] as $productId => $product) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $productId;
                    $orderItem->price = $product['price'];
                    $orderItem->quantity = $product['quantity'];
                    $orderItem->save();
                }
            }

            return $this->redirect(['cart/order', 'id' => $order->id]);
        }

        return $this->render('view', [
            'model' => $user
        ]);
    }

    public function actionOrder($id)
    {
        $order = Order::findOne($id);

        return $this->render('order', compact('order'));
    }

    private function orderName($userName)
    {
        return $userName . ' | ' . date('Y:m:d');
    }
}