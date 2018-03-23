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
            'driver_id' => $this->integer()->notNull(),
            'straight_truck' => $this->boolean()->notNull(),
            'tractor_semi_trailer' => $this->boolean()->notNull(),
            'tractor_two_trailer' => $this->boolean()->notNull(),
            'tractor_three_trailer' => $this->boolean()->notNull(),
            'motorcoach_eight' => $this->boolean()->notNull(),
            'motorcoach_fifteen' => $this->boolean()->notNull(),
            'other' => $this->string()->null(),
            'states' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'driving_experience',
            'driver_id'
        );
        $this->addForeignKey(
            'fk7-driver_id',
            'driving_experience',
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
            'fk7-driver_id',
            'driving_experience'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'driving_experience'
        );
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
