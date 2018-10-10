<?php

use yii\db\Migration;

/**
 * Class m180318_193127_driver
 */
class m180318_195348_driver extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('driver', [
            'id' => $this->primaryKey(),
            'position_id' => $this->integer()->notNull(),
            'policy_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'mi_name' => $this->string()->notNull(),
            'lname' => $this->string()->notNull(),
            'ssn' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'legal_right' => $this->string()->notNull(),
            'birth_date' => $this->dateTime()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver-position_id',
            'driver',
            'position_id'
        );
        $this->addForeignKey(
            'fk-driver-position_id',
            'driver',
            'position_id',
            'position',
            'id',
            'CASCADE'
        );
        // creates index for column `policy id`
        $this->createIndex(
            'idx-driver-policy_id',
            'driver',
            'policy_id'
        );
        $this->addForeignKey(
            'fk-driver-policy_id',
            'driver',
            'policy_id',
            'policy',
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
            'fk-driver-position_id',
            'driver'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver-position_id',
            'driver'
        );
        $this->dropForeignKey(
            'fk-driver-policy_id',
            'driver'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver-policy_id',
            'driver'
        );
        $this->dropTable('driver');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180318_193127_driver cannot be reverted.\n";

        return false;
    }
    */
}
