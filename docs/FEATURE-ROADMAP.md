# Feature roadmap / possible integrations

## Core personal features
- Friend profile and preferences
- Goals with milestones
- Calendar/day planner
- Habit tracker
- Private journal
- Mood-free reflection prompts (without medical claims)
- Reminders
- Search across notes
- Export/import JSON
- CSV vocabulary import

## AI features
- English conversation role-play
- Vocabulary generation from notes
- Grammar correction
- Daily study plan
- Quiz generation
- Summarize selected private notes locally
- Retrieval-augmented Q&A over local documents
- Prompt templates per friend
- Model selector
- Temperature/token controls where supported
- Local embeddings/vector search

## Privacy/security
- Login/logout
- Password hashing
- CSRF protection
- Role permissions
- encrypted backups
- audit log
- automatic local backup
- data deletion/export

## Integrations
- Local Whisper for voice transcription
- Piper for offline text-to-speech
- Calendar ICS import/export
- Telegram/WhatsApp only through an explicit opt-in gateway; avoid sending private data by default
- GitHub/GitLab issue import for developer friends
- email reminders through a configurable SMTP service
- OCR for scanned notes

## Architecture extensions
Keep `Ollama.php` as an adapter. Future adapters can target:
- another local HTTP inference server
- llama.cpp server
- a self-hosted OpenAI-compatible endpoint

This makes the AI provider replaceable rather than hard-coded into business logic.
