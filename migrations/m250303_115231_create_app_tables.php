<?php

use yii\db\Migration;

class m250303_115231_create_app_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create user table
        $this->createTable('{{%user}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'username' => $this->string()->notNull()->unique(),
            'verification_token' => $this->string()->defaultValue(null),
            'auth_key' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        // Create about table
        $this->createTable('{{%about}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'description' => $this->text()->defaultValue(null),
            'title' => $this->text()->defaultValue(null),
            'name' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'address' => $this->string()->defaultValue(null),
            'skill' => $this->string()->defaultValue(null),
            'age' => $this->string()->defaultValue(null),
            'freelance_status' => $this->string()->defaultValue(null),
            'experience' => $this->string()->defaultValue(null),
            'language' => $this->string()->defaultValue(null),
            'years_of_experience' => $this->string()->defaultValue(null),
            'happy_clients' => $this->string()->defaultValue(null),
            'projects' => $this->string()->defaultValue(null),
            'awards' => $this->string()->defaultValue(null),
            'cv_link' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
        ]);

        // Create education table
        $this->createTable('{{%education}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'description' => $this->text()->defaultValue(null),
            'title' => $this->string()->defaultValue(null),
            'year' => $this->string()->defaultValue(null),
            'status' => $this->string()->defaultValue(null),
           
        ]);

        // Create portfolio table
        $this->createTable('{{%portfolio}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'title' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null),
            'url' => $this->string()->defaultValue(null),
            'status' => $this->string()->defaultValue(null),
            'image' => $this->string()->defaultValue(null),
        ]);

        // Create contact table
        $this->createTable('{{%contact}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'contact_info' => $this->string()->defaultValue(null),
            'address' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'facebook' => $this->string()->defaultValue(null),
            'instagram' => $this->string()->defaultValue(null),
            'github' => $this->string()->defaultValue(null),
            'whatsapp' => $this->string()->defaultValue(null),
            'twitter' => $this->string()->defaultValue(null),
        ]);

        // Create settings table
        $this->createTable('{{%settings}}', [
            'id' => $this->string()->notNull()->unique(), // Custom string ID
            'site_name' => $this->string()->defaultValue(null),
            'site_description' => $this->text()->defaultValue(null),
            'logo' => $this->string()->defaultValue(null),
            'favicon' => $this->string()->defaultValue(null),
            'meta_title' => $this->string()->defaultValue(null),
            'meta_tags' => $this->string()->defaultValue(null),
            'meta_description' => $this->string()->defaultValue(null),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%settings}}');
        $this->dropTable('{{%contact}}');
        $this->dropTable('{{%portfolio}}');

        $this->dropTable('{{%education}}');
        $this->dropTable('{{%about}}');
        $this->dropTable('{{%user}}');
    }

    protected function buildFkClause($delete = '', $update = '')
    {
        return implode(' ', ['', $delete, $update]);
    }

}
