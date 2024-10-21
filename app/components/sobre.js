export default function Sobre() {
    return (
        <section className="w-full" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div className="flex flex-col gap-5 px-4 py-5 md:px-10 md:py-10 relative bg-cover bg-center bg-no-repeat bg-[url('/images/sobre.webp')]">
            
                <div>
                    <div className="flex flex-col gap-2">
                        <h2 className="text-center font-lhcencoreregular font-medium text-3xl text-white" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">A Encanto Grazing Food</h2>
                        <p className="max-w-2xl m-auto font-montserrat text-center text-white text-pretty tracking-wide" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">A Encanto surgiu da necessidade de ter em nossa cidade uma opção de presente/comida afetiva, que fosse além de alimento, que entregasse amor, gratidão, pedido de desculpas, desejos de felicidades, enfim, que enchesse os olhos, a barriga e o coração de quem receber.</p>
                    </div>
                </div>
                <div className="flex flex-col gap-2">
                    <h3 className="font-lhcencoreregular text-2xl text-center text-white font-medium" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Depoimentos </h3>
                    <div className="max-w-7xl m-auto grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4" data-aos="zoom-in-up">
                        <div className="bg-white p-5 text-center flex flex-col gap-4 rounded-2xl" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <span className="font-lhcencoreregular text-2xl font-medium">Caroline</span>
                            <p className="font-montserrat">“Maravilhosa, obrigada!<br/> Virei cliente, sempre que precisar vou chamar!”</p>
                        </div>
                        <div className="bg-secondary p-4 text-center flex flex-col gap-4 rounded-2xl" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <span className="font-lhcencoreregular text-2xl font-medium">Jessica</span>
                            <p className="font-montserrat">“Ficou lindo e ela amou! Com certeza vou pegar mais vezes! Trabalho impecável. Atendimento de qualidade.”</p>
                        </div>
                        <div className="bg-white p-4 text-center flex flex-col gap-4 rounded-2xl" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                            <span className="font-lhcencoreregular text-2xl font-medium">Danielle</span>
                            <p className="font-montserrat">“Maravilhoso, simplesmente. Obrigada por além de entregar comida boa, entregar amor!”</p>
                        </div>
                        <div className="bg-secondary p-4 text-center flex flex-col gap-4 rounded-2xl" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <span className="font-lhcencoreregular text-2xl font-medium">Cleide</span>
                            <p className="font-montserrat">“Obrigada pelo carinho... Amei meu lanche que ainda se tornou café da manhã! Tudo uma delícia!”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
)
}