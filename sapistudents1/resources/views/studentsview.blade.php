{{-- @foreach ($students as $student)
    {{$student->name}}
    <br>
@endforeach --}}

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            @if (($student->gender) == 0)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->gender}}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>


@php
    $x = 10;
    echo $x;
@endphp
<br>
{{$x}}


{{-- BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel
$ composer create-project --prefer-dist laravel/laravel sapistudents1
Creating a "laravel/laravel" project at "./sapistudents1"
Installing laravel/laravel (v8.4.1)
  - Installing laravel/laravel (v8.4.1): Extracting archive
Created project in C:\xampp\htdocs\laravel\sapistudents1
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies
Lock file operations: 104 installs, 0 updates, 0 removals
  - Locking asm89/stack-cors (v2.0.2)
  - Locking brick/math (0.9.1)
  - Locking dnoegel/php-xdg-base-dir (v0.1.1)
  - Locking doctrine/inflector (2.0.3)
  - Locking doctrine/instantiator (1.4.0)
  - Locking doctrine/lexer (1.2.1)
  - Locking dragonmantank/cron-expression (v3.0.2)
  - Locking egulias/email-validator (2.1.24)
  - Locking facade/flare-client-php (1.3.7)
  - Locking facade/ignition (2.5.2)
  - Locking facade/ignition-contracts (1.0.2)
  - Locking fakerphp/faker (v1.11.0)
  - Locking fideloper/proxy (4.4.1)
  - Locking filp/whoops (2.9.1)
  - Locking fruitcake/laravel-cors (v2.0.3)
  - Locking graham-campbell/result-type (v1.0.1)
  - Locking guzzlehttp/guzzle (7.2.0)
  - Locking guzzlehttp/promises (1.4.0)
  - Locking guzzlehttp/psr7 (1.7.0)
  - Locking hamcrest/hamcrest-php (v2.0.1)
  - Locking laravel/framework (v8.14.0)
  - Locking laravel/tinker (v2.5.0)
  - Locking league/commonmark (1.5.7)
  - Locking league/flysystem (1.1.3)
  - Locking league/mime-type-detection (1.5.1)
  - Locking mockery/mockery (1.4.2)
  - Locking monolog/monolog (2.1.1)
  - Locking myclabs/deep-copy (1.10.2)
  - Locking nesbot/carbon (2.41.5)
  - Locking nikic/php-parser (v4.10.2)
  - Locking nunomaduro/collision (v5.1.0)
  - Locking opis/closure (3.6.1)
  - Locking phar-io/manifest (2.0.1)
  - Locking phar-io/version (3.0.2)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.2.2)
  - Locking phpdocumentor/type-resolver (1.4.0)
  - Locking phpoption/phpoption (1.7.5)
  - Locking phpspec/prophecy (1.12.1)
  - Locking phpunit/php-code-coverage (9.2.3)
  - Locking phpunit/php-file-iterator (3.0.5)
  - Locking phpunit/php-invoker (3.1.1)
  - Locking phpunit/php-text-template (2.0.4)
  - Locking phpunit/php-timer (5.0.3)
  - Locking phpunit/phpunit (9.4.3)
  - Locking psr/container (1.0.0)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.1)
  - Locking psr/http-message (1.0.1)
  - Locking psr/log (1.1.3)
  - Locking psr/simple-cache (1.0.1)
  - Locking psy/psysh (v0.10.4)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (1.1.1)
  - Locking ramsey/uuid (4.1.1)
  - Locking sebastian/cli-parser (1.0.1)
  - Locking sebastian/code-unit (1.0.8)
  - Locking sebastian/code-unit-reverse-lookup (2.0.3)
  - Locking sebastian/comparator (4.0.6)
  - Locking sebastian/complexity (2.0.2)
  - Locking sebastian/diff (4.0.4)
  - Locking sebastian/environment (5.1.3)
  - Locking sebastian/exporter (4.0.3)
  - Locking sebastian/global-state (5.0.2)
  - Locking sebastian/lines-of-code (1.0.2)
  - Locking sebastian/object-enumerator (4.0.4)
  - Locking sebastian/object-reflector (2.0.4)
  - Locking sebastian/recursion-context (4.0.4)
  - Locking sebastian/resource-operations (3.0.3)
  - Locking sebastian/type (2.3.1)
  - Locking sebastian/version (3.0.2)
  - Locking swiftmailer/swiftmailer (v6.2.3)
  - Locking symfony/console (v5.1.8)
  - Locking symfony/css-selector (v5.1.8)
  - Locking symfony/deprecation-contracts (v2.2.0)
  - Locking symfony/error-handler (v5.1.8)
  - Locking symfony/event-dispatcher (v5.1.8)
  - Locking symfony/event-dispatcher-contracts (v2.2.0)
  - Locking symfony/finder (v5.1.8)
  - Locking symfony/http-client-contracts (v2.3.1)
  - Locking symfony/http-foundation (v5.1.8)
  - Locking symfony/http-kernel (v5.1.8)
  - Locking symfony/mime (v5.1.8)
  - Locking symfony/polyfill-ctype (v1.20.0)
  - Locking symfony/polyfill-iconv (v1.20.0)
  - Locking symfony/polyfill-intl-grapheme (v1.20.0)
  - Locking symfony/polyfill-intl-idn (v1.20.0)
  - Locking symfony/polyfill-intl-normalizer (v1.20.0)
  - Locking symfony/polyfill-mbstring (v1.20.0)
  - Locking symfony/polyfill-php72 (v1.20.0)
  - Locking symfony/polyfill-php73 (v1.20.0)
  - Locking symfony/polyfill-php80 (v1.20.0)
  - Locking symfony/process (v5.1.8)
  - Locking symfony/routing (v5.1.8)
  - Locking symfony/service-contracts (v2.2.0)
  - Locking symfony/string (v5.1.8)
  - Locking symfony/translation (v5.1.8)
  - Locking symfony/translation-contracts (v2.3.0)
  - Locking symfony/var-dumper (v5.1.8)
  - Locking theseer/tokenizer (1.2.0)
  - Locking tijsverkoyen/css-to-inline-styles (2.2.3)
  - Locking vlucas/phpdotenv (v5.2.0)
  - Locking voku/portable-ascii (1.5.6)
  - Locking webmozart/assert (1.9.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 104 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (2.0.3): Extracting archive
  - Installing doctrine/lexer (1.2.1): Extracting archive
  - Installing dragonmantank/cron-expression (v3.0.2): Extracting archive
  - Installing symfony/polyfill-php80 (v1.20.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.20.0): Extracting archive
  - Installing symfony/var-dumper (v5.1.8): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.20.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.20.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.20.0): Extracting archive
  - Installing symfony/string (v5.1.8): Extracting archive
  - Installing psr/container (1.0.0): Extracting archive
  - Installing symfony/service-contracts (v2.2.0): Extracting archive
  - Installing symfony/polyfill-php73 (v1.20.0): Extracting archive
  - Installing symfony/console (v5.1.8): Extracting archive
  - Installing psr/log (1.1.3): Extracting archive
  - Installing monolog/monolog (2.1.1): Extracting archive
  - Installing voku/portable-ascii (1.5.6): Extracting archive
  - Installing phpoption/phpoption (1.7.5): Extracting archive
  - Installing graham-campbell/result-type (v1.0.1): Extracting archive
  - Installing vlucas/phpdotenv (v5.2.0): Extracting archive
  - Installing symfony/css-selector (v5.1.8): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (2.2.3): Extracting archive
  - Installing symfony/deprecation-contracts (v2.2.0): Extracting archive
  - Installing symfony/routing (v5.1.8): Extracting archive
  - Installing symfony/process (v5.1.8): Extracting archive
  - Installing symfony/polyfill-php72 (v1.20.0): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.20.0): Extracting archive
  - Installing symfony/mime (v5.1.8): Extracting archive
  - Installing symfony/http-foundation (v5.1.8): Extracting archive
  - Installing symfony/http-client-contracts (v2.3.1): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v2.2.0): Extracting archive
  - Installing symfony/event-dispatcher (v5.1.8): Extracting archive
  - Installing symfony/error-handler (v5.1.8): Extracting archive
  - Installing symfony/http-kernel (v5.1.8): Extracting archive
  - Installing symfony/finder (v5.1.8): Extracting archive
  - Installing symfony/polyfill-iconv (v1.20.0): Extracting archive
  - Installing egulias/email-validator (2.1.24): Extracting archive
  - Installing swiftmailer/swiftmailer (v6.2.3): Extracting archive
  - Installing ramsey/collection (1.1.1): Extracting archive
  - Installing brick/math (0.9.1): Extracting archive
  - Installing ramsey/uuid (4.1.1): Extracting archive
  - Installing psr/simple-cache (1.0.1): Extracting archive
  - Installing opis/closure (3.6.1): Extracting archive
  - Installing symfony/translation-contracts (v2.3.0): Extracting archive
  - Installing symfony/translation (v5.1.8): Extracting archive
  - Installing nesbot/carbon (2.41.5): Extracting archive
  - Installing league/mime-type-detection (1.5.1): Extracting archive
  - Installing league/flysystem (1.1.3): Extracting archive
  - Installing league/commonmark (1.5.7): Extracting archive
  - Installing laravel/framework (v8.14.0): Extracting archive
  - Installing filp/whoops (2.9.1): Extracting archive
  - Installing facade/ignition-contracts (1.0.2): Extracting archive
  - Installing facade/flare-client-php (1.3.7): Extracting archive
  - Installing facade/ignition (2.5.2): Extracting archive
  - Installing fakerphp/faker (v1.11.0): Extracting archive
  - Installing fideloper/proxy (4.4.1): Extracting archive
  - Installing asm89/stack-cors (v2.0.2): Extracting archive
  - Installing fruitcake/laravel-cors (v2.0.3): Extracting archive
  - Installing psr/http-message (1.0.1): Extracting archive
  - Installing psr/http-client (1.0.1): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing guzzlehttp/psr7 (1.7.0): Extracting archive
  - Installing guzzlehttp/promises (1.4.0): Extracting archive
  - Installing guzzlehttp/guzzle (7.2.0): Extracting archive
  - Installing nikic/php-parser (v4.10.2): Extracting archive
  - Installing dnoegel/php-xdg-base-dir (v0.1.1): Extracting archive
  - Installing psy/psysh (v0.10.4): Extracting archive
  - Installing laravel/tinker (v2.5.0): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.0.1): Extracting archive
  - Installing mockery/mockery (1.4.2): Extracting archive
  - Installing nunomaduro/collision (v5.1.0): Extracting archive
  - Installing webmozart/assert (1.9.1): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing phpdocumentor/type-resolver (1.4.0): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.2.2): Extracting archive
  - Installing sebastian/version (3.0.2): Extracting archive
  - Installing sebastian/type (2.3.1): Extracting archive
  - Installing sebastian/resource-operations (3.0.3): Extracting archive
  - Installing sebastian/recursion-context (4.0.4): Extracting archive
  - Installing sebastian/object-reflector (2.0.4): Extracting archive
  - Installing sebastian/object-enumerator (4.0.4): Extracting archive
  - Installing sebastian/global-state (5.0.2): Extracting archive
  - Installing sebastian/exporter (4.0.3): Extracting archive
  - Installing sebastian/environment (5.1.3): Extracting archive
  - Installing sebastian/diff (4.0.4): Extracting archive
  - Installing sebastian/comparator (4.0.6): Extracting archive
  - Installing sebastian/code-unit (1.0.8): Extracting archive
  - Installing sebastian/cli-parser (1.0.1): Extracting archive
  - Installing phpunit/php-timer (5.0.3): Extracting archive
  - Installing phpunit/php-text-template (2.0.4): Extracting archive
  - Installing phpunit/php-invoker (3.1.1): Extracting archive
  - Installing phpunit/php-file-iterator (3.0.5): Extracting archive
  - Installing theseer/tokenizer (1.2.0): Extracting archive
  - Installing sebastian/lines-of-code (1.0.2): Extracting archive
  - Installing sebastian/complexity (2.0.2): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (2.0.3): Extracting archive
  - Installing phpunit/php-code-coverage (9.2.3): Extracting archive
  - Installing doctrine/instantiator (1.4.0): Extracting archive
  - Installing phpspec/prophecy (1.12.1): Extracting archive
  - Installing phar-io/version (3.0.2): Extracting archive
  - Installing phar-io/manifest (2.0.1): Extracting archive
  - Installing myclabs/deep-copy (1.10.2): Extracting archive
  - Installing phpunit/phpunit (9.4.3): Extracting archive
79 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: facade/ignition
Discovered Package: fideloper/proxy
Discovered Package: fruitcake/laravel-cors
Discovered Package: laravel/tinker
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
72 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan key:generate --ansi
Application key set successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel
$ cd sapistudents1

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan make:migration create_students_table
Created Migration: 2020_11_17_110659_create_students_table

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (28.02ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (26.17ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (26.72ms)
Migrating: 2020_11_17_110659_create_students_table
Migrated:  2020_11_17_110659_create_students_table (17.53ms)

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan make:model Student
Model created successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan make:controller StudentController
Controller created successfully. --}}







{{-- 2.... --}}

{{-- BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan make:seed StudentsTableSeeder
Seeder created successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan make:factory StudentFactory --model=Student
Factory created successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan migarte:fresh --seed


  There are no commands defined in the "migarte" namespace.

  Did you mean this?
      migrate



BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan migrate:fresh --seed
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (88.83ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (49.28ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (39.14ms)
Migrating: 2020_11_17_110659_create_students_table
Migrated:  2020_11_17_110659_create_students_table (35.34ms)
Database seeding completed successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan migrate:fresh --seed
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (43.37ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (41.89ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (51.60ms)
Migrating: 2020_11_17_110659_create_students_table
Migrated:  2020_11_17_110659_create_students_table (20.87ms)
Database seeding completed successfully.

BeK@DESKTOP-MRIN0UA MINGW64 /c/xampp/htdocs/laravel/sapistudents1
$ php artisan migrate:fresh --seed
Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (40.01ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (39.07ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (37.14ms)
Migrating: 2020_11_17_110659_create_students_table
Migrated:  2020_11_17_110659_create_students_table (29.54ms)
Seeding: Database\Seeders\StudentsTableSeeder
Seeded:  Database\Seeders\StudentsTableSeeder (465.82ms)
Database seeding completed successfully. --}}
