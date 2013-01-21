<?php
/**
 * Vesta CP language file
 * ZonD80 (zond80@gmail.com)
 * skid (skid@vestacp.com)
 */

if (!defined('LANGUAGE')) die('Direct access not allowed');

$LANG = array(
    'yes' => 'да',
    'no' => 'нет',
    'none' => 'нет',
    'Hour' => 'Час',
    'Min' => 'Мин',
    'pb' => 'пб',
    'tb' => 'тб',
    'gb' => 'гб',
    'mb' => 'мб',
    'Error' => 'Ошибка',
    'minute' => 'минута',
    'hour' => 'час',
    'day' => 'день',
    'days' => 'дня(ей)',
    'hours' => 'часа(ов)',
    'minutes' => 'минут(ы)',
    'month' => 'месяц',
    'day of week' => 'день недели',
    'cmd' => 'командная строка',
    'Error: field "%s" can not be blank.' => 'Ошибка: Поле "%s" не может быть пустым.',
    _('Error: vesta did not return any output.')=>'Ошибка: Vesta не отвечает',
    'OK: cron job has been created successfully.' => 'Задание Cron успешно создано',
    'database' => 'база данных',
    'username' => 'аккаунт',
    'password' => 'пароль',
    'type' => 'тип',
    'charset' => 'кодировка',
    'edit' => 'редактировать',
    'DATABASE_CREATED_OK' => 'База данных <a href="/edit/db/?database=%s"><b>%s</b></a> успешно создана.',
    'domain' => 'домен',
    'ip' => 'IP',
    'DOMAIN_CREATED_OK' => 'Домен <a href="/list/dns/?domain=%s"><b>%s</b></a> успешно создан.',
    'RECORD_CREATED_OK' => 'Запись <b>%s.%s</b> успешно создана.',
    'ip address' => 'IP-адрес',
    'IP Address' => 'IP-адрес',
    'netmask' => 'маска подсети',
    'Netmask' => 'Маска подсети',
    'interface' => 'интерфейс',
    'Interface' => 'Интерфейс',
    'assigned user' => 'назначенный пользователь',
    'IP_CREATED_OK' => '"ip-адрес <a href="/edit/ip/?ip=%s"><b>%s</b></a> успешно создан.',
    'DOMAIN_MAIL_CREATED_OK' => 'Домен <a href="/list/mail/?domain=%s"><b>%s</b></a> успешно создан.',
    'account' => 'аккаунт',
    'Account' => 'Аккаунт',
    'MAIL_ACCOUNT_CREATED_OK' => 'Аккаунт <a href="/edit/mail/?account=%s&domain=%s"><b>%s@%s</b></a> успешно создан.',
    'package' => 'пакет',
    'template' => 'шаблон',
    'shell' => 'SSH',
    'web domains' => 'веб домены',
    'Web Domains' => 'Веб домены',
    'Web Aliases' => 'Веб алиасы',
    'per domain' => 'на домен',
    'DNS domains' => 'DNS домены',
    'DNS records count' => 'DNS записи',
    'DNS Support' => 'Поддержка DNS',
    'Mail Support' => 'Поддержка почты',
    'web aliases' => 'алиасы хостов',
    'dns records' => 'DNS записи',
    'mail domains' => 'почтовые домены',
    'mail accounts' => 'почтовые аккаунты',
    'Accounts' => 'Аккаунты',
    'Mail Domains' => 'Почтовые домены',
    'Mail Accounts' => 'Почтовые аккаунты',
    'accounts' => 'аккаунты',
    'databases' => 'базы данных',
    'Databases' => 'Базы данных',
    'cron jobs' => 'cron задания',
    'Cron Jobs' => 'Cron задания',
    'Backups' => 'Резервные копии',
    'backups' => 'архивы',
    'quota' => 'квота диска',
    'bandwidth' => 'ширина канала',
    'Bandwidth' => 'Трафик',
    'ns1' => 'DNS-сервер #1',
    'ns2' => 'DNS-сервер #2',
    'PACKAGE_CREATED_OK' => 'Пакет <a href="/edit/package/?package=%s"><b>%s</b></a> успешно создан.',
    'user' => 'пользователь',
    'email' => 'email',
    'Email' => 'Адрес электронной почты',
    'first name' => 'Имя',
    'last name' => 'Фамилия',
    'Please enter valid email address.' => 'Пожалуйста, введите реальный email адрес.',
    'Welcome to Vesta Control Panel' => 'Добро пожаловать в панель управления Vesta',
    'MAIL_FROM' => 'Vesta Control Panel <noreply@%s>',
    'GREETINGS_GORDON_FREEMAN'=>"Здравствуйте, %s %s,\n",
    'GREETINGS'=>"Здравствуйте,\n",
    'ACCOUNT_READY'=>"Ваш аккаунт успешно создан и готов к использованию.\n\nhttps://%s/login/\nИмя пользователя: %s\nПароль: %s\n\n--\nПанель управления Vesta\n",
    'ACCOUNT_CREATED_OK' => 'Аккаунт <a href="/edit/user/?user=%s"><b>%s</b></a> успешно создан.',
    'ssl certificate' => 'SSL сертификат',
    'ssl key' => 'ключ SSL сертификата',
    'SSL Support' => 'Поддержка SSL',
    'SSL Home Directory' => 'Директория SSL',
    'SSL Certificate' => 'SSL сертификат',
    'SSL Key' => 'Ключ SSL сертификата',
    'SSL Certificate Authority / Intermediate' => 'Центр сертификации SSL / Intermediate',
    'stats user password' => 'пароль для доступа к статистике',
    'stats username' => 'имя пользователя статистики',
    'stats password' => 'пароль пользователя статистики',
    'ftp user password' => 'пароль для доступа к FTP',
    'ftp user' => 'пользователь FTP',
    'FTP login credentials' => 'Данные для доступа к FTP',
    'FTP_ACCOUNT_READY'=>"FTP аккаунт успешно создан и готов к использованию.\n\nХост: %s\nИмя пользователя: %s_%s\nПароль: %s\n\n--\nПанель управления Vesta\n",
    'WEB_DOMAIN_CREATED_OK' => '<a href="/edit/web/?domain=%s"><b>%s</b></a> был успешно создан.',
    'OK: changes has been saved.' => 'Изменения сохранены.',
    'FTP login credentials' => 'Данные для доступа к FTP',
    '505' => '505 &mdash; внутренняя ошибка',
    'An internal error occurred' => 'Произошла внутренняя ошибка',
    'GO_BACK_LINK' => 'Попробуйте вернуться на <a href="/">главную страницу</a> или вернитесь на <a href="javascript:history.go(-1)">предыдущую страницу</a>',
    'ERROR: Invalid username or password' => 'Ошибка: Неверный логин или пароль',
    'ERROR: Invalid username or code' => 'Ошибка: Неверный логин или код сброса пароля',
    'MAIL_RESET_SUBJECT' => 'Сброс пароля %s',
    'PASSWORD_RESET_REQUEST'=>"Вы недавно запросили смену пароля.\nЧтобы произвести смену пароля, пройдите по этой ссылке:\nhttps://%s/reset/?action=confirm&user=%s&code=%s\n\nВы также можете пойти по ссылке https://%s/reset/?action=code&user=%s и ввести следующий код для сброса пароля:\n%s\n\nЕсли вы не создавали запрос на сброс пароля, пожалуйста проигнорируйте это письмо и примите наши извиниения.\n\n--\nПанель управления Vesta\n",
    'ERROR: Passwords not match' => 'Ошибка: Пароли не совпадают',
    'Adding Cron Job' => 'Добавление cron задания',
    'Minute' => 'Минута',
    'Day' => 'День',
    'Month' => 'Месяц',
    'Day of week' => 'День недели',
    'Command' => 'Команда',
    'Add' => 'Добавить',
    'Back' => 'Назад',
    'Adding database' => 'Добавление базы данных',
    'DB_PREFIX_WILL_BE_ADDED' => 'Префикс %s будет автоматически добавлен к БД и пользователю БД',
    'FTP_PREFIX_WILL_BE_ADDED' => 'Префикс %s будет автоматически добавлен к названию акккаунта',
    'Database' => 'База данных',
    'Username' => 'Аккаунт',
    'Password' => 'Пароль',
    'generate' => 'сгенерировать',
    'Type' => 'Тип',
    'Charset' => 'Кодировка',
    'Adding DNS Domain' => 'Добавление DNS домена',
    'Domain' => 'Домен',
    'IP-Address' => 'IP-адрес',
    'Advanced options' => 'Расширенные опции',
    'Template' => 'Шаблон',
    'Expiration date' => 'Зарегистрирован до',
    'Expiration Date' => 'Зарегистрирован до',
    'Expire' => 'Регистрация до',
    'YYYY-MM-DD' => 'ГГГГ-ММ-ДД',
    'Name servers' => 'Серверы имен',
    'Name Servers' => 'Серверы имен',
    'Powered by Vesta Control Panel' => 'Работает на Панели Управления Vesta',
    'Vesta Control Panel' => 'Панель Управления Vesta',
    'Translation by ZonD80' => 'Перевод ZonD80',
    'Forgot Password?' => 'Забыли пароль?',
    'Log in' => 'Войти',
    'Log out' => 'Выйти',
    "RESET_NOTICE"=>"Для сброса пароля введите ваше имя пользователя, и мы расскажем, что нужно делать дальше.",
    'Submit' => 'Отправить',
    'RESET_CODE_SENT' => 'Код сброса пароля выслан на ваш email<br/>Пожалуйста, введите код в располженное ниже поле для продолжения',
    'Confirm' => 'Подтвердить',
    'New Password' => 'Новый пароль',
    'Confirm Password' => 'Подтверждение пароля',
    'Reset' => 'Сбросить',
    'Statistics' => 'Статистика',
    'Web Statistics' => 'Статистика сайта',
    'History Log' => 'Журнал',
    'Vesta logo' => 'Логотип Vesta',
    'USER' => 'USER',
    'logout' => 'выйти',
    'users' => 'пользователи',
    'Users' => 'Пользователи',
    'spnd' => 'заблокировано',
    'suspended' => 'заблокирован',
    'WEB' => 'WEB',
    'domains' => 'домены',
    'aliases' => 'алиасы',
    'Aliases' => 'Алиасы',
    'DNS' => 'DNS',
    'records' => 'записи',
    'Records' => 'DNS записи',
    'MAIL' => 'MAIL',
    'DB' => 'DB',
    'CRON' => 'CRON',
    'BACKUP' => 'BACKUP',
    'Packages' => 'Пакеты',
    'IP Addresses' => 'IP адреса',
    'RRD Graphics' => 'RRD Графики',
    'jobs' => 'задания',
    'Reset Code' => 'Код сброса',
    'disk' => 'диск',
    'Disk' => 'Диск',
    'traffic' => 'трафик',
    'Database Credentials' => 'Данные для доступа к БД',
    'DATABASE_READY'=>"Здравствуйте %s %s,\nВаша %s база данных создана успешно.\n\nИмя БД: %s_%s\nПользователь: %s_%s\nПароль: %s\n\n",
    'Send credentials to' => 'Отправить данные для доступа к ',
    'Adding DNS Record' => 'Добавление DNS записи',
    'Record' => 'Запись / Поддомен',
    'IP or Value' => 'IP-адрес или значение',
    'Priority' => 'Приоритет',
    'optional' => 'опционально',
    'Adding IP Address' => 'Добавление IP-адреса',
    'Shared' => 'Общий',
    'Assigned user' => 'Пользователь',
    'Assigned domain' => 'Домен',
    'Adding Mail Domain' => 'Добавление почтового домена',
    'AntiSpam Support' => 'Поддержка Анти-спама',
    'AntiVirus Support' => 'Поддержка Антивируса',
    'DKIM Support' => 'Поддержка DKIM',
    'Adding Mail Account' => 'Добавление почтового аккаунта',
    'Advanced options' => 'Дополнительные опции',
    'Quota' => 'Квота',
    'in megabytes' => 'в мегабайтах',
    'use local-part' => 'используйте только имена аккаунтов',
    'Forward to' => 'Пересылка',
    'one or more email addresses' => 'один или несколько email-адресов',
    'Adding Package' => 'Создание пакета',
    'Package Name' => 'Название пакета',
    'Package' => 'Пакет',
    'Default Template' => 'Шаблон по умолчанию',
    'SSH Access' => 'Доступ по SSH',
    'Adding User' => 'Добавление аккаунта',
    'First Name' => 'Имя',
    'Last Name' => 'Фамилия',
    'SEND_CREDENTIALS_NOTICE' => 'Отправить данные аккаунта по адресу',
    'SEND_FTP_CREDENTIALS' => 'Отправить данные ftp аккаунта по адресу',
    'Adding Web Domain' => 'Добавление домена',
    'Apache template' => 'Шаблон Apache',
    'Nginx Support' => 'Поддержка Nginx',
    'Nginx Extentions' => 'Обработка Nginx',
    'Nginx Template' => 'Шаблон для Nginx',
    'Statistics Authorization' => 'Ограниченный доступ к статистике',
    'Additional FTP Account' => 'Отдельный ftp аккаунт',
    'Editing Cron Job' => 'Редактирование cron-задания',
    'Save' => 'Сохранить',
    'Editing Database' => 'Редактирование БД',
    'Editing DNS Domain' => 'Редактирование DNS домена',
    'Editing DNS Record' => 'Редактирование DNS записи',
    'Editing IP Address' => 'Редактирование IP-адреса',
    'Editing Mail Domain' => 'Редактирование почты для домена',
    'Catchall email' => 'Ловушка почты',
    'Editing Mail Account' => 'Редактирование почтового акканунта',
    'Autoreply' => 'Автоответчик',
    'Message' => 'Сообщение',
    'Editing Package' => 'Редактирование пакета',
    'Editing User' => 'Редактирование аккаунта',
    'Default Name Servers' => 'Серверы имен',
    'Editing Domain' => 'Редактирование хостинга',
    'Create Backup' => 'Создать Бэкап',
    'apply to selected' => 'применить к выбранным',
    'toggle all' => 'выделить все',
    'delete' => 'удалить',
    'active' => 'активен',
    'download' => 'скачать',
    'Owner' => 'Владелец',
    'restore' => 'восстановить',
    'restart' => 'перезапустить',
    'CPU' => 'Процессор',
    'Memory' => 'Память',
    'stop' => 'остановить',
    'Run Time' => 'Время запуска',
    'BACKUP_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить %s бэкап?',
    'Backup Size' => 'Размер Бэкапа',
    'SYS' => 'Системное',
    '1 archive' => 'резервных копий на странице: 1',
    '%s archives' => 'резервных копий на странице: %s',
    'Add Cron Job' => 'Добавить задание',
    'add account' => 'добавить аккаунт',
    'open webmail' => 'открыть веб-почту',
    'suspend' => 'заблокировать',
    'unsuspend' => 'активировать',
    'CRON_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s cron-задание?',
    'Confirmation' => 'Подтверждение',
    '1 cron job' => 'заданий на странице: 1',
    '%s cron jobs' => 'заданий на странице: %s',
    'Add Database' => 'Добавить БД',
    'open %s' => 'открыть %s',
    'DATABASE_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s базу данных %s?',
    '1 database' => 'баз данных на странице: 1',
    '%s databases' => ',баз данных на странице: %s',
    'Add DNS Domain' => 'Добавить домен',
    'Search' => 'Поиск',
    'LIST_DOMAIN_RECORDS' => 'показать dns записи',
    'add record' => 'добавить запись',
    'LIST_MAIL_ACCOUNTS' => 'показать аккаунты',
    'DOMAIN_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s домен %s?',
    '1 domain' => 'доменов на странице: 1',
    '%s domains' => 'доменов на странице: %s',
    'Add DNS Record' => 'Добавить запись',
    'Listing' => 'Просмотр',
    'list' => 'посмотреть',
    'RECORD_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s запись %s?',
    '1 DNS record' => 'записей на странице: 1',
    '%s DNS records' => 'записей на странице %s',
    'Add IP' => 'Добавить IP адрес',
    'IP_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить IP адрес %s?',
    'Status' => 'Статус',
    '1 IP address' => 'IP адресов на странице: 1',
    '%s IP addresses' => 'IP адресов на странице: %s',
    '1 log record' => 'записей на странице: 1',
    '%s log records' => 'записей на странице %s',
    'Add Mail Domain' => 'Добавить домен',
    'MAIL_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s почту для домена %s?',
    'Add Mail Account' => 'Добавить аккаунт',
    'MAIL_ACCOUNT_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s почтовый ящик %s?',
    '1 mail account' => 'почтовых акаунтов на странице: 1',
    '%s mail accounts' => 'почтовых акаунтов на странице: %s',
    'Add Package' => 'Добавить пакет',
    'PACKAGE_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить пакет %s?',
    '1 package' => 'пакетов на странице: 1',
    '%s packages' => 'пакетов на странице: %s',
    'Daily' => 'Ежедневый',
    'Weekly' => 'Еженедельный',
    'Monthly' => 'Ежемесячный',
    'Yearly' => 'Ежегодный',
    'Search Results' => 'Результаты Поиска',
    'login as' => 'войти как',
    'Object' => 'Объект',
    '1 object' => 'объектов на странице: 1',
    '%s objects' => 'объектов на странице :%s',
    'Overall Statistics' => 'Вся Статистика',
    'show per user' => 'показать для пользователя',
    'Web' => 'Веб',
    'Mail' => 'Почта',
    'User Directories' => 'Папки пользователя',
    'Web SSL Domains' => 'SSL домены',
    'one month' => 'один месяц',
    '%s months' => '%s месяца(ев)',
    'Add User' => 'Добавить аккаунт',
    'Add Domain' => 'Добавить домен',
    'rebuild' => 'пересоздать',
    'rebuild web' => 'пересоздать WEB',
    'rebuild DNS' => 'пересоздать DNS',
    'rebuild mail' => 'пересоздать MAIL',
    'rebuild db' => 'пересоздать DB',
    'rebuild cron' => 'пересоздать CRON',
    'update counters' => 'пересчитать счетчики',
    'LOGGED_IN_AS' => 'Вы вошли как пользователь %s',
    'USER_ACTION_CONFIRMATION' => 'Вы уверены, что хотите %s пользователя %s?',
    '1 account' => ' пользователей на странице: 1',
    '%s accounts' => 'пользователей на странице: %s',
    'Add Web Domain' => 'Добавить домен',
    'open webstats' => 'открыть отчет веб-аналитики',
    'Error Log' => 'Лог Ошибок',
    'CGI Support' => 'Поддержка CGI',
    'Statistics Auth' => 'Авторизация Статистики',
    'running' => 'работает',
    'SERVICE_ACTION_FAILED' => 'Ошибка: Операция "%s" для сервиса "%s" не удалась',
    'Load Average' => 'Нагрузка',
    'Memory Usage' => 'Использование Памяти',
    'Bandwidth Usage' => 'Использование Сети',
    
);

/*error_reporting(E_ALL);
ini_set('display_errors',true);*/