<?php

use yii\db\Migration;

/**
 * Class m210805_214153_add_fk_post
 */
class m210805_214153_add_fk_post extends Migration
{


    public function up()
    {

        $this->addForeignKey(
            'tagId',
            'tags',
            'tagId',
            'posts',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        echo "m210805_214153_add_fk_post cannot be reverted.\n";

        return false;
    }

}
