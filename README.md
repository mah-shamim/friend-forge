# FriendForge AI — Build for a Friend

A privacy-first personal AI companion built around **PHP 5.6 + Docker + MySQL + Ollama/open-weight AI**.

## The friend problem

FriendForge is designed for one real friend who is trying to improve English, organize daily tasks, and practice conversations but does not want private notes and practice data sent to a third-party AI service.

The project combines:
- private notes and goals
- daily tasks
- vocabulary practice
- AI conversation practice
- AI-generated study plans
- local AI inference through Ollama
- model swapping without changing the PHP application

## Why open innovation matters

The application does not require a hosted AI API. Ollama can run an open-weight model locally, so prompts and saved practice data can stay on the user's machine. Models can be swapped through configuration, and the AI endpoint is a simple HTTP API that can be replaced by another local inference server.

This is especially useful for personal data: the friend controls the computer, database, model and prompts.

## Stack

- PHP 5.6 / Apache
- MySQL 5.7
- Bootstrap 3
- jQuery 1.x/2.x compatible JavaScript
- Ollama (separate container)
- Docker Compose

> PHP 5.6 is end-of-life. This project intentionally targets PHP 5.6 for the requested learning/legacy-compatible environment. Do not expose it directly to the public Internet without a hardened reverse proxy and additional security work.

## Quick start

1. Install Docker Desktop.
2. Clone/extract this project.
3. Copy `.env.example` to `.env`.
4. Run:

```bash
docker compose up -d --build
```

5. Pull an Ollama model:

```bash
docker compose exec ollama ollama pull qwen2.5:3b
```

6. Open `http://localhost:8080`.

Default database:
- host: `db`
- database: `friendforge`
- user: `friendforge`
- password: `friendforge`

## IDE setup

See `docs/IDE-SETUP.md` for VS Code, PhpStorm and Sublime Text.

## AI-agent setup

See `docs/AI-AGENT.md` for an editor-independent agent workflow, safe prompt rules, local model configuration and a step-by-step development loop.

## Full feature map

Implemented in this starter:
- Dashboard
- Goals
- Tasks
- Notes
- Vocabulary
- AI chat
- AI study-plan generation
- Local model health check
- Configurable Ollama endpoint/model

Suggested next integrations are documented in `docs/FEATURE-ROADMAP.md`.

## Security notes

- Change database credentials before any real deployment.
- Add authentication/authorization before multi-user use.
- Escape output and validate all input.
- Add CSRF protection to every state-changing form.
- Never expose Ollama's management endpoint publicly.
- Keep the AI container on the private Docker network.
