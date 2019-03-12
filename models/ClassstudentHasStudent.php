<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classstudent_has_student".
 *
 * @property int $classstudent_cStuId
 * @property int $classstudent_subject_cId
 * @property string $student_stuId
 *
 * @property Classstudent $classstudentCStu
 * @property Student $studentStu
 */
class ClassstudentHasStudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classstudent_has_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classstudent_cStuId', 'classstudent_subject_cId', 'student_stuId'], 'required'],
            [['classstudent_cStuId', 'classstudent_subject_cId'], 'integer'],
            [['student_stuId'], 'string', 'max' => 13],
            [['classstudent_cStuId', 'classstudent_subject_cId', 'student_stuId'], 'unique', 'targetAttribute' => ['classstudent_cStuId', 'classstudent_subject_cId', 'student_stuId']],
            [['classstudent_cStuId', 'classstudent_subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Classstudent::className(), 'targetAttribute' => ['classstudent_cStuId' => 'cstuid', 'classstudent_subject_cId' => 'subject_cId']],
            [['student_stuId'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_stuId' => 'stuid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classstudent_cStuId' => 'Classstudent C Stu ID',
            'classstudent_subject_cId' => 'Classstudent Subject C ID',
            'student_stuId' => 'Student Stu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassstudentCStu()
    {
        return $this->hasOne(Classstudent::className(), ['cstuid' => 'classstudent_cStuId', 'subject_cId' => 'classstudent_subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStu()
    {
        return $this->hasOne(Student::className(), ['stuid' => 'student_stuId']);
    }
}
