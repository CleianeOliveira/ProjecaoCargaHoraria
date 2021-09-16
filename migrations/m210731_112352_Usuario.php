<?php

use yii\db\Migration;

/**
 * Class m210731_112352_Usuario
 */
class m210731_112352_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#USUARIO (ID, LOGIN, SENHA, NOME, NUCLEO_FK)
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->unique(),
            'senha'=>$this->string(),
            'nome'=>$this->string()->notNull(),
            'nucleo_id'=>$this->integer()
        ]);
        $this->addForeignKey('nucleo_fk', 'usuario', 'nucleo_id', 'nucleo', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('nucleo_fk', 'usuario');
       $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_112352_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
