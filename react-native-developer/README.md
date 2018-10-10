# ReactNative Developer

Você foi contratado para desenvolver um aplicativo mobile (ReactNative) para exibir nóticias de um portal. Este aplicativo deve ter a funcionalidade de scroll infinito, carregando mais noticias a medida que a página é rolada.
Para desenvolver este aplicativo é necessário utilizar as stacks citada abaixo, conforme determinado pelo cliente.

- [React Native](https://facebook.github.io/react-native/) - para construir o App em ios e android.
- [React Navigation](https://reactnavigation.org/) - para manipular as rotas do app.

### O que é necessáro fazer

Você deve consultar `https://content.guardianapis.com/search?api-key=0d160d0f-71cd-48b0-801f-2fc9cabd2157` onde serão listadas notícias de forma paginada.
Com esta lista, devem ser exibidos os componentes de notícia, que contém campos `sectionName`, `webTitle`, `webPublicationDate` nesta ordem. O campo `webPublicationDate` deve ser exibido no formato `dd/mm/YYYY H:i:s` na timezone UTC-3.
Ao clicar no componente de notícia você deve exbir uma WebView com a nóticia selecionada pelo usuário, permitindo-o voltar para listagem caso queira.

### O que está sob avaliação

Seus conhecimentos em React e ReactNative, sua capacidade de analisar e projetar uma solução guiando-se pelas informações disponíveis com código bem estruturado.

**Você ganha mais pontos se utilizar:**
- Testes de unidade
- Redux
- ESLint

**Tempo:**  Estima-se 4 a 8 horas para este desafio, entretanto não há um limite.

**Avaliação:** Para nos enviar seu teste você pode escolher uma das seguintes opções:

- Compartilhar um diretório no GoogleDrive
- Enviar um email para bruna.marques@avecbrasil.com.br copiando victor@avecbrasil.com.br, hedcler@avecbrasil.com.br e lucas.silva@avecbrasil.com.br

com o conteúdo do seu teste.