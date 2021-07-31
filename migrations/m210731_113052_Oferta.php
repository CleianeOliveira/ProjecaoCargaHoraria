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
        $this->createTable('OFERTA', [
            'ID'=>$this->primaryKey(),
            'SEMESTRE_ANO_INICIO'=>$this->string(6)->notNull(),
            'MATRIZ_ID'=>$this->integer()->notNull(),
            'USUARIO_ID'=>$this->integer()->notNull(),
            'DATA_REGISTRO'=>$this->date()
        ]);
        $this->addForeignKey('matriz_o_fk', 'OFERTA', 'MATRIZ_ID', 'MATRIZ', 'ID', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('USUARIO_O_FK', 'OFERTA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('matriz_o_fk', 'OFERTA');
        $this->dropForeignKey('USUARIO_O_FK', 'OFERTA');
        $this->dropTable('OFERTA');
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
