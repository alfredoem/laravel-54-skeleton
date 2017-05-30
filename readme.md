## Laravel 5.4 Skeleton

### Configuration

Install dependencies

    composer install

Configure the database connection in your `.env` file and run the next command to create the tables in the database

    php artisan migrate
    
Next poblate the database tables

    php artisan db:seed
    
### API Token Test


Send a GET HTTP request with the next headers:

`Content-Type: application/json`

`Accept: application/json`

to the endpoint

`/api/user?api_token=`

and replace the query string param `api_token` value with the value of the `column api_token` of the user generated in the `table users` (must be something like this 5AgOw2bFzgpdBc9gvgfBiXOtoTjFqvu8YD1moRjrBHg9qNjtlrMK1gATTDo9)


You also can send the `api_token` in the request headers, add the next headers:

`Content-Type: application/json`

`Accept: application/json`

`Ahorization: Bearer :api_token`

replace `:api_token` with the user api_token value

and send the request to the endpoint without the query string param

`/api/user`