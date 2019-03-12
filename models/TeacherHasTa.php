<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher_has_ta".
 *
 * @property int $teacher_tId
 * @property string $ta_taId
 *
 * @property Ta $taTa
 * @property Teacher $teacherT
 */
class TeacherHasTa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_has_ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_tId', 'ta_taId'], 'required'],
            [['teacher_tId'], 'integer'],
            [['ta_taId'], 'string', 'max' => 13],
            [['teacher_tId', 'ta_taId'], 'unique', 'targetAttribute' => ['teacher_tId', 'ta_taId']],
            [['ta_taId'], 'exist', 'skipOnError' => true, 'targetClass' => Ta::className(), 'targetAttribute' => ['ta_taId' => 'taid']],
            [['teacher_tId'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_tId' => 'tid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_tId' => 'Teacher T ID',
            'ta_taId' => 'Ta Ta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTa()
    {
        return $this->hasOne(Ta::className(), ['taid' => 'ta_taId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherT()
    {
        return $this->hasOne(Teacher::className(), ['tid' => 'teacher_tId']);
    }
}
