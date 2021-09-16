<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $id
 * @property string $semestre_ano_inicio
 * @property int $matriz_id
 * @property int $usuario_id
 * @property string|null $data_registro
 *
 * @property Detalheoferta[] $detalheofertas
 * @property usuario $usuario
 * @property matriz $matriz
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semestre_ano_inicio', 'matriz_id', 'usuario_id'], 'required'],
            [['matriz_id', 'usuario_id'], 'integer'],
            [['data_registro'], 'safe'],
            [['semestre_ano_inicio'], 'string', 'max' => 6],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
            [['matriz_id'], 'exist', 'skipOnError' => true, 'targetClass' => matriz::className(), 'targetAttribute' => ['matriz_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'semestre_ano_inicio' => 'Semestre Ano Inicio',
            'matriz_id' => 'matriz id',
            'usuario_id' => 'usuario id',
            'data_registro' => 'Data Registro',
        ];
    }

    /**
     * Gets query for [[Detalheofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalheofertas()
    {
        return $this->hasMany(Detalheoferta::className(), ['oferta_id' => 'id']);
    }

    /**
     * Gets query for [[usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getusuario()
    {
        return $this->hasOne(usuario::className(), ['id' => 'usuario_id']);
    }

    /**
     * Gets query for [[matriz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getmatriz()
    {
        return $this->hasOne(matriz::className(), ['id' => 'matriz_id']);
    }
}
