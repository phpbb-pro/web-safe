# phpbb.pro — phpBB extension storefront

A Laravel storefront built in **2020–2021** for commercial phpBB extensions:
Forms and Mixed Content Fixer. It brings together product pages, documentation,
regional pricing, PayPal checkout, purchase fulfilment, and licensed ZIP creation.

This is a sanitized portfolio archive of a historical project, published for code
review. It is not a currently maintained production release. The original 37
commits run from **17 June 2020 to 5 February 2021**; this demonstrates when the
project was built, not six years of continuous maintenance.

## Where to start reviewing

| Area | Implementation |
| --- | --- |
| Payment lifecycle | `app/Http/Controllers/PaymentSetupController.php` creates an order; `PaymentProcessController.php` verifies the webhook, captures payment, and starts fulfilment. |
| Licensed delivery | `app/Packers/Packer.php` builds a customer-specific archive; `FormsPacker.php` selects files for the purchased licence tier. |
| Pricing | `app/Helpers/price.php` and `resources/data/forms/pricing.php` select regional prices using GeoIP. |
| Product UI | Blade templates in `resources/views/`, Sass in `resources/sass/`, and Laravel Mix in `webpack.mix.js`. |
| Data model | `app/Client.php`, `app/FormsBuilderTracker.php`, and `database/migrations/`. |
| Technical writing | Product documentation and the Cloudflare/phpBB article in `resources/views/`. |

The stack is Laravel 8 / PHP, Blade, MySQL, Sass, JavaScript, Laravel Mix 5,
the PayPal Checkout SDK, MaxMind GeoIP, and ZIP packaging. Dependency lockfiles
retain the historical versions rather than presenting this as a modernization.

## Security-related code retained

- The PayPal webhook handler checks the event type and asks PayPal to verify the
  webhook signature before capturing the order.
- The Laravel web middleware includes CSRF verification and cookie encryption.
  The PayPal webhook is excluded from CSRF checks because it uses the separate
  signature verification path.
- Apache configuration redirects HTTP to HTTPS and disables directory listing.
- Credential configuration remains separate from application logic.

These are specific implementation examples, not a claim that the whole archive
is secure for deployment. Authentication/hashing scaffolding is also retained;
its presence does not imply that every endpoint requires authentication.

## Historical limitations

The builder endpoint currently falls back to client ID 1 when a key is unknown;
it does **not** enforce licence access. The payment flow, duplicate webhook
handling, download access, input validation, and dependency versions need a
fresh review before any production use. Those historical behaviours are visible
rather than disguised by the publication cleanup.

This repository contains the storefront, not the private extension source or
customer files. ZIP fulfilment needs extension files under `storage/app/exts/`;
the builder endpoint needs `storage/app/form-builder.js`. These are deliberately
absent. `process.php` is a separate legacy IPN implementation retained for
historical review; it also references absent dependencies (`PaypalIPN.php` and
PHPMailer) and is not part of the Laravel routes.

## Local exploration

Use an isolated local environment compatible with the committed Composer and
npm lockfiles. `composer.json` declares PHP `^7.2.5`; locked dependencies impose
additional constraints. Laravel Mix 5 uses an older webpack toolchain. This
cleanup has not upgraded or verified those runtimes.

```sh
cp .env.example .env
composer install
php artisan key:generate
```

Set the local database connection in `.env`, then:

```sh
php artisan migrate
npm ci
npm run development
php artisan serve --host=127.0.0.1
```

GeoIP pricing needs a locally provisioned MaxMind database. If configuring it,
set your own `MAXMIND_LICENSE_KEY` and run `php artisan geoip:update`.
PayPal exploration requires your own sandbox credentials and webhook ID.
The sample mail transport writes locally to logs; it does not send messages.
Production analytics IDs, recipient addresses, and the hosted purchase button
are omitted. Optional analytics and purchase BCC remain off until configured.
Never use actual customer data for local demonstrations.

PHP, Composer, and installed application dependencies were unavailable in the
cleanup environment, so a Laravel boot, checkout integration, and asset build
were not verified. History integrity and sanitization were verified separately.

## Publication history

Sensitive literals and private email addresses were removed across the original
history, including commit identity emails. Original author names, commit
messages, timestamps, timezones, and parent relationships are retained. Commit
hashes changed, and old signatures were removed because rewritten commits
cannot retain valid original signatures. A new, honestly dated commit records
the portfolio documentation and safe configuration defaults.

Third-party attribution and dependency metadata remain intact. The licence
texts under `public/license/` describe the original commercial extension offers;
they do not automatically grant a licence to reuse this storefront. No new
licence grant has been added as part of publication.
