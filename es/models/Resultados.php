<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultados".
 *
 * @property int $id
 * @property string $fecha
 * @property string $hora
 * @property string $b1
 * @property string $b2
 * @property string $b3
 * @property string $b4
 * @property string $b5
 * @property string $b6
 * @property string $b7
 * @property string $b8
 * @property string $tl
 * @property string $tt
 * @property string $idSuscripcion
 * @property string $idUsuario
 * @property string $idModulo
 */
class Resultados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resultados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt', 'idUsuario', 'idModulo'], 'required'],
            [['fecha', 'hora', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt', 'idUsuario', 'idModulo'], 'string', 'max' => 255],
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
            'b1' => Yii::t('app', 'B1'),
            'b2' => Yii::t('app', 'B2'),
            'b3' => Yii::t('app', 'B3'),
            'b4' => Yii::t('app', 'B4'),
            'b5' => Yii::t('app', 'B5'),
            'b6' => Yii::t('app', 'B6'),
            'b7' => Yii::t('app', 'B7'),
            'b8' => Yii::t('app', 'B8'),
            'tl' => Yii::t('app', 'TL'),
            'tt' => Yii::t('app', 'TT'),
            'idUsuario' => Yii::t('app', 'Id Usuario'),
            'idModulo' => Yii::t('app', 'Módulo'),
        ];
    }
}
