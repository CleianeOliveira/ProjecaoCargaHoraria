<?php

use yii\db\Migration;

/**
 * Class m210731_110613_Nucleo
 */
class m210731_110613_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #NUCLEO(ID, NOME)
        $this->createTable('NUCLEO', [
            'ID'=>$this->primaryKey(),
            'NOME'=>$this->string()
        ]);

        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('NUCLEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_110613_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
