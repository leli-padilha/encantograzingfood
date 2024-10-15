'use client'

import Image from "next/image";
import { useState } from 'react';

const produtos = {
    cafe_encantar: {
        nome: 'Café Encantar',
        serve: 'Serve até 4',
        descricao: 'Bandeja redonda em madeira, suco, sachês de café, pães, croissant, biscoitos, waffles, cookies, salada de frutas, iogurte, manteiga, geleia, doce de leite, uvas e morangos, queijos brie e fatiado, salame italiano e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/cafe_encantar.webp',
        url_nome: 'Café%20Encantar'
    },
    cafe_felicidade: {
        nome: 'Café Felicidade',
        serve: 'Serve até 3',
        descricao: 'Bandeja redonda em madeira, suco, café, pão, croissant, cookies, madelines, waffles, biscoitos, iogurte, geleia, uvas, morangos, queijos (gruyere ou gouda) e fatiado, salame italiado e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/cafe_felicidade.webp',
        url_nome: 'Café%20Felicidade'
    },
    cafe_bom_dia: {
        nome: 'Café Bom Dia',
        serve: 'Serve 1',
        descricao: 'Caixa craft 20x20, suco, café, pão, croissant, waffles, biscoitos, madelines, geleia e manteiga, presunto, queijo fatiado, uvas, morangos, iogurte com granola. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/cafe_bom_dia.webp',
        url_nome: 'Café%20Bom%20Dia'
    },
    bandeja_picnic: {
        nome: 'Bandeja Picnic',
        serve: 'Serve até 6',
        descricao: 'Bandeja redonda em madeira, pão, torradinhas, geleia, pastinha, azeitonas, damascos, nuts, espetinhos caprese, 3 tipos de queijo, 3 tipos de charcuterias, uvas e morangos. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/picnic.webp',
        url_nome: 'Bandeja%20Picnic'
    },
    tabua_desejo: {
        nome: 'Tábua Desejo',
        serve: 'Serve até 2',
        descricao: 'Tábua em MDF, torradinha, 3 tipos de queijos, 3 tipos de charcuterias, espetinhos caprese, geleia, pastinha, azeitonas, nuts, damascos, uvas e morangos. Ervas aromáticas e flores para decoração.',
        imagem: '/images/produtos/tabua_desejo.webp',
        url_nome: 'Tábua%20Desejo'
    },
    tabua_sensacao: {
        nome: 'Tábua Sensação',
        serve: 'Serve até 2',
        descricao: 'Bandeja MDF, torradinhas, 2 tipos de queijo, 2 tipos de charcuterias, espetinho caprese, azeitonas, geleia, pastinha, damascos, nuts, uvas e morangos. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/tabua_sensacao.webp',
        url_nome: 'Tábua%20Sensação'
    },
    brunch: {
        nome: 'Brunch',
        serve: 'Serve até 3',
        descricao: 'Bandeja em madeira, suco, sachês de café, pão, croissant, biscoitos, stoopowafel, salada de frutas, geleia, chocolate, uvas e morangos, espetinho caprese, queijos (gouda ou gruyere) e fatiado. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/brunch.webp',
        url_nome: 'Brunch'
    },
    mini_brunch: {
        nome: 'Mini Brunch',
        serve: 'Serve até 2',
        descricao: 'Bandeja MDF, suco de uva, chá ou mini espumante (+R$10,00), pão, croissant, cookies, biscoitos, geleia, 3 tipos de frutas, queijos (gouda ou gruyere) e fatiado, salame italiano e presunto. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/mini_brunch.webp',
        url_nome: 'Mini%20Brunch'
    },
    fondue_chamego: {
        nome: 'Fondue Chamego',
        serve: 'Serve até 2',
        descricao: 'Bandeja MDF, ramequin de porcelana com ganache de chocolate, uvas, morangos, bergamota, amandita, marshmallow, waffer, garfinhos de metal. Flores para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/fondue_chamego.webp',
        url_nome: 'Fondue%20Chamego'
    },
    despertar_kids: {
        nome: 'Despertar Kids',
        serve: 'Serve 1',
        descricao: 'Caixa craft 20x20, suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/kids.webp',
        url_nome: 'Despertar%20Kids'
    }
};



export default function Produtos(){
    const [produtoKids, setProdutoKids] = useState({
        nome: 'Despertar Kids',
        descricao: 'Caixa craft 20x20, suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
        imagem: '/images/produtos/kids.webp',
        url_nome: 'Despertar%20Kids',
      });

    // Função para alterar o produto Kids baseado na seleção do select
    const handleSelectChange = (e) => {

        console.log(e.target.value)
        const selectedValue = e.target.value;

        if (selectedValue === 'Despertar Kids') {
            // Volta ao valor padrão de 'Despertar Kids'
            setProdutoKids({
                nome: 'Despertar Kids',
                descricao: 'Caixa craft 20x20, suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                imagem: '/images/produtos/kids.webp',
                url_nome: 'Despertar%20Kids',
            });
        } else if (selectedValue === 'Kids Personalizado') {
            // Altera para os valores do produto 'Kids Personalizado'
            setProdutoKids({
                nome: 'Kids Personalizado',
                descricao: 'Caixa de madeira, formato Mickey ou borboleta, suco de uva, misto quente no palito, croissant, madelines, waffles, biscoitos, frutas, nutella, pirulito grande, chocolate mms, balas fini, marshmallows. Flores ou ervas aromáticas para decorar conforme disponibilidade do dia.',
                imagem: '/images/produtos/kids_perso.webp',
                url_nome: 'Despertar%20Kids%20Personalizado',
            });
        }
    };

    const renderProduto = (produto) => (
        <div className="bg-white w-fit flex flex-col shadow-md rounded-2xl xl:flex-row transition-transform duration-300 ease-in-out transform hover:scale-110" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div className="w-full h-full overflow-hidden relative rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none"> 
                <Image id="produto-imagem" src={produto.imagem} alt="descricao" width={350} height={350} className="w-full h-full object-cover rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none transition-transform duration-300 ease-in-out transform hover:scale-110" />
            </div>
            <div className="w-full p-3 gap-3 flex flex-col lg:gap-4 xl:justify-between">
                <div className="flex justify-between items-center">
                    
                    <h3 id="produto-nome" className="font-lhcencoreregular text-2xl font-medium">{produto.nome}</h3>
                    <div className="flex gap-1 ">
                        <svg width="18" height="18" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clipPath="url(#clip0_359_810)">
                            <path d="M13.8493 12.6819C14.3488 12.6819 14.7461 12.3676 15.1029 11.928C15.8332 11.0282 14.6341 10.3091 14.1768 9.95695C13.7119 9.59895 13.1929 9.39615 12.6666 9.34855M11.9999 8.01522C12.9204 8.01522 13.6666 7.26902 13.6666 6.34855C13.6666 5.42808 12.9204 4.68188 11.9999 4.68188" stroke="black" strokeWidth="1.5" strokeLinecap="round"/>
                            <path d="M2.1506 12.6819C1.65106 12.6819 1.25374 12.3676 0.896988 11.928C0.166687 11.0282 1.36574 10.3091 1.82305 9.95695C2.28794 9.59895 2.80701 9.39615 3.33329 9.34855M3.66663 8.01522C2.74615 8.01522 1.99996 7.26902 1.99996 6.34855C1.99996 5.42808 2.74615 4.68188 3.66663 4.68188" stroke="black" strokeWidth="1.5" strokeLinecap="round"/>
                            <path d="M5.38912 10.7561C4.70793 11.1773 2.92191 12.0373 4.00972 13.1135C4.54111 13.6393 5.13293 14.0153 5.877 14.0153H10.1229C10.8669 14.0153 11.4587 13.6393 11.9901 13.1135C13.0779 12.0373 11.2919 11.1773 10.6107 10.7561C9.01333 9.76833 6.98647 9.76833 5.38912 10.7561Z" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                            <path d="M10.3333 5.68184C10.3333 6.97051 9.2886 8.01518 7.99993 8.01518C6.71127 8.01518 5.66659 6.97051 5.66659 5.68184C5.66659 4.39318 6.71127 3.34851 7.99993 3.34851C9.2886 3.34851 10.3333 4.39318 10.3333 5.68184Z" stroke="black" strokeWidth="1.5"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_359_810">
                            <rect width="16" height="16" fill="white" transform="translate(0 0.681885)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span className="font-montserrat font-medium text-xs">{produto.serve}</span>
                    </div>
                </div>
                <div>
                    <p id="produto-descricao" className="font-montserrat text-sm text-pretty">{produto.descricao}</p>
                </div>
                <div className="w-full" data-aos="fade-up" data-aos-duration="1000">
                    <a href="https://wa.me/5554991257469?text=Ol%C3%A1%20encanto%20gostaria%20de%20saber%20mais%20sobre%20o%20produto%20Despertar%20UrlProduto" target="_blank">
                        <button className="w-full flex items-center justify-center gap-2 bg-secondary px-4 py-2 rounded-2xl font-montserrat font-medium shadow-md transform transition duration-300 ease-in-out hover:scale-110">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 7.5V6.36364C7.5 3.95367 9.51472 2 12 2C14.4853 2 16.5 3.95367 16.5 6.36364V7.5" stroke="black" strokeWidth="1.5"/>
                                <path d="M2.70352 18.6124C2.19716 17.3029 2.68147 15.6144 3.6501 12.2373L5 7.5H19L20.3499 12.2373C21.3185 15.6144 21.8028 17.3029 21.2965 18.6124C20.9864 19.4143 20.4358 20.1097 19.7145 20.6104C16.9865 22.5043 6.8944 22.4216 4.28549 20.6104C3.56418 20.1097 3.01361 19.4143 2.70352 18.6124Z" stroke="black" strokeWidth="1.5"/>
                                <path d="M10 11H14" stroke="black" strokeWidth="1.5"/>
                            </svg>
                            Encomendar
                        </button>
                    </a>                                  
                </div>
            </div>
        </div>
    );

    return (
        <section className="pt-5 p-0 md:pt-10 bg-[url('/images/fundoprodutos.webp')] bg-center bg-no-repeat bg-cover">
            <div className="max-w-screen-xl m-auto flex border-t-2 border-l-2 border-r-2 border-secondary sm:flex flex-col px-4 py-4 md:px-5 md:py-8 bg-white rounded-t-xl gap-5">
                
                <div className="w-full" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h2 className="text-center font-lhcencoreregular text-3xl xl:text-4xl font-bold">
                        Produtos
                    </h2>
                    <h3 className="text-center font-montserrat text-sm xl:text-base font-medium">Encanto Grazing Food</h3>
                </div>
                
                <div className="w-full grid grid-cols-1 gap-5 sm:grid-cols-2 md:gap-8">
                    {
                        Object.keys(produtos).map((key) => {
                            const produto = produtos[key]

                            if(produto.nome === 'Despertar Kids') {
                                return (
                                    <div key={key} className="w-fit h-fit bg-white flex flex-col shadow-md rounded-2xl xl:flex-row transition-transform duration-300 ease-in-out transform hover:scale-110" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div className="w-full h-full overflow-hidden relative rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none">
                                            <Image id="produto-imagem" src={produtoKids.imagem} alt="descricao" width={350} height={350} className="w-full h-full object-cover rounded-t-lg xl:rounded-l-2xl xl:rounded-tr-none transition-transform duration-300 ease-in-out transform hover:scale-110" />
                                        </div>
                                        <div className="w-full p-4 gap-3 flex flex-col lg:gap-4 xl:justify-between">
                                            <div className="flex flex-col gap-2 md:gap-0 md:flex-row md:justify-between items-start">
                                                
                                                <h3 id="produto-nome" className="font-lhcencoreregular text-2xl font-medium leading-6">{produtoKids.nome}</h3>
                                                <div className="relative">
                                                    <select onChange={handleSelectChange} value={produtoKids.nome} className="text-xs bg-secondary rounded-xl p-2 focus:outline-none">
                                                        <option value="Despertar Kids">Simples</option>
                                                        <option value="Kids Personalizado">Personalizado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
    
                                                <p id="produto-descricao" className="font-montserrat text-sm text-pretty">{produtoKids.descricao}</p>
                                            </div>
                                            <div className="w-full" data-aos="fade-up" data-aos-duration="1000">
                                                <a href="https://wa.me/5554991257469?text=Ol%C3%A1%20encanto%20gostaria%20de%20saber%20mais%20sobre%20o%20produto%20Despertar%20UrlProduto" target="_blank">
                                                    <button className="w-full flex items-center justify-center gap-2 bg-secondary px-4 py-2 rounded-2xl font-montserrat font-medium shadow-md transform transition duration-300 ease-in-out hover:scale-110">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.5 7.5V6.36364C7.5 3.95367 9.51472 2 12 2C14.4853 2 16.5 3.95367 16.5 6.36364V7.5" stroke="black" strokeWidth="1.5"/>
                                                            <path d="M2.70352 18.6124C2.19716 17.3029 2.68147 15.6144 3.6501 12.2373L5 7.5H19L20.3499 12.2373C21.3185 15.6144 21.8028 17.3029 21.2965 18.6124C20.9864 19.4143 20.4358 20.1097 19.7145 20.6104C16.9865 22.5043 6.8944 22.4216 4.28549 20.6104C3.56418 20.1097 3.01361 19.4143 2.70352 18.6124Z" stroke="black" strokeWidth="1.5"/>
                                                            <path d="M10 11H14" stroke="black" strokeWidth="1.5"/>
                                                        </svg>
                                                        Encomendar
                                                    </button>
                                                </a>                                  
                                            </div>
                                        </div>
                                    </div>
                                )
                            }

                            return (
                                <div key={key}>
                                  {renderProduto(produto)}
                                </div>
                              );
                        })
                    }

                </div>
        
            </div>
        </section>
    )
}