<?php

use yii\db\Migration;

/**
 * Class m180325_163504_non_violation_certification
 */
class m180325_163504_non_violation_certification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('non_violation_certification', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'motor_name' => $this->string()->notNull(),
            'motor_address' => $this->string()->notNull(),
            'motor_state' => $this->string()->notNull(),
            'revied_by' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'non_violation_certification',
            'driver_id'
        );
        $this->addForeignKey(
            'fk12-driver_id',
            'non_violation_certification',
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
            'fk12-driver_id',
            'non_violation_certification'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'non_violation_certification'
        );
        $this->dropTable('non_violation_certification');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180325_163504_non_violation_certification cannot be reverted.\n";

        return false;
    }
    */
}
