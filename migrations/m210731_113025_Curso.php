<?php

use yii\db\Migration;

/**
 * Class m210731_113025_Curso
 */
class m210731_113025_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#CURSO (ID, NOME, CH_TOTAL, Q_PERIODOS, SIGLA)
        $this->createTable('CURSO', [
            'ID'=>$this->primaryKey(),
            'NOME'=>$this->string()->notNull(),
            'CH_TOTAL'=>$this->integer(),
            'Q_PERIODOS'=>$this->smallInteger(),
            'SIGLA'=>$this->string(10)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CURSO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113025_Curso cannot be reverted.\n";

        return false;
    }
    */
}
