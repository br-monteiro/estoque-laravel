<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ProdutoTableSeeder');

        Model::reguard();
    }
}

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into produtos'
            . '(nome, quantidade, valor, descricao)'
            . 'values (?,?,?,?)',
            ['Geladeira', 2, 5900.00, 'teste de seeder 1']);
        
        DB::insert('insert into produtos'
            . '(nome, quantidade, valor, descricao)'
            . 'values (?,?,?,?)',
            ['Fogão', 5, 1200.00, 'teste de seeder 2']);
        
        DB::insert('insert into produtos'
            . '(nome, quantidade, valor, descricao)'
            . 'values (?,?,?,?)',
            ['teste', 2, 700.00, 'teste de seeder 3']);
    }
}
