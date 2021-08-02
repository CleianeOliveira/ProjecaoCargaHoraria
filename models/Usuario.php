<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $ID
 * @property string|null $LOGIN
 * @property string|null $SENHA
 * @property string $NOME
 * @property int|null $NUCLEO_ID
 *
 * @property Coordena[] $coordenas
 * @property Curso[] $cURSOs
 * @property Oferta[] $ofertas
 * @property Nucleo $nUCLEO
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required'],
            [['NUCLEO_ID'], 'integer'],
            [['LOGIN', 'SENHA', 'NOME'], 'string', 'max' => 255],
            [['NUCLEO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['NUCLEO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'LOGIN' => 'Login',
            'SENHA' => 'Senha',
            'NOME' => 'Nome',
            'NUCLEO_ID' => 'Nucleo ID',
        ];
    }

    /**
     * Gets query for [[Coordenas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoordenas()
    {
        return $this->hasMany(Coordena::className(), ['USUARIO_ID' => 'ID']);
    }

    /**
     * Gets query for [[CURSOs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCURSOs()
    {
        return $this->hasMany(Curso::className(), ['ID' => 'CURSO_ID'])->viaTable('coordena', ['USUARIO_ID' => 'ID']);
    }

    /**
     * Gets query for [[Ofertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOfertas()
    {
        return $this->hasMany(Oferta::className(), ['USUARIO_ID' => 'ID']);
    }

    /**
     * Gets query for [[NUCLEO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNUCLEO()
    {
        return $this->hasOne(Nucleo::className(), ['ID' => 'NUCLEO_ID']);
    }
}
