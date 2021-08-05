<?php

use yii\db\Migration;

/**
 * Class m210805_212510_add_post_table
 */
class m210805_212510_add_post_table extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(),
            'description' => $this->string(),
            'tagId'=>$this->integer()
        ]);
    }

    public function down()
    {
        echo "m210805_212510_add_post_table cannot be reverted.\n";

        return false;
    }

}
