Meu Projeto - Carros API
Este projeto consiste em uma API de carros desenvolvida usando Laravel como backend e Vue.js como frontend. A API fornece dados relacionados a carros, permitindo consultas, inserções, atualizações e exclusões de registros de carros em um banco de dados MySQL. O frontend consome esses dados por meio de chamadas Axios à API.

Tecnologias utilizadas
Laravel: Framework PHP utilizado para o desenvolvimento do backend.
Vue.js: Framework JavaScript utilizado para o desenvolvimento do frontend.
MySQL: Banco de dados relacional utilizado para armazenar os dados dos carros.
Axios: Biblioteca JavaScript para fazer requisições HTTP no frontend.
Pré-requisitos
Antes de executar este projeto, certifique-se de ter as seguintes dependências instaladas em seu ambiente de desenvolvimento:

PHP: versão 7.4 ou superior
Composer: gerenciador de dependências do PHP
Node.js: versão 12 ou superior
NPM: gerenciador de pacotes do Node.js
MySQL: servidor de banco de dados
Configuração do ambiente
Siga as etapas abaixo para configurar o ambiente de desenvolvimento:

Backend (Laravel)
Clone este repositório para o seu ambiente de desenvolvimento.
Abra um terminal na pasta do projeto.
Execute o comando composer install para instalar as dependências do Laravel.
Renomeie o arquivo .env.example para .env e configure as informações do banco de dados.
Execute o comando php artisan key:generate para gerar a chave da aplicação.
Execute o comando php artisan migrate para criar as tabelas no banco de dados.
Execute o comando php artisan serve para iniciar o servidor backend.
Frontend (Vue.js)
Abra outro terminal na pasta do projeto (ou em uma nova janela do terminal).
Execute o comando npm install para instalar as dependências do Vue.js.
Execute o comando npm run serve para iniciar o servidor de desenvolvimento do Vue.js.
Utilização
Após configurar o ambiente, você poderá acessar o projeto em seu navegador. Acesse a URL fornecida pelo servidor de desenvolvimento do Vue.js para visualizar o frontend e interagir com a API de carros.

Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para fazer fork deste repositório, criar branches e enviar pull requests com melhorias, correções de bugs ou novos recursos.

Licença
Este projeto está licenciado sob a MIT License.

Sobre o projeto
Este projeto foi desenvolvido como parte de um estudo pessoal com o objetivo de aprimorar as habilidades em Vue.js. Ao criar uma API de carros com backend em Laravel e frontend em Vue.js, explorei os conceitos de desenvolvimento de APIs RESTful, consumo de APIs com Axios e criação de interfaces interativas com Vue.js.

Durante o desenvolvimento deste projeto, foquei em aprender e aplicar os seguintes aspectos do Vue.js:

Componentes: Dividi a interface em componentes reutilizáveis, como listas de carros, formulários de cadastro e cards individuais de carros.
Roteamento: Utilizei o Vue Router para criar rotas que permitem navegar entre as diferentes partes da aplicação, como a lista de carros e a página de detalhes de um carro específico.
Estado do aplicativo: Utilizei o Vuex para gerenciar o estado global do aplicativo, armazenando informações como a lista de carros e detalhes do carro selecionado.
Comunicação com a API: Utilizei o Axios para fazer chamadas assíncronas à API de carros, consumindo os dados retornados e exibindo-os na interface do usuário.
Formulários e validação: Implementei formulários de cadastro e edição de carros, utilizando recursos do Vue.js para validação de dados antes de enviar as requisições à API.
Espero que este projeto tenha sido útil para meu aprendizado e crescimento como desenvolvedor Vue.js. Sinta-se à vontade para explorar o código-fonte, sugerir melhorias ou utilizar partes deste projeto em seus próprios estudos e projetos.
