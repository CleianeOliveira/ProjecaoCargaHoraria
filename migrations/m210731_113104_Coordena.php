<?php

use yii\db\Migration;

/**
 * Class m210731_113104_Coordena
 */
class m210731_113104_Coordena extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #COORDENA (USUARIO_FK, CURSO_FK, INICIO, FIM)
        $this->createTable('COORDENA', [
            'USUARIO_ID'=>$this->integer(),
            'CURSO_ID'=>$this->integer(),
            'INICIO'=>$this->date(),
            'FIM'=>$this->date()
        ]);
        $this->addPrimaryKey('pk_coordena', 'COORDENA', ['USUARIO_ID','CURSO_ID']);
        $this->addForeignKey('usuario_c_fk', 'COORDENA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('curso_c_fk', 'COORDENA', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_c_fk', 'COORDENA');
        $this->dropForeignKey('curso_c_fk', 'COORDENA');
        $this->dropTable('COORDENA');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_113104_Coordena cannot be reverted.\n";

        return false;
    }
    */
}
