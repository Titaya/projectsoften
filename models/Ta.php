<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ta".
 *
 * @property string $taId
 * @property string $taName
 *
 * @property Classta[] $classtas
 * @property TeacherHasTa[] $teacherHasTas
 * @property Teacher[] $teacherTs
 */
class Ta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taId'], 'required'],
            [['taId'], 'string', 'max' => 13],
            [['taName'], 'string', 'max' => 45],
            [['taId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'taId' => 'Ta ID',
            'taName' => 'Ta Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasstas()
    {
        return $this->hasMany(Classta::className(), ['ta_taId' => 'taid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasTas()
    {
        return $this->hasMany(TeacherHasTa::className(), ['ta_taId' => 'taid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherTs()
    {
        return $this->hasMany(Teacher::className(), ['tid' => 'teacher_tId'])->viaTable('teacher_has_ta', ['ta_taId' => 'taid']);
    }
}
