<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $tId
 * @property string $tName
 *
 * @property TeacherHasTa[] $teacherHasTas
 * @property Ta[] $taTas
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tId' => 'T ID',
            'tName' => 'T Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasTas()
    {
        return $this->hasMany(TeacherHasTa::className(), ['teacher_tId' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTas()
    {
        return $this->hasMany(Ta::className(), ['taid' => 'ta_taId'])->viaTable('teacher_has_ta', ['teacher_tId' => 'tid']);
    }
}
