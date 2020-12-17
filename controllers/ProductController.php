<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionIndex()
    {
        $productId = Yii::$app->request->get('id');
        $product = Product::findOne($productId);

        $subCategories = Category::find()
            ->where([
                'not',
                ['parent_id' => '0']
            ])
            ->all();

        return $this->render('index', [
            'product' => $product,
            'productCategories' => $subCategories
        ]);
    }
}