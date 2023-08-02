<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property int $id
 * @property string $idsuscripcion
 * @property string $idusuario
 * @property string $fecha
 * @property string $hora
 * @property string $estado
 * @property string $notas
 */
class ABMVentas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsuscripcion', 'idusuario', 'fecha', 'hora', 'estado'], 'required'],
            [['notas'], 'string'],
            [['idsuscripcion', 'idusuario', 'fecha', 'hora', 'estado'], 'string', 'max' => 255],
        ];
    }

    public function getRelation_table()
    {
        return $this->hasOne(ABMUsuarios::className(), ['id' => 'idusuario']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'idsuscripcion' => Yii::t('app', 'Suscripción'),
            'idusuario' => Yii::t('app', 'Usuario'),
            'fecha' => Yii::t('app', 'Fecha'),
            'hora' => Yii::t('app', 'Hora'),
            'estado' => Yii::t('app', 'Estado'),
            'notas' => Yii::t('app', 'Notas'),
        ];
    }
}
