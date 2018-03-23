<?php

use yii\db\Migration;

/**
 * Class m180323_171217_licenses
 */
class m180323_171217_licenses extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('licenses', [
            'id' => $this->primaryKey(),
            'driver_id' => $this->integer()->notNull(),
            'state' => $this->string()->notNull(),
            'license_no' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'expiration_date' => $this->dateTime()->notNull(),
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-driver_id',
            'licenses',
            'driver_id'
        );
        $this->addForeignKey(
            'fk5-driver_id',
            'licenses',
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
            'fk5-driver_id',
            'licenses'
        );
        // drops index for column `author_id`
        $this->dropIndex(
            'idx-driver_id',
            'licenses'
        );
        $this->dropTable('licenses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180323_171217_licenses cannot be reverted.\n";

        return false;
    }
    */
}
