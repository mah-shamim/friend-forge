# Local AI-agent workflow

FriendForge can be developed with an AI coding agent while keeping application data and model inference local.

## Agent rules

Give the agent these constraints:

1. Target PHP 5.6 syntax only.
2. Do not introduce Composer packages requiring newer PHP unless explicitly approved.
3. Use PDO prepared statements.
4. Escape HTML output with `e()`.
5. Keep Ollama calls behind `Ollama.php`.
6. Never send private notes to a hosted API.
7. Never expose database passwords or `.env` contents.
8. Explain every database migration.
9. Add a manual test case for every new feature.

## Suggested prompt

```text
You are the coding agent for FriendForge AI.
The application is PHP 5.6 running in Docker. Ollama is the local AI provider.
Before changing code, inspect the repository structure. Preserve PHP 5.6 compatibility.
Do not add cloud AI calls. Use prepared SQL statements and HTML escaping.
For each change, provide: files changed, reason, code, test steps, rollback notes.
```

## Safe agent loop

1. Ask the agent to inspect only.
2. Ask for a plan.
3. Review the plan.
4. Ask it to implement one feature.
5. Run Docker tests.
6. Inspect the diff.
7. Commit.
8. Move to the next feature.

## Model swapping

Change `OLLAMA_MODEL` in `.env` and pull the model:

```bash
docker compose exec ollama ollama pull MODEL_NAME
```

The PHP application does not need to know the model's internal architecture.
