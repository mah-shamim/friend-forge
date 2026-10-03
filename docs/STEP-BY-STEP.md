# Step-by-step setup

## 1. Install Docker Desktop

Install Docker Desktop for Windows/macOS/Linux and verify:

```bash
docker --version
docker compose version
```

## 2. Prepare project

```bash
git clone YOUR-REPOSITORY-URL friend-forge
cd friend-forge
cp .env.example .env
```

Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

## 3. Build containers

```bash
docker compose up -d --build
```

Check:

```bash
docker compose ps
docker compose logs app
docker compose logs db
```

## 4. Install local AI model

```bash
docker compose exec ollama ollama pull qwen2.5:3b
docker compose exec ollama ollama list
```

The first download needs Internet. After the model is downloaded, normal inference can run without Internet.

## 5. Test

Open `http://localhost:8080` and then `AI Chat`.

API health endpoint: `http://localhost:8080/api/health.php`.

## 6. Stop/start

```bash
docker compose stop
docker compose start
```

Remove containers but keep data:

```bash
docker compose down
```

Remove all project volumes/data:

```bash
docker compose down -v
```
