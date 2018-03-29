<?php

use yii\db\Migration;

/**
 * Class m180329_103617_experience_qualification
 */
class m180329_103617_experience_qualification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('experience_qualification', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'states' => $this->string()->null(),
            'other_experience' => $this->string()->null(),
            'courses_training' => $this->string()->null(),
            'special_equipment' => $this->string()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'experience_qualification',
            'driver_id'
        );
        $this->addForeignKey(
            'fk16-driver_id',
            'experience_qualification',
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
            'fk16-driver_id',
            'experience_qualification'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'experience_qualification'
        );
        $this->dropTable('experience_qualification');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180329_103617_experience_qualification cannot be reverted.\n";

        return false;
    }
    */
}
