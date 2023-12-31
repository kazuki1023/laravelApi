# laravelApi
laravelでAPIを叩いてみる
- ます楽天APIを叩いてみて、検索したら商品情報を取得できるようにする。

## 仕様
- ![検索画面](./img/dashboard.png)
- 検索


https://github.com/kazuki1023/laravelApi/assets/107235222/d6506bf7-e421-4e9a-b2cb-12ea2f806a66


## 環境構築方法
1. 
```
docker compose build && docker compose up -d
```

2. 
```
docker compose exec phpfpm bash
```

3. 
```
composer create-project --prefer-dist laravel/laravel . "10.*"
```

http://localhost
にアクセスして、Laravelの画面が表示されたら成功です

4. .envのDBの部分を中身を以下に書き換えてください
<details>

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
```
</details>

5. 以下は、phpfomコンテナ内でそこで実行してね
```console
composer install
php artisan optimize:clear
php artisan migrate:fresh --seed
```

6. laravelのbreezeをinstallしていく(初回のみ)

7. phpfpmコンテナの中で以下のコマンドを実行してください
```console
composer require laravel/breeze --dev
php artisan breeze:install
```

8. nodeコンテナの中で以下のコマンドを実行してください
```
npm install
npm run build
```

9. 以下のコマンドを実行してください
```
composer require guzzlehttp/guzzle
composer require rakuten-ws/rws-php-sdk
```

10. .envに以下を追記してください（ただし、apiのkeyは自分で発行してください）
```
RAKUTEN_APPLICATION_ID=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```
