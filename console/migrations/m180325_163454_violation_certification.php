<?php

use yii\db\Migration;

/**
 * Class m180325_163454_violation_certification
 */
class m180325_163454_violation_certification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('violation_certification', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'offense' => $this->string()->notNull(),
            'location' => $this->string()->notNull(),
            'type_of_venchile' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'violation_certification',
            'driver_id'
        );
        $this->addForeignKey(
            'fk11-driver_id',
            'violation_certification',
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
            'fk11-driver_id',
            'violation_certification'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'violation_certification'
        );
        $this->dropTable('violation_certification');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180325_163454_violation_certification cannot be reverted.\n";

        return false;
    }
    */
}
