<?php

use yii\db\Migration;

/**
 * Class m180323_171840_driving_experience
 */
class m180323_171840_driving_experience extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('driving_experience', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('driving_experience');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_171840_driving_experience cannot be reverted.\n";

        return false;
    }
    */
}
