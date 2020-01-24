<?php

namespace Fuel\Migrations;

class Create_report
{
	public function up()
	{
		\DBUtil::create_table('report', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'slug' => array('constraint' => 255, 'type' => 'varchar'),
			'type' => array('constraint' => 1, 'type' => 'char'),
			//'period_id' => array('constraint' => 11, 'type' => 'int'),
			'activated' => array('type' => 'tinyint'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('report');
	}
}