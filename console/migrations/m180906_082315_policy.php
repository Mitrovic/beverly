<?php

use yii\db\Migration;

/**
 * Class m180906_082315_policy
 */
class m180906_082315_policy extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_signature', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'policy' => $this->boolean()->notNull(),
            'signature' => $this->text()->notNull(),
            'date' => $this->dateTime(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'user_signature',
            'driver_id'
        );
        $this->addForeignKey(
            'fk18-driver_id',
            'user_signature',
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
            'fk18-driver_id',
            'user_signature'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'user_signature'
        );
        $this->dropTable('alcohol_drugs');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180906_082315_policy cannot be reverted.\n";

        return false;
    }
    */
}
