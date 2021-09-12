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

    php artisan make:controller FinancingController --api

    php artisan make:controller VehicleController --api
```

<h6 align="center">Models</h6>

```bash
    php artisan make:model Financing

    php artisan make:model Hobby
```

<h6 align="center">Migrations</h6>

```bash
    php artisan make:migration create_financing_table

    php artisan make:migration create_vehicles_table
```

<h6 align="center">Factories</h6>

```bash
    php artisan make:factory VehicleFactory

    php artisan make:factory FinancingFactory
```

<h6 align="center">Seeders</h6>

```bash
    php artisan make:seeder UserSeeder

    php artisan make:seeder VehicleSeeder

    php artisan make:seeder FinancingSeeder
```

<h6>⚠️ Atenção - Possívels Erros</h6>

* A porta esperada para enviar as requisições é `8000`, se outra for estabelecida, alterar o conteúdo de `baseURL` em `frontend\src\services\http.js`.

* Caso ocorra algum erro na instalação das dependências do `Laravel` através do `Composer`, deve-se habilitar as extensões presentes no arquivo de configuração `php.ini`.

* O local do arquivo de configuração `php.ini` pode ser visualizado digitando-se `php --ini` no terminal.

* Caso ocorra um erro relacionado ao certificado SSL ao efetuar as requisições para o serviço externo, retornando uma mensagem de erro semelhante à essa `cURL error 60: SSL certificate problem: unable to get local issuer certificate`, pode-se resolver através da resposta presente em `https://stackoverflow.com/questions/24611640/curl-60-ssl-certificate-problem-unable-to-get-local-issuer-certificate`

<h6>Dúvidas ❔</h6>

* Quaisquer dúvidas ou sugestões quanto ao projeto, entrar em contato com <wesleyfloresterres@gmail.com>.