<?php

use yii\db\Migration;

/**
 * Class m180324_202418_certificate_road_test
 */
class m180324_202418_certificate_road_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('certificate_road_test', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'license_number' => $this->string()->notNull(),
            'state' => $this->string()->notNull(),
            'power_unit' => $this->string()->notNull(),
            'trailer_type' => $this->string()->notNull(),
            'bus' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'certificate_road_test',
            'driver_id'
        );
        $this->addForeignKey(
            'fk8-driver_id',
            'certificate_road_test',
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
            'fk8-driver_id',
            'certificate_road_test'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'certificate_road_test'
        );
        $this->dropTable('certificate_road_test');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180324_202418_certificate_road_test cannot be reverted.\n";

        return false;
    }
    */
}
