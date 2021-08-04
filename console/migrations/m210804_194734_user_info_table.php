<?php

use yii\db\Migration;

/**
 * Class m210804_194734_user_info_table
 */
class m210804_194734_user_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210804_194734_user_info_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210804_194734_user_info_table cannot be reverted.\n";

        return false;
    }
    */
}
