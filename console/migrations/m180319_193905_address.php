<?php

use yii\db\Migration;

/**
 * Class m180319_193905_address
 */
class m180319_193905_address extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('address', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'street'=>$this->string()->notNull(),
            'state'=>$this->string()->notNull(),
            'zip'=>$this->string()->notNull(),
            'time'=>$this->string()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'address',
            'driver_id'
        );
        $this->addForeignKey(
            'fk1-driver_id',
            'address',
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
            'fk1-driver_id',
            'address'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'address'
        );
        $this->dropTable('address');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_193905_address cannot be reverted.\n";

        return false;
    }
    */
}
