<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m210806_231809_create_posts_table extends Migration
{
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'photo'=>$this->string(),
            'userId' => $this->integer(11)->notNull(),
            'tagId'=>$this->integer(11)->notNull()

        ]);

        $this->addForeignKey(
            'postId',
            'posts',
            'userId',
            'user',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'tagId',
            'posts',
            'tagId',
            'tags',
            'id',
            'CASCADE'
        );

    }
}
