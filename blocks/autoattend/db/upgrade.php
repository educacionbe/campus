<?php  

function xmldb_block_autoattend_upgrade($oldversion=0) 
{
	global $CFG, $THEME, $DB;

	$dbman = $DB->get_manager();


	// 2013040900
	if ($oldversion < 2013040900) {
		$table = new xmldb_table('autoattend_classes');

		$table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
		$table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
		$table->add_field('creator', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
		$table->add_field('name', XMLDB_TYPE_CHAR, '50', null, XMLDB_NOTNULL, null, null);
		$table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

		$table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
		$table->add_index('courseid', XMLDB_INDEX_NOTUNIQUE, array('courseid'));

		if (!$dbman->table_exists($table)) {
			$dbman->create_table($table);
		}
	}

	// 2013040900
	if ($oldversion < 2013040900) {
		$table = new xmldb_table('autoattend_classifies');
		//
		$table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
		$table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
		$table->add_field('studentid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
		$table->add_field('classid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

		$table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
		$table->add_index('courseid', XMLDB_INDEX_NOTUNIQUE, array('courseid'));
		$table->add_index('studentid', XMLDB_INDEX_NOTUNIQUE, array('studentid'));

		if (!$dbman->table_exists($table)) {
			$dbman->create_table($table);
		}
	}

	// 2013040900
	if ($oldversion < 2013040900) {
		$table = new xmldb_table('autoattend_sessions');
		//
		$index = new xmldb_index('groupid', XMLDB_INDEX_NOTUNIQUE, array('groupid'));
		if ($dbman->index_exists($table, $index)) {
			$dbman->drop_index($table, $index);
		}
		$field = new xmldb_field('groupid');
		if ($dbman->field_exists($table, $field)) {
			$dbman->drop_field($table, $field);
		}
		$field = new xmldb_field('classid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'courseid');
		if (!$dbman->field_exists($table, $field)) {
			$dbman->add_field($table, $field);
		}
	}

	// 2013040900
	if ($oldversion < 2013040900) {
		$table = new xmldb_table('autoattend_settings');
		//
		$index = new xmldb_index('groupid', XMLDB_INDEX_NOTUNIQUE, array('groupid'));
		if ($dbman->index_exists($table, $index)) {
			$dbman->drop_index($table, $index);
		}
		$index = new xmldb_index('status', XMLDB_INDEX_NOTUNIQUE, array('status'));
		if ($dbman->index_exists($table, $index)) {
			$dbman->drop_index($table, $index);
		}
		$field = new xmldb_field('groupid');
		if ($dbman->field_exists($table, $field)) {
			$dbman->drop_field($table, $field);
		}
		$field = new xmldb_field('classid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0', 'courseid');
		if (!$dbman->field_exists($table, $field)) {
			$dbman->add_field($table, $field);
		}
	}

	// 2013040900
	if ($oldversion < 2013040900) {
		$table = new xmldb_table('autoattend_students');
		//
		$index = new xmldb_index('status', XMLDB_INDEX_NOTUNIQUE, array('status'));
		if ($dbman->index_exists($table, $index)) {
			$dbman->drop_index($table, $index);
		}
	}


	// 2013050700
	if ($oldversion < 2013050700) {
		$table = new xmldb_table('autoattend_sessions');
		//
		$index = new xmldb_index('classid', XMLDB_INDEX_NOTUNIQUE, array('classid'));
		$dbman->add_index($table, $index);
	}


	// 2014032700
	if ($oldversion < 2014032700) {
		$table = new xmldb_table('autoattend_sessions');
		//
		$field = new xmldb_field('allowip', XMLDB_TYPE_CHAR, '255', null, null, null, null, 'denysameip');		// 128->255
		$dbman->change_field_precision($table, $field);
	}

	// 2014032700
	if ($oldversion < 2014032700) {
		$table = new xmldb_table('autoattend_students');
		//
		$field = new xmldb_field('ipaddress', XMLDB_TYPE_CHAR, '42', null, XMLDB_NOTNULL, null, null, 'remarks');	// 20->45
		$dbman->change_field_precision($table, $field);
	}


	// 2014051100
	if ($oldversion < 2014051101) {
		// Repair DB
		require_once($CFG->dirroot.'/blocks/autoattend/lib_ex.php');
		autoattend_repairDB();
		//
		$table = new xmldb_table('autoattend_students');
		$index = new xmldb_index('attstudentid', XMLDB_INDEX_UNIQUE, array('attsid', 'studentid'));
		//
		if (!$dbman->index_exists($table, $index)) {
			$dbman->add_index($table, $index);
		}
	}


	// 2014052800
	if ($oldversion < 2014052800) {
		$table = new xmldb_table('autoattend_settings');
		//
		$field = new xmldb_field('acronym', XMLDB_TYPE_CHAR, '10', null, XMLDB_NOTNULL, null, '', 'status');
		if (!$dbman->field_exists($table, $field)) {
			$dbman->add_field($table, $field);
		}
		$field = new xmldb_field('description',  XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, '', 'acronym');
		if (!$dbman->field_exists($table, $field)) {
			$dbman->add_field($table, $field);
		}
	}

	// 2014060201
	if ($oldversion < 2014060201) {
		$table = new xmldb_table('autoattend_settings');
		//
		$field = new xmldb_field('title',  XMLDB_TYPE_CHAR, '24', null, XMLDB_NOTNULL, null, '', 'acronym');
		if (!$dbman->field_exists($table, $field)) {
			$dbman->add_field($table, $field);
		}
	}

	// 2014120700
	if ($oldversion < 2014120700) {
		$table = new xmldb_table('autoattend_settings');
		//
		$field = new xmldb_field('title',  XMLDB_TYPE_CHAR, '24', null, null, null, '', 'acronym');
		$dbman->change_field_precision($table, $field);
		//
		$field = new xmldb_field('description',  XMLDB_TYPE_CHAR, '64', null, null, null, '', 'acronym');
		$dbman->change_field_precision($table, $field);
		//
		$field = new xmldb_field('acronym', XMLDB_TYPE_CHAR, '10', null, null, null, '', 'status');
		$dbman->change_field_precision($table, $field);
	}

	//
	return true;
}

