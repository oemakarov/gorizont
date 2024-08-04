-----

<div align="center">
<h2>ERP beyond your fridge</h2>
<h3>Gorizont is a web-based self-hosted groceries & household management solution for your home</h3>
<em><h4>This is a hobby project by <a href="https://github.com/berrnd">@berrnd</a></h4></em>
</div>

-----


```markdown
# ERP Система Управления Бизнесом

## Описание проекта

Данный проект представляет собой ERP (Enterprise Resource Planning) систему, разработанную для автоматизации и оптимизации бизнес-процессов. Система обеспечивает управление заказами, финансами, складскими запасами, производственными процессами, кадровым составом и многими другими аспектами бизнеса. Она разработана с учетом современных технологий и архитектурных принципов, что позволяет обеспечить высокую степень безопасности, производительности и масштабируемости.

## Общие требования

- Разработка на основе современных технологий и архитектурных принципов.
- Высокая степень безопасности данных и доступа к системе.
- Поддержка множества пользователей с различными уровнями доступа.
- Интеграция с другими системами (бухгалтерские программы, складские системы и др.).
- Поддержка мобильных устройств для доступа к системе.

## Функциональные возможности

- **Управление заказами и процессом продаж.**
- **Учет финансовой деятельности:** учет расходов, доходов и отчетность.
- **Управление складскими запасами и инвентаризацией.**
- **Управление производственными процессами:** планирование и контроль выполнения заказов.
- **Аналитика данных и формирование отчетов.**
- **Управление кадровым составом и зарплатами.**
- **Интеграция с электронными платежными системами.**
- **CRM модуль** для управления контактами клиентов и автоматизации маркетинговых кампаний.
- **Модуль управления проектами** для планирования задач и контроля выполнения сроков.
- **Модуль управления закупками** для автоматизации процесса закупок.
- **Модуль сервисной поддержки (Helpdesk)** для регистрации запросов пользователей.
- **Модуль управления документами** для хранения и организации документации.
- **Модуль анализа рисков** для оценки потенциальных угроз и разработки стратегий минимизации.

## Интерфейсные требования

- Интуитивно понятный и удобный пользовательский интерфейс.
- Поддержка различных языков интерфейса.
- Возможность настройки пользовательского интерфейса в соответствии с потребностями пользователя.

## Требования к производительности

- Высокая скорость работы системы даже при большом объеме данных и пользователей.
- Масштабируемость системы для возможности расширения функционала и увеличения количества пользователей.

## Требования к безопасности

- Защита данных от несанкционированного доступа.
- Возможность резервного копирования и восстановления данных.
- Шифрование данных при передаче и хранении.

## Поддержка и обновления

- Техническая поддержка и регулярные обновления системы.
- Документация по использованию и администрированию системы.
- Обучение пользователей работе с системой.

## Интеграция

- Возможность интеграции с другими информационными системами компании.
- Поддержка стандартных протоколов для обмена данными.

## Отказоустойчивость

- Резервное копирование данных и возможность быстрого восстановления после сбоев.
- Мониторинг состояния системы для оперативного реагирования на проблемы.

## Аудит и логирование

- Возможность отслеживания изменений в данных и действиях пользователей для обеспечения прозрачности работы системы.
- Логирование действий пользователей для контроля и аудита.

## Документация

- Подробная документация по функциональности, настройкам, администрированию и интеграции системы.

## Мобильное приложение

- Доступно для установки на iOS и Android устройства.
- Функциональность соответствует основным возможностям веб-версии.
- Поддержка авторизации по отпечатку пальца и другим биометрическим методам.

## Аналитика данных

- Создание персонализированных дашбордов с ключевыми показателями производительности.
- Интеграция с инструментами бизнес-аналитики.
- Автоматическая генерация отчетов и уведомлений.

## Установка и запуск

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/oemakarov/gorizont.git
   ```
2. Установите зависимости:
   ```bash
   cd ваш_репозиторий
   npm install
   ```
3. Запустите приложение:
   ```bash
   npm start
   ```

## Лицензия



## Контакты

Для вопросов и предложений свяжитесь по электронной почте: [oemakarov@github.com](mailto:oemakarov@github.com).
```


-----
## Give it a try

- Public demo of the latest stable version (`release` branch) &rarr; [https://demo.Gorizont.info](https://demo.Gorizont.info)
- Public demo of the current development version (`master` branch) &rarr; [https://demo-prerelease.Gorizont.info](https://demo-prerelease.Gorizont.info)

## Features

See the website. &rarr; <https://Gorizont.info>



## Community contributions

See the website for a list of community contributed Add-ons / Tools. &rarr; [https://Gorizont.info/addons](https://Gorizont.info/addons)

## How to install

> Checkout [Gorizont Desktop](https://github.com/Gorizont/Gorizont-desktop), if you want to run Gorizont without having to manage a webserver just like a normal (Windows) desktop application.
>
> Directly download the [latest release](https://releases.Gorizont.info/latest-desktop) - the installation is nothing more than just clicking 2 times "next".

Gorizont is technically a pretty simple PHP application, so the basic notes to get it running are:
- Unpack the [latest release](https://releases.Gorizont.info/latest)
- Copy `config-dist.php` to `data/config.php` + edit to your needs
- Ensure that the `data` directory is writable
- The webserver root should point to the `public` directory
- Include `try_files $uri /index.php$is_args$query_string;` in your location block if you use nginx
  - Or disable URL rewriting (see the option `DISABLE_URL_REWRITING` in `data/config.php`)
- &rarr; Default login is user `admin` with password `admin`, please change the password immediately (user menu at the top right corner)

Alternatively clone this repository (the `release` branch always references the latest released version) and install Composer and Yarn dependencies manually.

See the website for more installation guides and troubleshooting help. &rarr; [https://Gorizont.info/links](https://Gorizont.info/links)

### Platform support

- PHP 8.2 or 8.3 (with SQLite 3.34.0+)
  - Required PHP extensions: `fileinfo`, `pdo_sqlite`, `gd`, `ctype`, `intl`, `zlib`, `mbstring`
  - _Recommendation: Benchmark tests showed that e.g. unit conversion handling is up to 5 times faster when using a more recent (3.39.4+) SQLite version._
- Recent Firefox, Chrome or Edge

## How to run using Docker

See [Gorizont/Gorizont-docker](https://github.com/Gorizont/Gorizont-docker) or [linuxserver/docker-Gorizont](https://github.com/linuxserver/docker-Gorizont) for instructions.

## How to update

- Overwrite everything with the [latest release](https://releases.Gorizont.info/latest) while keeping the `data` directory
- Check `config-dist.php` for new configuration options and add them to your `data/config.php` where appropriate (the default values from `config-dist.php` will be used for not in `data/config.php` defined settings)
- Empty the `data/viewcache` directory
- Visit the main route once to apply database migrations ([see below](https://github.com/Gorizont/Gorizont#database-migrations))

If you run Gorizont on Linux, there is also `update.sh` (remember to make the script executable (`chmod +x update.sh`) and ensure that you have `unzip` installed) which does exactly this and additionally creates a backup (`.tgz` archive) of the current installation in `data/backups` (backups older than 60 days will be deleted during the update).

## Localization

Gorizont is fully localizable - the default language is English (integrated into code), a German localization is always maintained by me.

You can easily help translating Gorizont on [Transifex](https://www.transifex.com/Gorizont/Gorizont/dashboard/) if your language is incomplete or not available yet.

The default language can be set in `data/config.php`, e. g. `Setting('DEFAULT_LOCALE', 'it');` and there is also a user setting (see the user settings page) to set a different language per user.

The [pre-release demo](https://demo-prerelease.Gorizont.info) is available for any translation which is at least 70 % complete and will pull the translations from Transifex 10 minutes past every hour, so you can have a kind of instant preview of your contributed translations. Thank you!

Also any translation which once reached a completion level of 70 % ([`strings` resource](https://www.transifex.com/Gorizont/Gorizont/strings/)) will be included in releases.

_RTL languages are unfortunately not yet supported._

## Motivation

A household needs to be managed. Before Gorizont I did this (for almost 10 years) using my first self written software (a C# Windows forms application) and with a bunch of Excel sheets. The software was a pain to use at the end and Excel is Excel. So I searched for and tried different things for a (very) long time, nothing 100 % fitted, so this is my aim for a "complete household management"-thing. ERP your fridge!

## Things worth to know

### REST API

See the integrated Swagger UI instance on [/api](https://demo.Gorizont.info/api).

The web frontend uses exactly this API for pretty much everything. So everything you can do there is also possible via the API.

### Barcode readers & camera scanning

Some fields (with a barcode icon above) also allow to select a value by scanning a barcode. It works best when your barcode reader prefixes every barcode with a letter which is normally not part of a item name (I use a `$`) and sends a `TAB` after a scan.

Additionally it's also possible to use your device camera to scan a barcode by using the camera button on the right side of the corresponding field (powered by [Quagga2](https://github.com/ericblade/quagga2), totally offline / client-side camera stream processing, please note due to browser security restrictions, this only works when serving Gorizont via a secure connection (`https://`)). Quick video demo: <https://www.youtube.com/watch?v=Y5YH6IJFnfc>

_My personal recommendation: Use a USB barcode laser scanner. They are cheap and work 1000 % better, faster, under any lighting condition and from any angle._

### Input shorthands for date fields

For (productivity) reasons all date (and time) input (and display) fields use the ISO-8601 format regardless of localization.
The following shorthands are available:
- `MMDD` gets expanded to the given day on the current year, if > today, or to the given day next year, if < today, in proper notation
  - Example: `0517` will be converted to `2024-05-17`
- `YYYYMMDD` gets expanded to the proper ISO-8601 notation
  - Example: `20240417` will be converted to `2024-04-17`
- `YYYYMMe` or `YYYYMM+` gets expanded to the end of the given month in the given year in proper notation
  - Example: `202407e` will be converted to `2024-07-31`
- `[+/-]n[d/m/y]` gets expanded to a date relative to today, while adding (**+**) or subtracting (**-**) the **n**umber of **d**ays/**m**onths/**y**ears, in proper notation
  - Example: `+1m` will be converted to the same day next month
- `x` gets expanded to `2999-12-31` (which is an alias for "never overdue")
- Down/up arrow keys will increase/decrease the date by 1 day
- Right/left arrow keys will increase/decrease the date by 1 week
- Shift + down/up arrow keys will increase/decrease the date by 1 month
- Shift + right/left arrow keys will increase/decrease the date by 1 year

### Keyboard shorthands for buttons

Wherever a button contains a bold highlighted letter, this is a shortcut key.
Example: Button "**P** Add as new product" can be "pressed" by using the `P` key on your keyboard.

### Barcode lookup via external services

Products can be directly added to the database via looking them up against external services by a barcode.

This can be done in-place using the product picker workflow "External barcode lookup (via plugin)" (the workflow dialog is displayed when entering something unknown in any product input field).

There is no plugin included for any service, see the reference implementation in `data/plugins/DemoBarcodeLookupPlugin.php`.

### Database migrations

Database schema migration is automatically done when visiting the root (`/`) route (click on the logo in the left upper edge).

_Please note: Database migrations are supposed to work between releases, not between every commit. If you want to run the current `master` branch (which is the development version), you need to handle that (and more) yourself._

### Disable certain features

If you don't use certain feature sets of Gorizont (for example if you don't need "Chores"), there are feature flags per major feature set to hide/disable the related UI elements (see `config-dist.php`).

### Adding your own CSS or JS without to have to modify the application itself

- When the file `data/custom_js.html` exists, the contents of the file will be added just before `</body>` (end of body) on every page
- When the file `data/custom_css.html` exists, the contents of the file will be added just before `</head>` (end of head) on every page

### Demo mode

When the `MODE` setting is set to `dev`, `demo` or `prerelease`, the application will work in a demo mode which means authentication is disabled and some demo data will be generated during the database schema migration (pass the query parameter `nodemodata`, e.g. `https://Gorizont.example.com/?nodemodata` to skip that).

### Embedded mode

When the file `embedded.txt` exists, it must contain a valid and writable path which will be used as the data directory instead of `data` and authentication will be disabled (used in [Gorizont Desktop](https://github.com/Gorizont/Gorizont-desktop)).

In embedded mode, settings can be overridden by text files in `data/settingoverrides`, the file name must be `<SettingName>.txt` (e. g. `BASE_URL.txt`) and the content must be the setting value (normally one single line).

## Contributing / Say Thanks

Any help is welcome, feel free to contribute anything which comes to your mind or see <https://Gorizont.info/#say-thanks> if you just want to say thanks.

## Roadmap

There is none, this is a hobby project. The progress of a specific bug/enhancement is always tracked in the corresponding issue, at least by commit comment references.

[Milestones](https://github.com/Gorizont/Gorizont/milestones) are used to indicate in which version the corresponding request was done (`vNEXT` means it's currently planned to do that for the next release).

## Screenshots

### Stock overview

![Stock overview](https://github.com/Gorizont/Gorizont/raw/master/.github/publication_assets/stock.png "Stock overview")

### Shopping List

![Shopping List](https://github.com/Gorizont/Gorizont/raw/master/.github/publication_assets/shoppinglist.png "Shopping List")

### Meal Plan

![Meal Plan](https://github.com/Gorizont/Gorizont/raw/master/.github/publication_assets/mealplan.png "Meal Plan")

### Chores overview

![Chores overview](https://github.com/Gorizont/Gorizont/raw/master/.github/publication_assets/chores.png "Chores overview")

## License

The MIT License (MIT)
