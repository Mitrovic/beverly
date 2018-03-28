<?php

use yii\db\Migration;

/**
 * Class m180324_193847_driving_experience_answers
 */
class m180324_193847_driving_experience_answers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('driving_experience_answers', [
            'id' => $this->primaryKey(),
            'driving_experience_id' => $this->integer()->notNull(),
            'type' => $this->string()->null(),
            'dates' => $this->string()->null(),
            'miles' => $this->string()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driving_experience_id',
            'driving_experience_answers',
            'driving_experience_id'
        );
        $this->addForeignKey(
            'fk-driving_experience_id',
            'driving_experience_answers',
            'driving_experience_id',
            'driving_experience',
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
            'fk-driving_experience_id',
            'driving_experience_answers'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driving_experience_id',
            'driving_experience_answers'
        );
        $this->dropTable('driving_experience_answers');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180324_193847_driving_experience_answers cannot be reverted.\n";

        return false;
    }
    */
}
