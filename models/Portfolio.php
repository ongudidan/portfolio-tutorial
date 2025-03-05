<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property string $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $url
 * @property string|null $status
 * @property string|null $image
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public $imageFile;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'url', 'status', 'image'], 'default', 'value' => null],
            [['id'], 'required'],
            [['description'], 'string'],
            [['id', 'title', 'url', 'status', 'image'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'url' => 'Url',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }

}
