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
        $this->createTable('curso', [
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull(),
            'ch_total'=>$this->integer(),
            'q_periodos'=>$this->smallInteger(),
            'sigla'=>$this->string(10)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('curso');
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
