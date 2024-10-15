import Image from "next/image"

export default function(){
    return (
        <section className="w-full px-4 py-4 md:px-10 md:py-10" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div className="max-w-screen-xl m-auto flex flex-col justify-between gap-5 items-center md:flex-row md:gap-10">
                <div className="w-full flex flex-col items-center gap-5 md:gap-10">
                    <div className="flex flex-col gap-3">
                        <h1 className="font-lhcencoreregular text-center text-2xl font-medium xl:text-5xl xl:text-center text-pretty">Transforme uma simples cesta de café da manhã em um momento especial!</h1>
                        <p className="font-montserrat text-center text-sm tracking-wide xl:text-base xl:text-center">
                            Criadas e entregues nas cidades de Marau, Vila Maria | RS. 
                        </p>
                    </div>
                    <a href="https://wa.me/5554991257469" target="_blank" className="w-full md:max-w-80">
                        <button className="w-full bg-secondary px-4 py-4 rounded-2xl font-montserrat font-medium text-sm md:text-base flex align-center gap-1 justify-center shadow-md transform transition duration-300 ease-in-out hover:scale-110 md:max-w-80">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.1001 4.91002C18.1832 3.98413 17.0911 3.24999 15.8876 2.75039C14.6841 2.25078 13.3932 1.99571 12.0901 2.00002C6.6301 2.00002 2.1801 6.45002 2.1801 11.91C2.1801 13.66 2.6401 15.36 3.5001 16.86L2.1001 22L7.3501 20.62C8.8001 21.41 10.4301 21.83 12.0901 21.83C17.5501 21.83 22.0001 17.38 22.0001 11.92C22.0001 9.27002 20.9701 6.78002 19.1001 4.91002ZM12.0901 20.15C10.6101 20.15 9.1601 19.75 7.8901 19L7.5901 18.82L4.4701 19.64L5.3001 16.6L5.1001 16.29C4.27765 14.9771 3.84102 13.4593 3.8401 11.91C3.8401 7.37002 7.5401 3.67002 12.0801 3.67002C14.2801 3.67002 16.3501 4.53002 17.9001 6.09002C18.6677 6.85389 19.276 7.76257 19.6897 8.76335C20.1034 9.76414 20.3143 10.8371 20.3101 11.92C20.3301 16.46 16.6301 20.15 12.0901 20.15ZM16.6101 13.99C16.3601 13.87 15.1401 13.27 14.9201 13.18C14.6901 13.1 14.5301 13.06 14.3601 13.3C14.1901 13.55 13.7201 14.11 13.5801 14.27C13.4401 14.44 13.2901 14.46 13.0401 14.33C12.7901 14.21 11.9901 13.94 11.0501 13.1C10.3101 12.44 9.8201 11.63 9.6701 11.38C9.5301 11.13 9.6501 11 9.7801 10.87C9.8901 10.76 10.0301 10.58 10.1501 10.44C10.2701 10.3 10.3201 10.19 10.4001 10.03C10.4801 9.86002 10.4401 9.72002 10.3801 9.60002C10.3201 9.48002 9.8201 8.26002 9.6201 7.76002C9.4201 7.28002 9.2101 7.34002 9.0601 7.33002H8.5801C8.4101 7.33002 8.1501 7.39002 7.9201 7.64002C7.7001 7.89002 7.0601 8.49002 7.0601 9.71002C7.0601 10.93 7.9501 12.11 8.0701 12.27C8.1901 12.44 9.8201 14.94 12.3001 16.01C12.8901 16.27 13.3501 16.42 13.7101 16.53C14.3001 16.72 14.8401 16.69 15.2701 16.63C15.7501 16.56 16.7401 16.03 16.9401 15.45C17.1501 14.87 17.1501 14.38 17.0801 14.27C17.0101 14.16 16.8601 14.11 16.6101 13.99Z" fill="black"/>
                            </svg>
                            Entrar em contato
                        </button>
                    </a>
                </div>
                <div className="max-w-[635px] w-full">
                    <Image className="w-full" src="/images/hero.webp" alt="A Encanto possui 11 amáveis produtos" width={635} height={0} />
                </div>
            </div>
        </section>
    )
}