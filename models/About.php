<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property string $id
 * @property string|null $description
 * @property string|null $title
 * @property string|null $name
 * @property string|null $email
 * @property string|null $address
 * @property string|null $skill
 * @property string|null $age
 * @property string|null $freelance_status
 * @property string|null $experience
 * @property string|null $language
 * @property string|null $years_of_experience
 * @property string|null $happy_clients
 * @property string|null $projects
 * @property string|null $awards
 * @property string|null $cv_link
 * @property string|null $phone
 * @property string|null $image
 */
class About extends \yii\db\ActiveRecord
{

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'title', 'name', 'email', 'address', 'skill', 'age', 'freelance_status', 'experience', 'language', 'years_of_experience', 'happy_clients', 'projects', 'awards', 'cv_link', 'phone', 'image'], 'default', 'value' => null],
            [['id'], 'required'],
            [['description', 'title'], 'string'],
            [['id', 'name', 'email', 'address', 'skill', 'age', 'freelance_status', 'experience', 'language', 'years_of_experience', 'happy_clients', 'projects', 'awards', 'cv_link', 'phone', 'image'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'title' => 'Title',
            'name' => 'Name',
            'email' => 'Email',
            'address' => 'Address',
            'skill' => 'Skill',
            'age' => 'Age',
            'freelance_status' => 'Freelance Status',
            'experience' => 'Experience',
            'language' => 'Language',
            'years_of_experience' => 'Years Of Experience',
            'happy_clients' => 'Happy Clients',
            'projects' => 'Projects',
            'awards' => 'Awards',
            'cv_link' => 'Cv Link',
            'phone' => 'Phone',
            'image' => 'Image',
        ];
    }

}
