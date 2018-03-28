<?php

use yii\db\Migration;

/**
 * Handles adding city to table `address`.
 */
class m180328_132158_add_city_column_to_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('address', 'city', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('address', 'city');
    }
}
