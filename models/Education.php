<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property string $id
 * @property string|null $description
 * @property string|null $title
 * @property string|null $year
 * @property string|null $status
 */
class Education extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'title', 'year', 'status'], 'default', 'value' => null],
            [['id'], 'required'],
            [['description', 'title'], 'string'],
            [['id', 'year', 'status'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'title' => 'Title',
            'year' => 'Year',
            'status' => 'Status',
        ];
    }

}
