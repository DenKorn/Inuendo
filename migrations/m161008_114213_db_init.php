<?php

use yii\db\Migration;

class m161008_114213_db_init extends Migration
{
    public function up()
    {

        $this->createTable('users', [
            'id' => 'INT NOT NULL',
            'login' => 'VARCHAR(45) NOT NULL',
            'password' => 'VARCHAR(45) NULL',
            'last_visit' => 'DATETIME NULL DEFAULT NOW()',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('advertisements', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'owner_id' => 'INT UNSIGNED NOT NULL',
            'creation_datetime' => 'DATETIME NULL DEFAULT NOW()',
            'language' => 'VARCHAR(2) NOT NULL DEFAULT \'en\'',
            'likes' => 'INT UNSIGNED NULL DEFAULT 0',
            'dislikes' => 'INT UNSIGNED NULL DEFAULT 0',
            'status_code' => 'INT UNSIGNED NOT NULL DEFAULT 0',
            'views_count' => 'INT UNSIGNED NULL DEFAULT 0',
            'target_reference' => 'VARCHAR(400) NULL',
            'configuration' => 'MEDIUMTEXT NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('ignore_list', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'user_id' => 'INT UNSIGNED NOT NULL',
            'block_period' => 'INT UNSIGNED NULL DEFAULT 7 COMMENT \'Block period in days. \"-1\" mean infinite users ignoring.\'',
            'reason' => 'VARCHAR(200) NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('ban_list', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'user_id' => 'INT UNSIGNED NOT NULL',
            'ban_period' => 'INT UNSIGNED NULL DEFAULT 7',
            'reason' => 'VARCHAR(200) NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('advert_moder_turn', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'advert_id' => 'INT UNSIGNED NOT NULL',
            'moder_type' => 'INT NOT NULL DEFAULT 0',
            'created' => 'DATETIME NOT NULL DEFAULT NOW()',
            'comment' => 'VARCHAR(300) NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('internet_platforms', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'name' => 'VARCHAR(100) NOT NULL',
            'siteURL' => 'MEDIUMTEXT BINARY NULL',
            'configuration' => 'LONGTEXT NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('paying_plans', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'type' => 'VARCHAR(45) NOT NULL',
            'creation_time' => 'DATETIME NOT NULL DEFAULT NOW()',
            'expiration_time' => 'DATETIME NOT NULL',
            'cost' => 'INT UNSIGNED NOT NULL DEFAULT 0',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('support_dialogs', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'sender_id' => 'INT UNSIGNED NOT NULL',
            'recepient_id' => 'INT UNSIGNED NOT NULL',
            'send_time' => 'DATETIME NULL DEFAULT NOW()',
            'message' => 'MEDIUMTEXT NOT NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('advert_rents', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
            'advert_id' => 'INT UNSIGNED NOT NULL',
            'platform_id' => 'INT UNSIGNED NOT NULL',
            'pay_plan_id' => 'INT UNSIGNED NOT NULL',
            'sum' => 'INT NOT NULL DEFAULT 0',
            'configuration' => 'LONGTEXT NULL',
            'PRIMARY KEY (`id`)'
        ]);

        $this->createTable('source_message', [
            'id' => 'INT(11) AUTO_INCREMENT',
            'category' => 'VARCHAR(32)',
            'message' => 'TEXT',
            'PRIMARY KEY (id)',
        ]);

        $this->createTable('message', [
            'id' => 'INT(11)',
            'language' => 'VARCHAR(16)',
            'translation' => 'TEXT',
            'PRIMARY KEY (id,language)',
        ]);

        $this->createTable('session', [
            'id' => 'CHAR(40) NOT NULL PRIMARY KEY',
            'expire' => 'INTEGER',
            'data' => 'BLOB'
        ]);

        //Foreign keys
        $this->addForeignKey('fk_message_source_message', 'message', 'id', 'source_message', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_ignore_list_users', 'ignore_list', 'user_id', 'users', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_ban_list_users', 'ban_list', 'user_id', 'users', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_support_dialogs_users_sender', 'support_dialogs', 'sender_id', 'users', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_support_dialogs_users_recepient', 'support_dialogs', 'recepient_id', 'users', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_advertisements_users', 'advertisements', 'owner_id', 'users', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_advert_moder_turn_advertisements', 'advert_moder_turn', 'advert_id', 'advertisements', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_advert_rents_advertisements', 'advert_rents', 'advert_id', 'advertisem', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_advert_rents_internet_platforms', 'advert_rents', 'platform_id', 'internet_platforms', 'id','CASCADE','RESTRICT');
        $this->addForeignKey('fk_advert_rents_paying_plans', 'advert_rents', 'pay_plan_id', 'paying_plans', 'id','CASCADE','RESTRICT');


    }

    public function down()
    {
        $this->dropTable('source_message');
        $this->dropTable('message');
        $this->dropTable('session');
        $this->dropTable('users');
        $this->dropTable('advertisements');
        $this->dropTable('ignore_list');
        $this->dropTable('ban_list');
        $this->dropTable('advert_moder_turn');
        $this->dropTable('internet_platforms');
        $this->dropTable('paying_plans');
        $this->dropTable('support_dialogs');
        $this->dropTable('advert_rents');

        return true;
    }
    
}
