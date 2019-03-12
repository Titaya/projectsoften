<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classstudent".
 *
 * @property int $cStuId
 * @property int $subject_cId
 *
 * @property Subject $subjectC
 * @property ClassstudentHasStudent[] $classstudentHasStudents
 * @property Student[] $studentStus
 */
class Classstudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classstudent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_cId'], 'required'],
            [['subject_cId'], 'integer'],
            [['subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_cId' => 'cid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cStuId' => 'C Stu ID',
            'subject_cId' => 'Subject C ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectC()
    {
        return $this->hasOne(Subject::className(), ['cid' => 'subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassstudentHasStudents()
    {
        return $this->hasMany(ClassstudentHasStudent::className(), ['classstudent_cStuId' => 'cstuid', 'classstudent_subject_cId' => 'subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStus()
    {
        return $this->hasMany(Student::className(), ['stuid' => 'student_stuId'])->viaTable('classstudent_has_student', ['classstudent_cStuId' => 'cstuid', 'classstudent_subject_cId' => 'subject_cId']);
    }
}
