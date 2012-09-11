# Klasser

## User

### Model

### Views

#### /register

* `register` --  registrering av ny användare. Controller `user/register`.

#### /home

Allting under `/home` ska kräva inloggning; ska annars ge felmeddelande och länka till användarregistrering.

* `home` -- personlig vy för sin egen användarprofil. Controller `user/index`.
* `home/edit` -- redigering av sin användarprofil. Controller `user/edit`.

#### /user

* `user/(:num)/(:any)` -- vy för ett givet användarkonto. Controller `user/view/$1`.

#### /account

* `account/(:num)` administrativ vy för ett givet konto. Controller `user/admin/$1`.

## News