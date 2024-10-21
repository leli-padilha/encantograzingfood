import Image from "next/image";
import Header from "./components/header";
import Footer from "./components/footer";
import Banner from "./components/banner";
import Hero from "./components/hero";
import Produtos from "./components/produtos";
import Sobre from "./components/sobre";
import FAQ from "./components/faq";
import Whats from "./components/whats";


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
