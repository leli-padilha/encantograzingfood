import "./globals.css";
import Head from "next/head";

import AOSProvider from "./components/AOSProvider";

export const metadata = {
  title: 'Encanto Grazing Food',
  description: 'Transforme uma simples cesta de café da manhã em um momento especial.',
  icons: {
    icon: '/logos/logo.webp',
    apple: '/logos/logo.png',
  },
  openGraph: {
    title: 'Encanto Grazing Food',
    description: 'Transforme uma simples cesta de café da manhã em um momento especial.',
    url: 'https://encantograzingfood.com.br', // URL da página
    images: [
      {
        url: '/logos/logo.webp', // URL da imagem
        width: 673, // Largura da imagem
        height: 260, // Altura da imagem
        alt: 'Logo Encanto Grazing Food',
      },
    ],
  }
};

export default function RootLayout({ children }) {
  return (
    <html lang="pt_br">
      <Head>
        <title>Titulo Padrão</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"/>
      </Head>
      <body>
        <AOSProvider>
          {children}
        </AOSProvider>
      </body>
    </html>
  );
}
