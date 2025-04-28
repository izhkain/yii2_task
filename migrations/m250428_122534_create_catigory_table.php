<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catigory}}`.
 */
class m250428_122534_create_catigory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%catigory}}');
    }
}
