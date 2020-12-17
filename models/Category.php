<?php


namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }

    public function categoryNames()
    {
        $categoryNames = [];
        $categories = Category::find()->all();
        foreach ($categories as $category) {
            $categoryNames[$category->id] = $category->name;
        }

        return $categoryNames;
    }

}