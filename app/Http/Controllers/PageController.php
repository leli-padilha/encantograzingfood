<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $produtos = [
            [
                'nome' => 'Café Encantar',
                'serve' => 'Serve até 4',
                'descricao' => 'Bandeja redonda em madeira, suco, sachês de café, pães, croissant, biscoitos, waffles, cookies, salada de frutas, iogurte, manteiga, geleia, doce de leite, uvas e morangos, queijos brie e fatiado, salame italiano e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/cafe_encantar.webp'
            ],
            [
                'nome' => 'Café Felicidade',
                'serve' => 'Serve até 3',
                'descricao' => 'Bandeja redonda em madeira, suco, café, pão, croissant, cookies, madelines, waffles, biscoitos, iogurte, geleia, uvas, morangos, queijos (gruyere ou gouda) e fatiado, salame italiado e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/cafe_felicidade.webp'
            ],
            [
                'nome' => 'Café Bom Dia',
                'serve' => 'Serve 1',
                'descricao' => 'Caixa craft 20x20, suco, café, pão, croissant, waffles, biscoitos, madelines, geleia e manteiga, presunto, queijo fatiado, uvas, morangos, iogurte com granola. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/cafe_bom_dia.webp'
            ],
            [
                'nome' => 'Picnic',
                'serve' => 'Serve até 6',
                'descricao' => 'Bandeja redonda em madeira, pão, torradinhas, geleia, pastinha, azeitonas, damascos, nuts, espetinhos caprese, 3 tipos de queijo, 3 tipos de charcuterias, uvas e morangos. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/picnic.webp'
            ],
            [
                'nome' => 'Tábua Desejo',
                'serve' => 'Serve até 2',
                'descricao' => 'Tábua em MDF, torradinha, 3 tipos de queijos, 3 tipos de charcuterias, espetinhos caprese, geleia, pastinha, azeitonas, nuts, damascos, uvas e morangos. Ervas aromáticas e flores para decoração.',
                'imagem' => 'images/produtos/tabua_desejo.webp'
            ],
            [
                'nome' => 'Tábua Sensação',
                'serve' => 'Serve até 2',
                'descricao' => 'Bandeja MDF, torradinhas, 2 tipos de queijo, 2 tipos de charcuterias, espetinho caprese, azeitonas, geleia, pastinha, damascos, nuts, uvas e morangos. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/tabua_sensacao.webp'
            ],
            [
                'nome' => 'Brunch',
                'serve' => 'Serve até 3',
                'descricao' => 'Bandeja em madeira, suco, sachês de café, pão, croissant, biscoitos, stoopowafel, salada de frutas, geleia, chocolate, uvas e morangos, espetinho caprese, queijos (gouda ou gruyere) e fatiado. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/brunch.webp'
            ],
            [
                'nome' => 'Mini Brunch',
                'serve' => 'Serve até 2',
                'descricao' => 'Bandeja MDF, suco de uva, chá ou mini espumante (+R$10,00), pão, croissant, cookies, biscoitos, geleia, 3 tipos de frutas, queijos (gouda ou gruyere) e fatiado, salame italiano e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/mini_brunch.webp'
            ],
            [
                'nome' => 'Fondue Chamego',
                'serve' => 'Serve até 2',
                'descricao' => 'Bandeja MDF, ramequin de porcelana com ganache de chocolate, uvas, morangos, bergamota, amandita, marshmallow, waffer, garfinhos de metal. Flores para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/fondue_chamego.webp'
            ],
            [
                'nome' => 'Despertar Kids',
                'serve' => 'Serve 1',
                'descricao' => 'Caixa craft 20x20, suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows.Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                'imagem' => 'images/produtos/kids.webp'
            ]
        ];

        //dd($produtos);

        return view('index', compact('produtos'));
    }
}
