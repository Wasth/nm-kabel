<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m180112_190502_create_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'using' => $this->text(),
            'description' => $this->text(),
            'structure_img' => $this->string(),
            'info' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('item');
    }
}
