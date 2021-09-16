<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $id
 * @property string $nome
 * @property int|null $ch_total
 * @property int|null $q_periodos
 * @property string|null $sigla
 *
 * @property Coordena[] $coordenas
 * @property Usuario[] $usuarios
 * @property Matriz[] $matrizes
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required','message'=>'Por favor preencha um nome'],
            [['ch_total', 'q_periodos'], 'integer', 'message'=> 'Preencha somente valores numéricos'],
            [['nome'], 'string', 'max' => 255],
            [['sigla'], 'string', 'max' => 10],
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
            'ch_total' => 'Carga Horária Total',
            'q_periodos' => 'Quantidade de Periodos',
            'sigla' => 'Sigla',
        ];
    }

    /**
     * Gets query for [[Coordenas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoordenas()
    {
        return $this->hasMany(Coordena::className(), ['curso_id' => 'id']);
    }

    /**
     * Gets query for [[USUARIOs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('coordena', ['curso_id' => 'id']);
    }

    /**
     * Gets query for [[Matrizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatrizes()
    {
        return $this->hasMany(Matriz::className(), ['curso_id' => 'id']);
    }
}
