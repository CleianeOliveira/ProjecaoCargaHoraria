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
        $this->createTable('detalheoferta', [
            'id'=>$this->primaryKey(),
            'semestre_ano'=>$this->string(6)->notNull(),
            'disciplina_id'=>$this->integer(),
            'oferta_id'=>$this->integer()
        ]);
        $this->addForeignKey('disciplina_d_fk', 'detalheoferta', 'disciplina_id', 'disciplina', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('oferta_d_fk', 'detalheoferta', 'oferta_id', 'oferta', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('oferta_d_fk', 'detalheoferta');
        $this->dropForeignKey('disciplina_d_fk', 'detalheoferta');
        $this->dropTable('detalheoferta');
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
