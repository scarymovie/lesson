<?php

use yii\db\Migration;

/**
 * Class m210804_194734_user_info_table
 */
class m210804_194734_user_info_table extends Migration
{

    public function up()
    {
        $this->createTable('user_info', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string(),
            'name' => $this->string()->notNull(),
            'patronymic' => $this->string(),
            'birthday'=>$this->date(),
            'date_create'=>$this->date(),
            'date_update'=>$this->date(),
            'photo'=>$this->string(),
            'userId' => $this->integer(11)->notNull()
            ]);

    }

    public function down()
    {
        echo "m210804_194734_user_info_table cannot be reverted.\n";

        return false;
    }
}
