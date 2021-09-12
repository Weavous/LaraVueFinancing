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