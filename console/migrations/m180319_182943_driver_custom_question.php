<?php

use yii\db\Migration;

/**
 * Class m180319_182943_driver_custom_question
 */
class m180319_182943_driver_custom_question extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('driver_custom_question', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'worked' => $this->string()->null(),
            'worked_dates' => $this->string()->null(),
            'worked_rp' => $this->string()->null(),
            'worked_position' => $this->string()->null(),
            'reason_living' => $this->string()->null(),
            'now_employed' => $this->string()->null(),
            'refereed_you' => $this->string()->notNull(),
            'rate_of_pay' => $this->string()->notNull(),
            'bonded' => $this->string(),
            'convicted' => $this->text(),
            'unable_reason' => $this->text(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'driver_custom_question',
            'driver_id'
        );
        $this->addForeignKey(
            'fk-driver_id',
            'driver_custom_question',
            'driver_id',
            'driver',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-driver_id',
            'driver_custom_question'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'driver_custom_question'
        );
        $this->dropTable('driver_custom_question');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_182943_driver_custom_question cannot be reverted.\n";

        return false;
    }
    */
}
