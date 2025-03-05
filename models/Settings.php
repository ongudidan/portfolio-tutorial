<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string $id
 * @property string|null $site_name
 * @property string|null $site_description
 * @property string|null $logo
 * @property string|null $favicon
 * @property string|null $meta_title
 * @property string|null $meta_tags
 * @property string|null $meta_description
 */
class Settings extends \yii\db\ActiveRecord
{

    public $logoFile;
    public $faviconFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_name', 'site_description', 'logo', 'favicon', 'meta_title', 'meta_tags', 'meta_description'], 'default', 'value' => null],
            [['id'], 'required'],
            [['site_description'], 'string'],
            [['id', 'site_name', 'logo', 'favicon', 'meta_title', 'meta_tags', 'meta_description'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['logoFile', 'faviconFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, ico'],    
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'site_description' => 'Site Description',
            'logo' => 'Logo',
            'favicon' => 'Favicon',
            'meta_title' => 'Meta Title',
            'meta_tags' => 'Meta Tags',
            'meta_description' => 'Meta Description',
        ];
    }

}
