<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $price
 * @property string $old_price
 * @property string $description
 * @property int $ware_quantity
 * @property int $quantity
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'price', 'old_price', 'description', 'ware_quantity', 'quantity'], 'required'],
            [['category_id', 'ware_quantity', 'quantity'], 'integer'],
            [['description'], 'string'],
            [['name', 'price', 'old_price'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'description' => 'Description',
            'ware_quantity' => 'Ware Quantity',
            'quantity' => 'Quantity',
        ];
    }
}
