<?php

use yii\db\Migration;

/**
 * Class m180325_182549_alcohol_drugs
 */
class m180325_182549_alcohol_drugs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('alcohol_drugs', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'positive' => $this->boolean()->notNull(),
            'proof' => $this->boolean()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'alcohol_drugs',
            'driver_id'
        );
        $this->addForeignKey(
            'fk13-driver_id',
            'alcohol_drugs',
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
            'fk13-driver_id',
            'alcohol_drugs'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'alcohol_drugs'
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
        echo "m180325_182549_alcohol_drugs cannot be reverted.\n";

        return false;
    }
    */
}
