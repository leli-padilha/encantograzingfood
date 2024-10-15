import "./globals.css";
import Head from "next/head";

export default function RootLayout({ children }) {
  return (
    <html lang="pt_br">
      <Head>
        <title>Titulo Padrão</title>
      </Head>
      <body>
        {children}
      </body>
    </html>
  );
}
