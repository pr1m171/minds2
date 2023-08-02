<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resConceptual".
 *
 * @property int $id
 * @property string $fecha
 * @property string $hora
 * @property string $idModulo
 * @property string $idUsuario
 * @property string $resultado
 */
class ResConceptual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resConceptual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'idModulo', 'idUsuario', 'resultado'], 'required'],
            [['fecha', 'hora', 'idModulo', 'idUsuario', 'resultado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fecha' => Yii::t('app', 'Fecha'),
            'hora' => Yii::t('app', 'Hora'),
            'idModulo' => Yii::t('app', 'Id Modulo'),
            'idUsuario' => Yii::t('app', 'Id Usuario'),
            'resultado' => Yii::t('app', 'Resultado'),
        ];
    }
}
