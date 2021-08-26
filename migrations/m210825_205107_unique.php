<?php

use yii\db\Migration;

/**
 * Class m210825_205107_unique
 */
class m210825_205107_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->alterColumn('usuario', 'LOGIN', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('usuario', 'LOGIN', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210825_205107_unique cannot be reverted.\n";

        return false;
    }
    */
}
