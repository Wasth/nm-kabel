
<div id="catalogWrapper">
    <h1 id="catalogHeader" class="block-header">КАТАЛОГ ПРОДУКЦИИ</h1>
    <div id="catalogContent" class="content">
        <?php use yii\helpers\Url;

        foreach($items as $item): ?>
        <div>
            <h3><?= $item->title ?></h3>
            <p class="img-block">
                <img src="assets/uploads/<?= $item->img ?>">
            </p>
            <div class="tags">
                <?php foreach($item->variations as $variation): ?>
                <span class="tag"><?= $variation->name ?></span>
                <?php endforeach; ?>
            </div>
            <a href="<?= Url::toRoute(['item','id'=>$item->id]) ?>"><button>ЗАКАЗАТЬ</button></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>