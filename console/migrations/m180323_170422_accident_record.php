<?php

use yii\db\Migration;

/**
 * Class m180323_170422_accident_record
 */
class m180323_170422_accident_record extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('accident_record', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'date' => $this->dateTime()->null(),
            'accident_nature' => $this->string()->null(),
            'fatalities' => $this->string()->null(),
            'injuries' => $this->string()->null(),
            'hazardous_material' => $this->string()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'accident_record',
            'driver_id'
        );
        $this->addForeignKey(
            'fk3-driver_id',
            'accident_record',
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
            'fk3-driver_id',
            'accident_record'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'accident_record'
        );
        $this->dropTable('accident_record');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_170422_accident_record cannot be reverted.\n";

        return false;
    }
    */
}
