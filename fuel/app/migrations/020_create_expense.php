<?php

namespace Fuel\Migrations;

class Create_expense
{
	public function up()
	{
		\DBUtil::create_table('expense', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'reference' => array('constraint' => 11, 'type' => 'int'),
			'date' => array('type' => 'date'),
			'payee' => array('constraint' => 140, 'type' => 'varchar'),
			'gl_account_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'amount' => array('type' => 'decimal'),
			'tax_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'bank_account_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'description' => array('constraint' => 255, 'type' => 'varchar'),
			'fdesk_user' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('type' => 'datetime'),
			'updated_at' => array('type' => 'datetime'),
			'deleted_at' => array('type' => 'datetime', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('expense');
	}
}
