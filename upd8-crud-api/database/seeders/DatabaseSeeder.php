<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nome' => 'Jonas Galeno da Silva',
            'cpf' => '723.388.080-88',
            'dt_nascimento' => '2001-04-25',
            'sexo' => 'M',
            'endereco' => 'Jardim Mangueiral QC 15 rua O casa 32',
            'estado' => 'Distrito Federal',
            'cidade' => 'Brasília',
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Carlos Nogueira dos Santos',
            'cpf' => '116.555.420-87',
            'dt_nascimento' => '1998-09-07',
            'sexo' => 'M',
            'endereco' => 'Rua Rio Serrano',
            'estado' => 'Bahia',
            'cidade' => 'Salvador',
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Maria Alice Cardoso Lima',
            'cpf' => '985.121.180-08',
            'dt_nascimento' => '2002-06-30',
            'sexo' => 'F',
            'endereco' => 'Santa Maria da Codipe',
            'estado' => 'Piaui',
            'cidade' => 'Teresina',
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Debora Guimaraes da Costa',
            'cpf' => '565.053.220-60',
            'dt_nascimento' => '1995-10-13',
            'sexo' => 'F',
            'endereco' => 'Condominio das Esmeraldas',
            'estado' => 'Goiás',
            'cidade' => 'Goiânia',
        ]);

        DB::table('clientes')->insert([
            'nome' => 'João Henrique da Silva',
            'cpf' => '504.674.190-63',
            'dt_nascimento' => '2002-06-30',
            'sexo' => 'M',
            'endereco' => 'Santa Inês',
            'estado' => 'Acre',
            'cidade' => 'Rio Branco',
        ]);
    }
}
