## How to

1. Sail Up

```bash
$ ./vendor/bin/sail up -d
```

2. Migrate Database and Seeding Database + Redis

```bash
$ ./vendor/bin/sail artisan migrate:fresh --seed
```

> You can combine this project with JWT Authentication, if your case need role/approved by spesific User
> You can Store Token in MySQL or Redis, in this Project i Choose Redis for storing Approval token, because you can set EXPIRE easily

> See ***http.rest*** for see the routing flow