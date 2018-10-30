<?php

use yii\db\Migration;

/**
 * Class m181009_081312_create_table
 */
class m181009_081312_create_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    /**
     * {@inheritdoc}
     */
    // public function safeDown()
    // {
    //     echo "m181009_081312_create_table cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{blurb}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255)->notNull(),
            'content' => $this->string(255)->notNull(),
            'link' => $this->string(255)->notNull(),
           
        ], $tableOptions);
    }

    public function down()
    {
        echo "m181009_081312_create_table cannot be reverted.\n";
$this->dropTable('{{blurb}}');
       
    }
    
}
