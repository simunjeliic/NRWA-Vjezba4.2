# About
Simple WebApp displaying use of MVC using Laravel framework

# Setup
After cloning the app you should import the world.sql database that can be found [here.](https://dev.mysql.com/doc/index-other.html
)<br>
After you import the database you should setup your .env file so your database is connected to the app.<br>
Place yourself in the root folder of the app and execute `composer install` and `php artisan key:generate`<br>

# Running 
Execute `php artisan serve`

# Testing in Postman

## Test user

email: user@sum.ba<br>
password: 1234<br>
Authentication type : Basic Auth<br>

## Create city/country
url: http://127.0.0.1:8000/api/city<br>
method: POST<br>
data: { "Name": "TestCity", "CountryCode": "AFG", "District": "TestDistrict", "Population": 12345 }<br><br>
url: http://127.0.0.1:8000/api/country<br>
method: POST<br>
data: { "Code": "AAA", "Name": "TestCountry", "Continent": "North America", "Region": "Caribbean", "SurfaceArea": 196, "Population": 10000, "LocalName": "TestName", "GovernmentForm": "TestForm", "Code2": "AW" }

## Update city/country
url: http://127.0.0.1:8000/api/city/{id}<br>
method: PUT/PATCH<br>
data: { "Name": "UpdatedCity", "CountryCode": "AFG", "District": "UpdatedDistrict", "Population": 54321 }<br><br>
url: http://127.0.0.1:8000/api/country/{code}<br>
method: PUT/PATCH<br>
data: { "Code": "AAA", "Name": "UpdatedName", "Continent": "North America", "Region": "Caribbean", "SurfaceArea": 196, "Population": 10000, "LocalName": "UpdatedName", "GovernmentForm": "UpdatedForm", "Code2": "AW" }

## Get all cities/countries
url: http://127.0.0.1:8000/api/city/<br>
method: GET<br><br>
url: http://127.0.0.1:8000/api/country<br>
method: GET<br>

## Get single city/country
url: http://127.0.0.1:8000/api/city/{id}<br>
method: GET<br><br>
url: http://127.0.0.1:8000/api/country/{code}<br>
method: GET

## Delete city/country
url: http://127.0.0.1:8000/api/city/{id}<br>
method: DELETE<br><br>
url: http://127.0.0.1:8000/api/country/{code}<br>
method: DELETE
