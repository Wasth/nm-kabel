<div id="itemWrapper">
    <div id="itemContent" class="content">
        <h1><?= $title ?></h1>
        <div class="tags">
            <?php foreach($tags as $tag): ?>
                <span class="tag"><?= $tag->name ?></span>
            <?php endforeach; ?>
        </div>
        <div id="itemInfo">
            <div>
                <img id="itemImg" src="assets/uploads/<?= $img ?>">
            </div>
            <div>
                <h2>Назначение и область применения</h2>
                <p><?= $using ?></p>
                <?php if($description): ?>
                <h2>Исполнение:</h2>
                <p><?= $description ?></p>
                <?php endif; ?>
                <div id="itemAdvantages">
                    <div><img src="assets/img/itemmoney.png" alt="">
                        <p>Предоплата<br>от 30%</p>
                    </div>
                    <div><img src="assets/img/itemcup.png" alt="">
                        <p>На рынке больше 20 лет</p>
                    </div>
                    <div><img src="assets/img/itembrowser.png" alt="">
                        <p>Срок производств 20-25 дней</p>
                    </div>
                    <div><img src="assets/img/itemplug.png" alt="">
                        <p>Мощность 500 км в месяц</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>