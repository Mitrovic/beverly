<?php

use yii\db\Migration;

/**
 * Class m180318_195345_policy
 */
class m180318_195345_policy extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('policy', [
            'id' => $this->primaryKey(),
            'agree'=>$this->tinyInteger()->notNull(),
            'sign' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('policy');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181010_112945_policy cannot be reverted.\n";

        return false;
    }
    */
}
