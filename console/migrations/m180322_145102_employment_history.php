<?php

use yii\db\Migration;

/**
 * Class m180322_145102_employment_history
 */
class m180322_145102_employment_history extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employment_history', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'state' => $this->string()->notNull(),
            'zip' => $this->integer()->notNull(),
            'contact_person' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'date' => $this->string()->notNull(),
            'position_held' => $this->string()->notNull(),
            'salary' => $this->string()->notNull(),
            'reason_for_leaving' => $this->string()->notNull(),
            'fmcr' => $this->string()->notNull(),
            'safety' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'employment_history',
            'driver_id'
        );
        $this->addForeignKey(
            'fk2-driver_id',
            'employment_history',
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
            'fk2-driver_id',
            'employment_history'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'employment_history'
        );
        $this->dropTable('employment_history');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180322_145102_employment_history cannot be reverted.\n";

        return false;
    }
    */
}
