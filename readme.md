# Laravel ( 5.2 )  with oAuth2.0 server 

project based on PHP OAuth 2.0 Server for Laravel [ https://github.com/lucadegasperi/oauth2-server-laravel ]


    1 . clone this project git clone https://github.com/itranga/Laravel5-2-oauth2-server-.git foldername
    2 . composer update
    3 . configure database setting in ".env" file
    4 . then run " php artisan migrate "
    5 . Next add a sample client to the oauth_clients table. 
    6 . Next add a sample users to the users table. 
    7 . To test the server run php artisan serve , then in REST Client ( eg. postman ) , make a POST request to ( http://localhost:8000/oauth/access_token )
    8 . To test the api REST Client ( eg. postman ) , make a POST request to ( localhost:8000/api?access_token=access_token )


