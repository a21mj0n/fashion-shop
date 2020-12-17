<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Product;
use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;

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
        if ($user->load(Yii::$app->request->post()) && $user->save()) {
            return $this->redirect(['cart/order', 'id' => $user->id]);
        }
        return $this->render('view', [
            'model' => $user
        ]);
    }

    public function actionOrder($id)
    {
        $user = User::findOne($id);

        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('order', [
            'dataProvider' => $dataProvider
        ]);
    }
}