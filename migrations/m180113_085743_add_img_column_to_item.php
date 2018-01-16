<?php

use yii\db\Migration;

class m180113_085743_add_img_column_to_item extends Migration
{
//    public function safeUp()
//    {
//
//    }
//
//    public function safeDown()
//    {
//        echo "m180113_085743_add_img_column_to_item cannot be reverted.\n";
//
//        return false;
//    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('item','img',$this->string());
    }

    public function down()
    {
        $this->dropColumn('item','img');
        echo "m180113_085743_add_img_column_to_item cannot be reverted.\n";

        return false;
    }

}
