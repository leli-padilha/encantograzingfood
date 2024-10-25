import Image from "next/image";
import Header from "./components/header";
import Footer from "./components/footer";
import Banner from "./components/banner";
import Hero from "./components/hero";
import Produtos from "./components/produtos";
import Sobre from "./components/sobre";
import FAQ from "./components/faq";
import Whats from "./components/whats";

export const metadata = {
  title: 'Encanto Grazing Food',
  description: 'Transforme uma simples cesta de café da manhã em um momento especial.',
  icons: {
    icon: '/favicon.ico',
    apple: '/logos/logo.png',
  },
  openGraph: {
    title: 'Encanto Grazing Food',
    description: 'Transforme uma simples cesta de café da manhã em um momento especial.',
    url: 'https://encantograzingfood.com.br', // URL da página
    images: [
      {
        url: '/hero.webp', // URL da imagem
        width: 673, // Largura da imagem
        height: 260, // Altura da imagem
        alt: 'Logo Encanto Grazing Food',
      },
    ],
  }
};

export default function Home() {


  return (
    <>
      <main>
        <Whats/>
        <Banner/>
        <Hero/>
        <Produtos/>
        <Sobre/>
        <FAQ/>
      </main>
      <Footer/>
    </>
  );
}
