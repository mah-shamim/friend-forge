# IDE setup

## VS Code

1. Open the `friend-forge` folder.
2. Install PHP Intelephense.
3. Install Docker extension.
4. Install GitLens if desired.
5. Open the integrated terminal.
6. Run `docker compose up -d --build`.
7. Edit PHP files locally; Apache reads the mounted `app` directory immediately.
8. Use `docker compose logs -f app` for errors.

Recommended workspace folders:
- `app/` PHP application
- `docker/` container definitions
- `docs/` documentation
- `storage/` future local/private assets

## PhpStorm

1. Open the project directory.
2. Settings → PHP → CLI Interpreter.
3. Add a Docker Compose interpreter using the `app` service.
4. Set PHP language level to PHP 5.6.
5. Settings → PHP → Servers: add `localhost:8080`.
6. Map project `app` to `/var/www/html`.
7. Configure Docker Compose as the run/debug environment.
8. Run the application in Docker and browse `http://localhost:8080`.

## Sublime Text

1. Open the project folder.
2. Install Package Control.
3. Install a PHP syntax/highlighting package.
4. Install Dockerfile syntax support.
5. Use an external terminal for Docker commands.
6. Edit files under `app/`; the Docker volume makes changes live.
