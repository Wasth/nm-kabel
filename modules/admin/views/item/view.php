<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <p>
        <?= Html::a('Установить картинку кабеля', ['setimg', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Установить картинку конструкции', ['setconstpic', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Добавить марку', ['variation/create', 'item_id' => $model->id], ['class' => 'btn btn-default']) ?>
    </p>
    <p>
        <h3>Марки</h3>
        <ul>
            <?php foreach($model->variations as $tag): ?>
                <li><h4> <?= Html::a('X', ['variation/delete', 'id' => $tag->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить эту марку?',
                            'method' => 'post',
                        ],
                    ]) ?> <?= $tag->name ?></h4></li>
            <?php endforeach; ?>
        </ul>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'using:ntext',
            'description:ntext',
            //'info:ntext',
        ],
    ]) ?>
    <p>
        <?php if($model->img): ?>
            <img src="<?= \yii\helpers\Url::toRoute('/assets/uploads/'.$model->img) ?>" alt="">
        <?php endif; ?>
        <?php if($model->structure_img): ?>
            <h3>Конструция</h3>
            <img src="<?= \yii\helpers\Url::toRoute('/assets/uploads/'.$model->structure_img) ?>" alt="">
        <?php endif; ?>
    </p>

</div>
