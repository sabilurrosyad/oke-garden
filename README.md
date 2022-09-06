# Sabilurrosyad
### CRUD simpel menggunakan Laravel 8

```sh
Account:
- user@example.com
- gardener@example.com
- designer@example.com
masing-masing menggunakan password: 123.
```
### Fitur
- Menampilkan values pada table "Information" di  database "roles_permission"
- Menambahkan values ke table "Information" 
- Mengubah values dari table berdasarkan id
- Menghapus isi table berdasarkan id

Sistem yang sudah dilengkapi customize middleware, jadi yang mengharuskan user untuk login jika ingin mendapatkan informasi dari data yang ada pada website.

route common section yang bisa digunakan tanpa harus login:
```sh
- /home
- /default
```

route admin section yang hanya bisa diakses jika user dengan role admin:
```sh
- /home
- /default
- /home1
- /tambahpengguna
- /insertdata
- /delete/{id}
- /updatedata/{id}
- /tampilkandata/{id}
```

Berjalan pada server:
```sh
127.0.0.1:8000
```
