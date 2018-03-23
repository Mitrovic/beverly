<?php

use yii\db\Migration;

/**
 * Class m180323_170916_traffic_convictions
 */
class m180323_170916_traffic_convictions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('traffic_convictions', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'location' => $this->string()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'charge' => $this->string()->notNull(),
            'penalty' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'traffic_convictions',
            'driver_id'
        );
        $this->addForeignKey(
            'fk4-driver_id',
            'traffic_convictions',
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
            'fk4-driver_id',
            'traffic_convictions'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'traffic_convictions'
        );
        $this->dropTable('traffic_convictions');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_170916_traffic_convictions cannot be reverted.\n";

        return false;
    }
    */
}
