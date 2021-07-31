<?php

use yii\db\Migration;

/**
 * Class m210731_113042_Disciplina
 */
class m210731_113042_Disciplina extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#DISCIPLINA (ID, NOME, CH, PERIODO, NUCLEO_FK, MATRIZ_FK)
        $this->createTable('DISCIPLINA', [
            'ID'=>$this->primaryKey(),
            'NOME'=>$this->string()->notNull(),
            'CH'=>$this->smallInteger()->notNull(),
            'PERIODO'=>$this->smallInteger()->notNull(),
            'NUCLEO_ID'=>$this->integer(),
            'MATRIZ_ID'=>$this->integer()
        ]);
        $this->addForeignKey('nucleo_d_fk', 'DISCIPLINA', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
        $this->addForeignKey('matriz_d_fk', 'DISCIPLINA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_d_fk', 'DISCIPLINA');
        $this->dropForeignKey('matriz_d_fk', 'DISCIPLINA');
        $this->dropTable('DISCIPLINA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113042_Disciplina cannot be reverted.\n";

        return false;
    }
    */
}
