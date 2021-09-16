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
        $this->createTable('coordena', [
            'usuario_id'=>$this->integer(),
            'curso_id'=>$this->integer(),
            'inicio'=>$this->date(),
            'fim'=>$this->date()
        ]);
        $this->addPrimaryKey('pk_coordena', 'coordena', ['usuario_id','curso_id']);
        $this->addForeignKey('usuario_c_fk', 'coordena', 'usuario_id', 'usuario', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('curso_c_fk', 'coordena', 'curso_id', 'curso', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_c_fk', 'coordena');
        $this->dropForeignKey('curso_c_fk', 'coordena');
        $this->dropTable('coordena');
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
