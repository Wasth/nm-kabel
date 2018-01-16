<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $title
 * @property string $using
 * @property string $description
 * @property string $structure_img
 * @property string $info
 * @property string $img
 *
 * @property Variation[] $variations
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'using', 'description', 'info'], 'string'],
            [['structure_img','img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'using' => 'Using',
            'description' => 'Description',
            'img' => 'Image',
            'structure_img' => 'Structure Img',
            'info' => 'Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariations()
    {
        return $this->hasMany(Variation::className(), ['item_id' => 'id']);
    }
    public function setStructureImg($img){
        $this->structure_img = $img;
        return $this->save(false);
    }
    public function setItemImg($img){
        $this->img = $img;
        return $this->save(false);
    }
    public function getImg(){
        return Url::toRoute('/assets/uploads/').'/'.$this->img;
    }
    public function getStructureImg(){
        return Url::toRoute('/assets/uploads/').'/'.$this->structure_img;
    }
}
