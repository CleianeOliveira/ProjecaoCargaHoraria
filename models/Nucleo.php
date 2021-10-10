<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nucleo".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Disciplina[] $disciplinas
 * @property Usuario[] $usuarios
 */
class Nucleo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nucleo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 255],
            [['nome'],'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Disciplinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplinas()
    {
        return $this->hasMany(Disciplina::className(), ['nucleo_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['nucleo_id' => 'id']);
    }
}
