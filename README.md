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

1. Veículos: representa cada veículo na frota, com atributos como marca, modelo, ano, número de série e data de aquisição.
2. Funcionários: representa cada funcionário da empresa, com atributos como nome, cargo e data de contratação.
3. Manutenções e Reparações: representa cada manutenção ou reparação realizada em um veículo, com atributos como data, custo e tipo de trabalho.
4. Usuários: representa cada usuário do sistema, com atributos como nome, cargo e data de cadastro.

## Relações:
1. Veículos tem um Funcionário: representa a relação entre um veículo e o funcionário atualmente atribuído a ele.
2. Veículos tem várias Manutenções e Reparações: representa a relação entre um veículo e as manutenções e reparações realizadas nele.
3. Funcionários tem vários Veículos: representa a relação entre um funcionário e os veículos atribuídos a ele.
4. Usuários tem um Funcionário: representa a relação entre um usuário do sistema e o funcionário que ele representa.

![Diagrama ER](public/assets/img/der2.png?raw=true "Diagrama ER")

Este é um exemplo de como poderia ser o DER para esse sistema, poderia haver outras entidades e relações dependendo das necessidades específicas do negócio. É importante que seja feito uma análise detalhada das necessidades do negócio para garantir que o DER seja o mais preciso e eficiente possível.

# Controlo de Acesso (Restrições nas opções do Menu)
## Roles
Os roles, definido como sendo igual o tipo de usuario (Grupos de usuários) ajudam a limitar as opções disponíveis para cada grupo.

Assim, é possível limitar as opções disponíveis para o utilizador em função do grupo a que pertence.

## Permissões (Permissions)
As permissões determinam o que se pode fazer pou não na aplicação. Cada role é definido por um conjunto de permissões.
Se um utilizador lhe é assignado um role, esse utilizador passa ter as permissões deste role (e dessa forma, as opções do menu muda para este utilizador).

Este sistema é implementado na base de dados usando as tabelas (Entidades) 
 - roles
 - permissions
 - role_has_permissions

# Instalação

 Segue os seguintes passos para instalar a aplicação (terminal)

1. Clone the Repository

```
git clone https://github.com/inacio1975/gestao_frotas.git
```

2. Navegue para a pasta do Projecto

```
cd path/to/project  [Sem esquecer de usar o nome da pasta onde estiverem os ficheiros]
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
php artisan migrate:fresh --seed
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
 email: admin@srm.co.ao
 senha: secret
```

# Ferramentas
Tema utilizado: <https://www.creative-tim.com/product/soft-ui-dashboard>

# Telas
1. Tela de Login
![ScreenShot](public/assets/img/screenshots/login.jpeg?raw=true "Página de Login")

2. Dashboard
![Dashboard](public/assets/img/screenshots/dashboard.jpeg?raw=true "Dashboard")

3. Lista de Utilizadores
![Utilizadores](public/assets/img/screenshots/utilizadores.jpeg?raw=true "Lista de Utilizadores no sistema")

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
