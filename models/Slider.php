<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $notice
 * @property string $img
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notice'], 'string'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'notice' => 'Notice',
            'img' => 'Img',
        ];
    }
    public function setImg($img){
        $this->img = $img;
        return $this->save(false);
    }
    public function getImg(){
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
}
