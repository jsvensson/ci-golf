# Klasser

## User

### Model

### Views

#### /join

* `join` --  registrering av ny användare. Controller `user/join`.

#### /home

Allting under `/home` ska kräva inloggning; ska annars ge felmeddelande och länka till användarregistrering.

* `home` -- personlig vy för sin egen användarprofil. Controller `user/home`.
* `home/edit` -- redigering av sin användarprofil. Controller `user/edit`.

#### /user

* `user/(:num)/(:any)` -- vy för ett givet användarkonto. Controller `user/view/$1`.
* `user/login` -- formulärhantering för inloggning; ingen vy. Controller `user/login`.
* `user/logout` -- formulärhantering för utloggning; ingen vy. Controller `user/logout`.

#### /account

* `account/(:num)` administrativ vy för ett givet konto. Controller `user/admin/$1`.

## News