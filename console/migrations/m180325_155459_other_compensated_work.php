<?php

use yii\db\Migration;

/**
 * Class m180325_155459_other_compensated_work
 */
class m180325_155459_other_compensated_work extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('other_compensated_work', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'another_employer' => $this->boolean()->notNull(),
            'employed_by_company' => $this->boolean()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'other_compensated_work',
            'driver_id'
        );
        $this->addForeignKey(
            'fk10-driver_id',
            'other_compensated_work',
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
            'fk10-driver_id',
            'other_compensated_work'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'other_compensated_work'
        );
        $this->dropTable('other_compensated_work');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180325_155459_other_compensated_work cannot be reverted.\n";

        return false;
    }
    */
}
