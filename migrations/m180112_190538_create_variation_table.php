<?php

use yii\db\Migration;

/**
 * Handles the creation of table `variation`.
 */
class m180112_190538_create_variation_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('variation', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'item_id' => $this->integer()
        ]);

        $this->createIndex('item_id-idx','variation','item_id');
        $this->addForeignKey('item_id-fgk','variation','item_id',
            'item','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('item_id-fgk');
        $this->dropIndex('item_id-idx');
        $this->dropTable('variation');
    }
}
