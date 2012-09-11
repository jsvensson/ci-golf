# Klasser

## User

### Model

### Views

#### /join

* `join` --  registrering av ny användare. Controller `user/join`.

#### /create (Använda?)

* `create` -- skapa ny användare. Controller `user/create`. Används enbart av formulär. Dirigerar om till inloggning om en ny användare registrerar sig, eller `account/(:num)` om kontot skapas av en admin.

#### /home

Allting under `/home` ska kräva inloggning; ska annars ge felmeddelande och länka till användarregistrering.

* `home` -- personlig vy för sin egen användarprofil. Controller `user/home`.
* `home/edit` -- redigering av sin användarprofil. Controller `user/edit`.

#### /user

* `user/(:num)/(:any)` -- vy för ett givet användarkonto. Controller `user/view/$1`.

#### /account

* `account/(:num)` administrativ vy för ett givet konto. Controller `user/admin/$1`.

## News