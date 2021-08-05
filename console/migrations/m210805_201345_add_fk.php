<?php

use yii\db\Migration;

/**
 * Class m210805_081345_add_fk
 */
class m210805_201345_add_fk extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->addForeignKey(
            'userId',
            'user_info',
            'userId',
            'user',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        echo "m210805_081345_add_fk cannot be reverted.\n";

        return false;
    }

}
