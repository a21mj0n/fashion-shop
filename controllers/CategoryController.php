<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $categoryId = Yii::$app->request->get('category-id');
        $products = Product::find()
            ->where([
                'category_id' => $categoryId
            ])
            ->all();

        $subCategories = Category::find()
            ->where([
                'parent_id' => $categoryId
            ])
            ->asArray()
            ->all();

        $productNotFound = "";
        if (empty($products)) {
            $productNotFound = "In this category don't have products. Sorry";
        }

        return $this->render('index', [
            'products' => $products,
            'productNotFound' => $productNotFound,
            'subCategories' => $subCategories
        ]);
    }
}