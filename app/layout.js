import "./globals.css";
import Head from "next/head";

import AOSProvider from "./components/AOSProvider";

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
