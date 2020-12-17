<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "oder".
 *
 * @property int $id
 * @property int $name
 * @property int $user_id
 * @property int $amount
 * @property int $sum
 * @property int $shipment_address
 * @property string $status
 */
class Oder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'user_id', 'amount', 'sum', 'shipment_address', 'status'], 'required'],
            [['name', 'user_id', 'amount', 'sum', 'shipment_address'], 'integer'],
            [['status'], 'string', 'max' => 255],
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
            'user_id' => 'User ID',
            'amount' => 'Amount',
            'sum' => 'Sum',
            'shipment_address' => 'Shipment Address',
            'status' => 'Status',
        ];
    }
}
