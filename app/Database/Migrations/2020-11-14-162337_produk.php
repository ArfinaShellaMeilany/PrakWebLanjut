<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'auto_increment'=>true,
			],
			'nama_produk'=>[
				'type'=>'VARCHAR',
				'constraint'=>128,
			],
			'deskripsi_produk'=>[
				'type'=>'TEXT',
				'constraint'=>128,	
			],
			'created_at'=>[
				'type'=>'DATETIME',
				'null'=>true,	
			],
			'update_at'=>[
				'type'=>'DATETIME',
				'null'=>true,	
			],

		]);
		$this->forge->addkey('id',true);
		$this->forge->createTable('produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('produk');
	}
}
