<?php

use yii\db\Migration;

/**
 * Class m180329_105704_education
 */
class m180329_105704_education extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('education', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'highest_school' => $this->tinyInteger()->null(),
            'high_school' => $this->tinyInteger()->null(),
            'college' => $this->tinyInteger()->null(),
            'last_school' => $this->string()->null(),
            'last_school_state' => $this->string()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'education',
            'driver_id'
        );
        $this->addForeignKey(
            'fk17-driver_id',
            'education',
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
            'fk17-driver_id',
            'education'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'education'
        );
        $this->dropTable('education');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_105704_education cannot be reverted.\n";

        return false;
    }
    */
}
