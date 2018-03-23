<?php

use yii\db\Migration;

/**
 * Class m180323_171512_licenses_custom
 */
class m180323_171512_licenses_custom extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('licenses_custom', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'denied_license' => $this->boolean()->notNull(),
            'suspended_license' => $this->boolean()->notNull(),
            'answer' => $this->text()->null(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'licenses_custom',
            'driver_id'
        );
        $this->addForeignKey(
            'fk6-driver_id',
            'licenses_custom',
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
            'fk6-driver_id',
            'licenses_custom'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'licenses_custom'
        );
        $this->dropTable('licenses_custom');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_171512_licenses_custom cannot be reverted.\n";

        return false;
    }
    */
}
