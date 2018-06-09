<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $id_home
 * @property string $home
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_home' => 'Id Home',
            'home' => 'Home',
        ];
    }
}
