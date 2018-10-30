<?php

use yii\db\Migration;

/**
 * Class m181018_120724_product
 */
class m181018_120724_product extends Migration
{    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->string(255)->notNull(),
            'category' => $this->string(255)->notNull(),
            'price' => $this->integer(20)->notNull(),
            'path' => $this->string(255)->notNull(),
  
        ], $tableOptions);
    }

    public function down()
    {
        echo "m181009_081312_create_table cannot be reverted.\n";
$this->dropTable('{{product}}');
       
    }
}
