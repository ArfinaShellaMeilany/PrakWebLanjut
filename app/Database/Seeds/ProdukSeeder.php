<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data =[
                [
                        'nama_produk' => 'Kaos',
                        'deskripsi_produk'    => 'Ini adalah kaos premium'
                ],
                [
                        'nama_produk' => 'Boxer',
                        'deskripsi_produk'    => 'Ini adalah boxer premium'
                ],
                
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                //         $data
                // );

                // Using Query Builder
                $this->db->table('produk')->insertBatch($data);
        }
}