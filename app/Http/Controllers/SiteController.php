<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a pagina home
     *
     * @return void
     */
    public function Index()
    {
       return view('Home');
    }


    /**
     * Mostra sobre
     *
     * @return void
     */
     public function Sobre()
    {
        echo 'Aqui é o sobre';
    }

    /**
     * Mostra contato
     *
     * @return void
     */
    public function Contato()
    {
        echo 'Aqui é o contato';
    }

    /**
     * Mostra servicos
     *
     * @return void
     */
    public function Servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de roupas',
                'Descricao'=> 'lavamos roupa'
            ],
            2 => [
                'nome' => 'Lavagem de coberta',
                'Descricao'=> 'lavamos coberta'
            ],
            3 => [
                'nome' => 'Lavagem de ursos',
                'Descricao'=> 'lavamos ursos'
            ],
        ];

        return view('Servicos', [
            'servico' => $servicos[$id]
        ]);
    }
}
