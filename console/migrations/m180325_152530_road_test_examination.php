<?php

use yii\db\Migration;

/**
 * Class m180325_152530_road_test_examination
 */
class m180325_152530_road_test_examination extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('road_test_examination', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'pre_trip_inspect' => $this->string()->null(),
            'combination_units' => $this->string()->null(),
            'placing_equipment' => $this->string()->null(),
            'energency_equipment' => $this->string()->null(),
            'operating_venchile' => $this->string()->null(),
            'turning_venchile' => $this->string()->null(),
            'breaking_venchile' => $this->string()->null(),
            'backing_parking' => $this->string()->null(),
            'other' => $this->string()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'road_test_examination',
            'driver_id'
        );
        $this->addForeignKey(
            'fk9-driver_id',
            'road_test_examination',
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
            'fk9-driver_id',
            'road_test_examination'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'road_test_examination'
        );
        $this->dropTable('road_test_examination');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180325_152530_road_test_examination cannot be reverted.\n";

        return false;
    }
    */
}
