<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $ID
 * @property string $SEMESTRE_ANO_INICIO
 * @property int $MATRIZ_ID
 * @property int $USUARIO_ID
 * @property string|null $DATA_REGISTRO
 *
 * @property Detalheoferta[] $detalheofertas
 * @property Usuario $uSUARIO
 * @property Matriz $mATRIZ
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
            [['SEMESTRE_ANO_INICIO', 'MATRIZ_ID', 'USUARIO_ID'], 'required'],
            [['MATRIZ_ID', 'USUARIO_ID'], 'integer'],
            [['DATA_REGISTRO'], 'safe'],
            [['SEMESTRE_ANO_INICIO'], 'string', 'max' => 6],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USUARIO_ID' => 'ID']],
            [['MATRIZ_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Matriz::className(), 'targetAttribute' => ['MATRIZ_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SEMESTRE_ANO_INICIO' => 'Semestre Ano Inicio',
            'MATRIZ_ID' => 'Matriz ID',
            'USUARIO_ID' => 'Usuario ID',
            'DATA_REGISTRO' => 'Data Registro',
        ];
    }

    /**
     * Gets query for [[Detalheofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalheofertas()
    {
        return $this->hasMany(Detalheoferta::className(), ['OFERTA_ID' => 'ID']);
    }

    /**
     * Gets query for [[USUARIO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['ID' => 'USUARIO_ID']);
    }

    /**
     * Gets query for [[MATRIZ]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMATRIZ()
    {
        return $this->hasOne(Matriz::className(), ['ID' => 'MATRIZ_ID']);
    }
}
