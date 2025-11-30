# Repository Guidelines

## Project Structure & Module Organization
- Laravel 12 app: application code in `app/` (HTTP controllers, jobs, models, policies), configuration in `config/`, routes in `routes/web.php` and `routes/api.php`.
- Views live in `resources/views`; frontend assets in `resources/js` and `resources/css`, built via Vite into `public/`.
- Database factories and seeders sit in `database/factories` and `database/seeders`; migrations in `database/migrations`.
- Tests use PHPUnit: feature tests in `tests/Feature`, unit tests in `tests/Unit`. Example: `tests/Feature/UserRegistrationTest.php`.

## Build, Test, and Development Commands
- `composer setup` — install PHP deps, copy `.env`, generate app key, run migrations, install Node deps, build assets.
- `composer dev` — run PHP server, queue listener, Laravel Pail logs, and Vite dev server concurrently.
- `php artisan serve` — start the API/app server locally.
- `npm run dev` — Vite dev server with hot reload; pairs with `php artisan serve`.
- `npm run build` — production asset build via Vite.
- `composer test` or `php artisan test` — run test suite after clearing cached config.

## Coding Style & Naming Conventions
- PHP follows PSR-12; format with `./vendor/bin/pint` before pushing.
- Controllers: `{Resource}Controller`, jobs: `{Action}Job`, events: `{Noun}Event`, requests: `{Action}Request`, migrations: `YYYY_MM_DD_HHMMSS_create_table.php`.
- Tests end with `*Test.php`; helpers/utilities avoid framework globals where possible and lean on dependency injection.
- JavaScript/TypeScript via Vite: prefer ES modules, kebab-case file names in `resources/js/components` if applicable; Tailwind 4 utility-first CSS in `resources/css`.

## Testing Guidelines
- Prefer feature tests for HTTP flows and policies; unit tests for pure domain logic.
- Use in-memory SQLite or dedicated test DB; seed only what the scenario needs.
- Write assertions for status codes, events, and database state (`assertDatabaseHas`). Target meaningful coverage on new endpoints and jobs.

## Commit & Pull Request Guidelines
- Commits: short imperative subject (e.g., “Add user invite flow”), include scope when helpful.
- PRs: describe intent, note migrations, breaking changes, and manual steps; link issues/tickets. Add screenshots or cURL examples for UI/API changes.
- Keep diffs small and cohesive; include tests or rationale when tests are omitted.

## Security & Configuration Tips
- Never commit secrets; use `.env` for local overrides and `.env.example` updates for new vars.
- Run `php artisan config:clear` after config changes; cache only for production. Validate all request inputs with Form Requests.
