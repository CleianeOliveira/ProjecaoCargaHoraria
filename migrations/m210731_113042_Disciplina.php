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
        $this->createTable('disciplina', [
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull(),
            'ch'=>$this->smallInteger()->notNull(),
            'periodo'=>$this->smallInteger()->notNull(),
            'nucleo_id'=>$this->integer(),
            'matriz_id'=>$this->integer()
        ]);
        $this->addForeignKey('nucleo_d_fk', 'disciplina', 'nucleo_id', 'nucleo', 'id', 'RESTRICT');
        $this->addForeignKey('matriz_d_fk', 'disciplina', 'matriz_id', 'matriz', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_d_fk', 'disciplina');
        $this->dropForeignKey('matriz_d_fk', 'disciplina');
        $this->dropTable('disciplina');
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
