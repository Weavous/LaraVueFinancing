<h2 align="center">Laravel Financing</h2>

<p align="center">
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/license/Weavous/LaraVueFinancing">
    </a>
    <a href="#">
        <img alt="Languages" src="https://img.shields.io/github/languages/count/Weavous/LaraVueFinancing">
    </a>
    <a href="#">
        <img alt="Last Commit" src="https://img.shields.io/github/last-commit/Weavous/LaraVueFinancing">
    </a>
</p>

<p align="center">Development of an application to simulating vehicles financing</p>

<h4 align="center">Instructions <a href="https://gitlab.com/felipe.furtuoso538/pontential-crud">🔗</a></h4>

<p align="center">Instructions for developing the application can be found in the icon above.</p>

<h4 align="center">Installation ⚙️</h4>

<h6 align="center"><a href="https://iconscout.com">✔️</a> Requirements</h6>

<p align="center">
    <a href="https://www.php.net"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/php-3629567-3032350.png" alt="PHP Logo"></a>
    <a href="https://laravel.com"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/laravel-2038872-1720085.png" alt="Laravel Logo"></a>
    <a href="https://www.mysql.com"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/mysql-3628940-3030165.png" alt="MySQL Logo"></a>
    <a href="https://git-scm.com"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/git-16-1175195.png" alt="Git Logo"></a>
    <a href="https://getcomposer.org"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/composer-285363.png" alt="Composer Logo"></a>
    <a href="https://www.docker.com"><img width="10%" src="https://cdn.iconscout.com/icon/free/png-256/docker-10-1175197.png" alt="Docker Logo"></a>
</p>

```typescript
    return [
        {
            dependency: "PHP",
            url: "https://www.php.net",
            version: 7.4.21,
            img: "https://cdn.iconscout.com/icon/free/png-256/php-3629567-3032350.png"
        },
        {
            dependency: "Laravel",
            url: "https://laravel.com",
            version: 8.58.0,
            img: "https://cdn.iconscout.com/icon/free/png-256/laravel-2038872-1720085.png"  
        },
        {
            dependency: "MySQL",
            url: "https://www.mysql.com",
            version: 8.0.25,
            img: "https://cdn.iconscout.com/icon/free/png-256/mysql-3628940-3030165.png"
        },
        {
            dependency: "Git",
            url: "https://git-scm.com",
            version:  2.32.0,
            img: "https://cdn.iconscout.com/icon/free/png-256/git-16-1175195.png"
        },
        {
            dependency: "Composer",
            url: "https://getcomposer.org",
            version: 2.1.3,
            img: "https://cdn.iconscout.com/icon/free/png-256/composer-285363.png"
        },
        {
            dependency: "Docker",
            url: "https://www.docker.com",
            version: 20.10.8,
            img: "https://cdn.iconscout.com/icon/free/png-256/composer-285363.png"  
        }
    ];
```

<h6 align="center">Backend 🛰</h6>

```bash
    composer create-project laravel/laravel server
```

<h6 align="center">Storage</h6>

```sql
    CREATE DATABASE custom_development_financing;
```

<p align="center">Next, add the following database configuration information</p>

```txt
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<database-name>
    DB_USERNAME=<database-username>
    DB_PASSWORD=<database-password>
```

<h6 align="center">JWT Guide Link<a href="https://www.avyatech.com/rest-api-with-laravel-8-using-jwt-token">🔐</a></h6>

<p align="center">Guide link to implement JSON Web Token (JWT) authentication</p>

<h6 align="center">Resources</h6>

```bash
    php artisan make:resource FinancingResource

    php artisan make:resource VehicleResource
```

<h6 align="center">Controllers</h6>

```bash
    php artisan make:controller AuthController

    php artisan make:controller BrandController --api

    php artisan make:controller FinancingController --api

    php artisan make:controller TypeController --api

    php artisan make:controller VehicleController --api
```

<h6 align="center">Models</h6>

```bash
    php artisan make:model Brand

    php artisan make:model Financing

    php artisan make:model Type

    php artisan make:model Vehicle
```

<h6 align="center">Migrations</h6>

```bash
    php artisan make:migration create_financing_table

    php artisan make:migration create_types_table

    php artisan make:migration create_vehicles_table

    php artisan make:migration create_brands_table
```

<h6 align="center">Factories</h6>

```bash
    php artisan make:factory FinancingFactory

    php artisan make:factory VehicleFactory
```

<h6 align="center">Seeders</h6>

```bash
    php artisan make:seeder FinancingSeeder

    php artisan make:seeder TypeSeeder

    php artisan make:seeder UserSeeder

    php artisan make:seeder VehicleSeeder

    php artisan make:seeder BrandSeeder
```

<h6 align="center">JWT</h6>

```bash
    composer require tymon/jwt-auth

    php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

    php artisan jwt:secret

    php artisan make:middleware JwtMiddleware
```

<h6 align="center">Tests</h6>

```bash
    php artisan make:test JWTAuthTest

    php artisan make:test FinancingControllerTest
```

<span>Edit `server\phpunit.xml`, setting `DB_CONNECTION` and `DB_DATABASE` values</span>

<h6 align="center">Launch 🚀</h6>

```bash
    git clone https://github.com/Weavous/LaraVueFinancing
```

```bash
    cd LaraVueFinancing
```

<h6 align="center">Set up Application 🚀</h6>

```bash
    cd server
```

```bash
    cp .env.example .env
```

<p align="center">You must specify the environment configuration in <em>.env</em> file</p>

```bash
    composer i
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan jwt:secret
```

```bash
    php artisan serve
```

<h6 align="center">Set up Front-end 🚀</h6>

```bash
    vue init webpack-simple frontend
```

```bash
    cd frontend
```

```bash
    npm install
```

```bash
    npm run dev
```

```bash
    npm	install	axios --save
```

```bash
    npm install vue-router --save
```

<h6 align="center">Run with Docker</h6>

After doing the project setup, follow the steps.

Clone the repository https://github.com/Whopag/DockerPHPMySQL

Copy the contents of `LaraVueFinancing/server` to `DockerPHPMySQL/html`

Inside `DockerPHPMySQL`, build an image of the project

```bash
    docker-compose up -d --build
```

Change the content of the following environment variables

```bash
    DB_HOST=dockerphpmysql_mysql_1
    DB_PASSWORD=secret
    DB_DATABASE=laravel
```

Run Laravel migrations

```bash
    docker-compose run --rm artisan migrate --seed
```

Create an Laravel application key

```bash
    docker-compose run --rm artisan key:generate
```

<h6 align="center">Testing User</h6>

```typescript
    return {
        email: "johndoe@example.com",
        password: "secret"
    }
```

<h5 align="center">Noções básicas sobre a aplicação</h5>

<h6 align="center">Authentication</h6>

`POST` `/api/registers` criará um novo registro de usuário

`POST` `/api/auth/login` retornará um token de autorização para um usuário previamente cadastrado no sistema

`POST` `/api/auth/logout` encerrará o token de autorização previamente criado para um usuário autenticado

`GET` `/api/auth/user` retornará os dados de cadastro de um usuário

<h6 align="center">Vehicles</h6>

| Method | Uri | Description | Code |
| --- | --- | -- | -- |
| GET | /api/v1/vehicles?page=n&paginate=n | Retorna todos os veículos | 200 |
| GET  | /api/v1/vehicles/{id} | Display the specified vehicle | 200 / 404 |
| POST | /api/v1/vehicles | Store a newly created vehicle in storage | 201 / 400 |
| DELETE | /api/v1/vehicles/{id} | Remove the specified vehicle from storage | 204 / 400 |
| PUT | /api/v1/vehicles/{id} | Update the specified vehicle in storage | 200 / 400 |

<h6 align="center">Financing</h6>

| Method | Uri | Description | Code |
| --- | --- | -- | -- |
| GET | /api/v1/financing?page=n&paginate=n | Get all financing | 200 |
| GET  | /api/v1/financing/{id} | Display the specified financing | 200 / 404 |
| POST | /api/v1/financing | Store a newly created financing in storage | 201 / 400 |
| DELETE | /api/v1/financing/{id} | Remove the specified financing from storage | 204 / 400 |
| PUT | /api/v1/financing/{id} | Update the specified financing in storage | 200 / 400 |

<p align="center">4 folder structures to organize your React & React Native project <a href="https://reboot.studio/blog/folder-structures-to-organize-react-project">💾</a></p>

<h6>⚠️ Atenção - Possívels Erros</h6>

* A porta esperada para enviar as requisições é `8000`, se outra for estabelecida, alterar o conteúdo de `baseURL` em `frontend\src\services\http.js`.

* Caso ocorra algum erro na instalação das dependências do `Laravel` através do `Composer`, deve-se habilitar as extensões presentes no arquivo de configuração `php.ini`.

* O local do arquivo de configuração `php.ini` pode ser visualizado digitando-se `php --ini` no terminal.

* Caso ocorra um erro relacionado ao certificado SSL ao efetuar as requisições para o serviço externo, retornando uma mensagem de erro semelhante à essa `cURL error 60: SSL certificate problem: unable to get local issuer certificate`, pode-se resolver através da resposta presente em `https://stackoverflow.com/questions/24611640/curl-60-ssl-certificate-problem-unable-to-get-local-issuer-certificate`

<h6>Dúvidas ❔</h6>

* Quaisquer dúvidas ou sugestões quanto ao projeto, entrar em contato com <wesleyfloresterres@gmail.com>.