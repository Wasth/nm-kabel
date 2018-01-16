<?php
    $this->title = $item->title;
?>
<style>
    .tags {
        height: auto;
        margin: 0;
        padding: 0;
    }
</style>
<?= $this->render('/blocks/fullItemBlock',[
    'title' => $item->title,
    'tags' => $item->variations,
    'using' => $item->using,
    'img' => $item->img,
    'description' => $item->description,
]); ?>
<?= $this->render('/blocks/constructionBlock',[
        'img' => $item->structure_img,
]); ?>
<?= $this->render('/blocks/infoTableBlock',[
        'table' => $item->info
]); ?>
<?= $this->render('/blocks/ownProductionBlock'); ?>
<?= $this->render('/blocks/sliderBlock', ['slides'=>$slides]); ?>
<?= $this->render('/blocks/deliveryBlock'); ?>
<?= $this->render('/blocks/partnersBlock'); ?>
<?= $this->render('/blocks/aboutBlock'); ?>
<?= $this->render('/blocks/contactsBlock'); ?>