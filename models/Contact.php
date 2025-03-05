<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property string $id
 * @property string|null $contact_info
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $github
 * @property string|null $whatsapp
 * @property string|null $twitter
 */
class Contact extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact_info', 'address', 'email', 'phone', 'facebook', 'instagram', 'github', 'whatsapp', 'twitter'], 'default', 'value' => null],
            [['id'], 'required'],
            [['id', 'contact_info', 'address', 'email', 'phone', 'facebook', 'instagram', 'github', 'whatsapp', 'twitter'], 'string', 'max' => 255],
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
            'contact_info' => 'Contact Info',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'github' => 'Github',
            'whatsapp' => 'Whatsapp',
            'twitter' => 'Twitter',
        ];
    }

}
