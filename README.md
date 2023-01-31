# Sistema de Gestão de Frotas

# Funcionalidades

Este sistema web de gestão de frotas vai incluir as seguintes funcionalidades:

1. Cadastro de veículos: permitir a adição de novos veículos à frota, incluindo informações como marca, modelo, ano, número de série e data de aquisição.
2. Atribuição de veículos a funcionários: permitir a atribuição de veículos específicos a funcionários da empresa, registrando quem é o usuário atual do veículo e sua data de atribuição.
3. Gerenciamento de manutenções e reparações: permitir o registro de manutenções e reparações realizadas em veículos, incluindo data, custo e tipo de trabalho realizado.
4. Rastreamento de uso: registrar dados de uso dos veículos, incluindo quilometragem, tempo de uso e localização.
5. Relatórios: gerar relatórios detalhados sobre a frota, incluindo informações como custo total, quilometragem total, tempo total de uso e histórico de manutenções e reparações.
6. Gerenciamento de saídas: registrando a saída de veículos da frota, incluindo a data, a razão e a verificação dos veículos antes da saída.
7. Além disso, este sistema pode ser desenvolvido com segurança para evitar acesso não autorizado e garantir a privacidade dos dados.

# Grupos de Usuários

Os seguintes grupos de usuários podem ser necessários em um negócio de gestão de frotas:

1. Administradores: esses usuários têm acesso completo ao sistema e podem realizar ações como adicionar novos veículos à frota, atribuir veículos a funcionários, registrar manutenções e reparações, gerar relatórios e gerenciar saídas de veículos.
2. Gerentes: esses usuários têm acesso limitado ao sistema, permitindo-lhes visualizar relatórios, monitorar o uso dos veículos e aprovar requisições de manutenção e reparação.
3. Funcionários: esses usuários podem visualizar informações sobre o veículo atribuído a eles e registrar quilometragem e tempo de uso. Eles também podem solicitar manutenções ou reparações se necessário.
4. Motoristas: esses usuários tem acesso a informações específicas do veículo que estão dirigindo, como o nível de combustível, o estado das luzes e o estado dos pneus, além de registrar quilometragem e tempo de uso.
5. Fornecedores: esses usuários têm acesso ao sistema para registrar as manutenções e reparações realizadas em veículos, incluindo data, custo e tipo de trabalho realizado.

Cada um desses grupos de usuários tem uma função específica no negócio, permitindo que a gestão da frota seja feita de forma eficiente e segura, garantindo a privacidade dos dados.

# Diagrama de Entidade-Relação

O diagrama de entidade-relação (DER) para um sistema de gestão de frotas pode incluir as seguintes entidades e relações:

## Entidades

• Veículos: representa cada veículo na frota, com atributos como marca, modelo, ano, número de série e data de aquisição.
• Funcionários: representa cada funcionário da empresa, com atributos como nome, cargo e data de contratação.
• Manutenções e Reparações: representa cada manutenção ou reparação realizada em um veículo, com atributos como data, custo e tipo de trabalho.
• Usuários: representa cada usuário do sistema, com atributos como nome, cargo e data de cadastro.

## Relações:
• Veículos tem um Funcionário: representa a relação entre um veículo e o funcionário atualmente atribuído a ele.
• Veículos tem várias Manutenções e Reparações: representa a relação entre um veículo e as manutenções e reparações realizadas nele.
• Funcionários tem vários Veículos: representa a relação entre um funcionário e os veículos atribuídos a ele.
• Usuários tem um Funcionário: representa a relação entre um usuário do sistema e o funcionário que ele representa.

![Diagrama ER](public/assets/img/der2.png?raw=true "Diagrama ER")

Este é um exemplo de como poderia ser o DER para esse sistema, poderia haver outras entidades e relações dependendo das necessidades específicas do negócio. É importante que seja feito uma análise detalhada das necessidades do negócio para garantir que o DER seja o mais preciso e eficiente possível.

# Instalação

 Segue os seguintes passos para instalar a aplicação (terminal)

1. Clone the Repository

```
git clone https://github.com/inacio1975/farmacia_sol.git
```

2. Navegue para a pasta do Projecto

```
cd farmacia_sol_3  [Sem esquecer de usar o nome da pasta onde estiverem os ficheiros]
```

3. Instalar packages com composer

```
composer install
```

1. Instalar packages npm usando

```
npm install; npm run dev
```

5. Crie a sua base de dados (mysql)

6. Renomear .env.example para .env Ou copie e cole na pasta raiz do projecto e renomeie o arquivo para .env. Também podes utilizar o seguinte comando.

```
cp .env.example ./.env
```

Se estiver utilizando o windows

```
copy .env.example .\.env
```

7. Gera a chave da aplicação usando o seguinte comando:

```
php artisan key:generate
```

1. Configura a conexão com a base de dados no arquivo .env.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome-da-base-de-dados-criado-no-passo-5
DB_USERNAME=root
DB_PASSWORD=
```

9. Execute as migrações
Utilize o seguinte comando para as executar

```
php artisan migrate --seed
```

1. Inicie o servidor local e navegue para a sua aplicação.
O seguinte comando iniciará o servidor de desenvolvimento

```
php artisan serve
```

1. Abra o endereço que aparece no terminal no seu navegador.Geralmente este endereço é:

```
http://127.0.0.1:8000
```

12. Disfrute.

# Credenciais do Admin

```
 email: admin@admin.com
 senha: admin
```

Tema utilizado: <https://themeforest.net/item/doccure-doctor-appointment-booking-system-bootstrap-angular-template/28201296>

# Usage

- Perfil =>
 Cada usuário tem um perfil próprio.
 Você pode atualizar suas credenciais de perfil nesta página clicando no botão editar.
 Você também pode alterar sua senha clicando na guia segurança
 e escolhendo sua nova senha. Certifique-se também de digitar sua senha antiga corretamente

- Usuários =>
 lista de todos os usuários do sistema.
 Você pode adicionar um novo usuário clicando no botão adicionar usuário na página de usuários.
 Você também pode editar os detalhes do usuário clicando no botão editar na página de usuários.
 Você pode excluir facilmente um usuário clicando no botão excluir.
 Você pode exportar ou imprimir todos os dados do usuário clicando no botão de exportação de dados.

- Controle de Acesso =>
 As funções e permissões do usuário estão aqui.
 Cada usuário no sistema tem uma função e cada função tem um certo número de permissões no sistema.
 Você pode criar novas funções e escolher suas permissões.
 Clique no botão adicionar função e escreva o nome da função e escolha o número de permissões que você deseja.
 você pode editar ou excluir funções clicando no botão editar ou no botão excluir.

- Proveedores =>
 A página de fornecedores tem uma lista de todos os seus fornecedores de produtos.
 Você pode adicionar novos fornecedores clicando no botão adicionar fornecedor na página ou na barra lateral.
 Você também pode editar os detalhes do fornecedor clicando no botão editar na página de fornecedores.
 Você também pode excluir clicando no botão excluir.

- Vendas =>
 A página de vendas tem uma lista de todas as vendas que já foram feitas no sistema.
 Você pode adicionar vendas clicando no botão de vendas na página de vendas.
 Você também pode excluir vendas clicando no botão excluir (Necessário?).
 Você pode exportar ou imprimir os dados de vendas clicando no menu suspenso de exportação de dados na parte superior da lista
 e escolhendo a opção desejada.

- Compras =>
 A página Compras contém todas as suas compras de produtos. Esta é a parte principal do
 seus produtos de aplicação.
 você pode adicionar compras clicando no botão adicionar novo na página de compras ou clicando no botão adicionar compra
 na barra lateral. Depois disso, preencha os dados e envie o formulário.
 Você pode editar as compras clicando no botão editar na página de compras.
 Você também pode excluir a compra clicando no botão excluir na página de compras.
 Você também pode exportar ou imprimir os dados de compras clicando no menu suspenso de exportação de dados E escolha sua opção.

- Productos =>
 A página de produtos contém todos os produtos que você está vendendo.
 Você pode adicionar produto clicando no botão adicionar produto na barra lateral ou adicionar novo botão na página de produtos.

 Você pode editar os detalhes do produto clicando no botão editar na página de produtos
 Ou você também pode excluir o produto clicando no botão excluir na página de produtos.

- Fora de Stock =>
   Esta página contém todos os produtos que estão fora de estoque. Ou seja, quando a quantidade de um produto comprado é zero e não é atualizada,
 É referido como produto esgotado.
 Você não precisa adicionar ou excluir produtos esgotados.
 O sistema reconhece automaticamente os produtos em falta e os coloca lá
 Você também exporta ou imprime também.

 ->Expired =>Esta página contém todos os produtos que expiraram. São produtos cuja data de validade chegou.
O sistema os reconhece automaticamente e os coloca lá para que você não precise adicioná-los você mesmo.

- Categorias =>
 A página de categorias contém as categorias de seus produtos.
 Você pode adicionar categoria de produto clicando no botão adicionar categoria na página de categorias.
 Você também pode editar clicando no botão editar na página de categorias.
 Você pode excluir categorias clicando no botão excluir.

# Como adicionar produto e vendê-lo

1. Primeiro adicione a categoria do produto

2. Adicione o fornecedor do produto

3. Faça uma compra do produto adicionando compra.

4. Após a compra, adicione o produto aos seus produtos.

5. Você pode começar a vender o produto.

6. Ao ser notificado do estoque, basta atualizar a quantidade do produto adquirido.
Ou faça uma nova compra.

![ScreenShot](screenshots/login.png?raw=true "Página de Login")

![Dashboard](screenshots/dashboard.png?raw=true "Dashboard")

![Profile](screenshots/user-profile.png?raw=true "Perfil do Usuário")

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
@@ -242,6 +44,9 @@ We would like to extend our thanks to the following sponsors for funding Laravel
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
