<?php

use yii\db\Migration;

/**
 * Class m210731_113052_Oferta
 */
class m210731_113052_Oferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#OFERTA (ID, SEMESTRE_INICIO, MATRIZ_FK, USUARIO_FK, DATA_REGISTRO)
        $this->createTable('oferta', [
            'id'=>$this->primaryKey(),
            'semestre_ano_inicio'=>$this->string(6)->notNull(),
            'matriz_id'=>$this->integer()->notNull(),
            'usuario_id'=>$this->integer()->notNull(),
            'data_registro'=>$this->date()
        ]);
        $this->addForeignKey('matriz_o_fk', 'oferta', 'matriz_id', 'matriz', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('usuario_o_fk', 'oferta', 'usuario_id', 'usuario', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('matriz_o_fk', 'oferta');
        $this->dropForeignKey('usuario_o_fk', 'oferta');
        $this->dropTable('oferta');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113052_Oferta cannot be reverted.\n";

        return false;
    }
    */
}
