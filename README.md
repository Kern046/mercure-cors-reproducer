Mercure CORS Reproducer
=======================

Setup
-----

I used Symfony CLI to handle the project with `local.mercure.wip` as the attached domain.

Mercure is installed with Docker.

```
docker-compose up -d
symfony composer install
symfony proxy:domain:attach local.mercure
symfony proxy:start
symfony serve -d
```

Reproduce
---------

When you visit [``https://local.mercure.wip``](https://local.mercure.wip),
you will notice a `CORS` issue in the console when accessing to `https://127.0.0.1/.well-known/mercure`.

If you need to test the PUSH operation, you can go to [`https://local.mercure.wip/users`](https://local.mercure.wip/users).
The PUSH operation does work.