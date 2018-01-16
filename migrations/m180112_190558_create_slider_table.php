<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m180112_190558_create_slider_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'notice' => $this->text()->defaultValue(""),
            'img' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('slider');
    }
}
