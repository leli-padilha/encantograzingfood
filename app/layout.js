import "./globals.css";
import Head from "next/head";
import Script from "next/script";

import AOSProvider from "./components/AOSProvider";

export default function RootLayout({ children }) {
    return (
        <html lang="pt_br">
            <Head>
                <title>Titulo Padrão</title>
                <link rel="preconnect" href="https://fonts.googleapis.com"/>
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
                <link href="https://fonts.googleapis.com/css2?family=montserrat:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"/>
                <Script id="gtm-head" strategy="beforeInteractive">
                    {`
                        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                        })(window,document,'script','dataLayer','GTM-N2LD8DFS');
                    `}
                </Script>
            </Head>
            <body>
                <noscript>
                    <iframe 
                        src="https://www.googletagmanager.com/ns.html?id=GTM-N2LD8DFS"
                        height={0} 
                        width={0} 
                        style={{display:'none',visibility:'hidden'}}>
                    </iframe>
                </noscript>
                <AOSProvider>
                {children}
                </AOSProvider>
            </body>
        </html>
    );
}
