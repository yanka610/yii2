<?php

use yii\db\Migration;

/**
 * Class m181030_114316_orderproduct
 */
class m181030_114316_orderproduct extends Migration
{ 
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{orderproduct}}', [
            'id' => $this->primaryKey(),
            'idorder' => $this->integer()->notNull(),
            'idproduct' => $this->integer()->notNull(),
           
        ], $tableOptions);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181030_114316_orderproduct cannot be reverted.\n";

        return false;
    }

   
}
