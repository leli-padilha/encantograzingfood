const { SitemapStream, streamToPromise } = require('sitemap');
const { createWriteStream } = require('fs');
const path = require('path');

async function generateSitemap() {
  const baseUrl = 'https://encantograzingfood.com.br'; // Coloque o URL do seu site
  const sitemapPath = path.join(__dirname, 'public', 'sitemap.xml');

  const sitemap = new SitemapStream({ hostname: baseUrl });
  const writeStream = createWriteStream(sitemapPath);

  // Crie um pipeline entre o SitemapStream e o WriteStream
  sitemap.pipe(writeStream);

  // Defina as URLs do sitemap
  const urls = [
    { url: '/', changefreq: 'daily', priority: 1.0 },
  ];

  // Adicione cada URL ao stream do sitemap
  urls.forEach((url) => sitemap.write(url));

  sitemap.end();

  // Aguarde até que o sitemap seja salvo
  streamToPromise(sitemap).then(() => {
    console.log('Sitemap gerado com sucesso!');
  }).catch(console.error);
}

generateSitemap();
