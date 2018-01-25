<?php
  /*
    IPMS Generator
    ==================================================
    Generated: 2018-01-09 10:57:52
  */

  // Database Login
  define("DB_USER", "bpmspace_repl_RO");
  define("DB_PASS", "");
  define("DB_HOST", "localhost");
  define("DB_NAME", "bpmspace_replacer_v1");

  // Structure Configuration Data
  $config_tables_json = '[{"table_name":"replacer","table_alias":"Replacer","is_in_menu":true,"is_read_only":false,"se_active":false,"columns":[{"COLUMN_NAME":"replacer_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"PRI","EXTRA":"auto_increment","column_alias":"ID","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"replacer_pattern","DATA_TYPE":"varchar","COLUMN_TYPE":"varchar(256)","COLUMN_KEY":"","EXTRA":"","column_alias":"Pattern","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"replacer_language_en","DATA_TYPE":"longtext","COLUMN_TYPE":"longtext","COLUMN_KEY":"","EXTRA":"","column_alias":"Englisch","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"replacer_language_de","DATA_TYPE":"longtext","COLUMN_TYPE":"longtext","COLUMN_KEY":"","EXTRA":"","column_alias":"Deutsch","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"state_id_replacer","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"MUL","EXTRA":"","column_alias":"Status","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"state","col_id":"state_id","col_subst":"state_id"},"col_order":1}],"table_icon":"fa fa-square","showKids":true},{"table_name":"replacer_tag","table_alias":"Replacertag","is_in_menu":true,"is_read_only":false,"se_active":false,"columns":[{"COLUMN_NAME":"replacer_tag_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"PRI","EXTRA":"","column_alias":"Replacer_tag_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"replacer_tag_name","DATA_TYPE":"varchar","COLUMN_TYPE":"varchar(45)","COLUMN_KEY":"","EXTRA":"","column_alias":"Replacer_tag_name","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1}],"table_icon":"fa fa-square"},{"table_name":"replacer_tag_id","table_alias":"Replacertagid","is_in_menu":true,"is_read_only":false,"se_active":false,"columns":[{"COLUMN_NAME":"replacer_tag_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"PRI","EXTRA":"","column_alias":"Replacer_tag_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"replacer_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"MUL","EXTRA":"","column_alias":"Replacer_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"replacer","col_id":"replacer_id","col_subst":"replacer_id"},"col_order":1},{"COLUMN_NAME":"tag_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"MUL","EXTRA":"","column_alias":"Tag_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"replacer_tag","col_id":"replacer_tag_id","col_subst":"replacer_tag_id"},"col_order":1}],"table_icon":"fa fa-square"},{"table_name":"state","table_alias":"State","is_in_menu":true,"is_read_only":false,"se_active":false,"columns":[{"COLUMN_NAME":"state_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"PRI","EXTRA":"auto_increment","column_alias":"State_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"name","DATA_TYPE":"varchar","COLUMN_TYPE":"varchar(45)","COLUMN_KEY":"","EXTRA":"","column_alias":"Name","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"form_data","DATA_TYPE":"longtext","COLUMN_TYPE":"longtext","COLUMN_KEY":"","EXTRA":"","column_alias":"Form_data","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"tablename","DATA_TYPE":"varchar","COLUMN_TYPE":"varchar(128)","COLUMN_KEY":"","EXTRA":"","column_alias":"Tablename","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1}],"table_icon":"fa fa-square","showKids":false},{"table_name":"state_rules","table_alias":"Staterules","is_in_menu":true,"is_read_only":false,"se_active":false,"columns":[{"COLUMN_NAME":"state_rules_id","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"PRI","EXTRA":"auto_increment","column_alias":"State_rules_id","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1},{"COLUMN_NAME":"state_id_FROM","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"","EXTRA":"","column_alias":"State_id_FROM","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"state","col_id":"state_id","col_subst":"name"},"col_order":1},{"COLUMN_NAME":"state_id_TO","DATA_TYPE":"bigint","COLUMN_TYPE":"bigint(20)","COLUMN_KEY":"","EXTRA":"","column_alias":"State_id_TO","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"state","col_id":"state_id","col_subst":"name"},"col_order":1},{"COLUMN_NAME":"transition_script","DATA_TYPE":"varchar","COLUMN_TYPE":"varchar(255)","COLUMN_KEY":"","EXTRA":"","column_alias":"Transition_script","is_in_menu":true,"read_only":false,"is_ckeditor":false,"foreignKey":{"table":"","col_id":"","col_subst":""},"col_order":1}],"table_icon":"fa fa-square","showKids":false}]';

  // Executed the following SQL Queries:
  /*

  */
?>