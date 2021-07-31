<?php

use yii\db\Migration;

/**
 * Class m210731_113058_DetalheOferta
 */
class m210731_113058_DetalheOferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #DETALHEOFERTA(ID, ANOSEMESTRE, DISCIPLINA_FK, OFERTA_FK)
        $this->createTable('DETALHEOFERTA', [
            'ID'=>$this->primaryKey(),
            'SEMESTRE_ANO'=>$this->string(6)->notNull(),
            'DISCIPLINA_ID'=>$this->integer(),
            'OFERTA_ID'=>$this->integer()
        ]);
        $this->addForeignKey('disciplina_d_fk', 'DETALHEOFERTA', 'DISCIPLINA_ID', 'DISCIPLINA', 'ID', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('oferta_d_fk', 'DETALHEOFERTA', 'OFERTA_ID', 'OFERTA', 'ID', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('oferta_d_fk', 'DETALHEOFERTA');
        $this->dropForeignKey('disciplina_d_fk', 'DETALHEOFERTA');
        $this->dropTable('DETALHEOFERTA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113058_DetalheOferta cannot be reverted.\n";

        return false;
    }
    */
}
