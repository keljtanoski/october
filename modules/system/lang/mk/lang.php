<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Враќање кон основите',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'mk' => 'Македонски',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'th' => 'ไทย',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => 'Не може да се создаде директориум: :name',
    ],
    'file' => [
        'create_fail' => 'Не може да се креира датотека: :name',
    ],
    'combiner' => [
        'not_found' => "Датотеката за комбинирање ':name' не е пронајдена.",
    ],
    'system' => [
        'name' => 'Систем',
        'menu_label' => 'Систем',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Разно',
            'logs' => 'Дневници',
            'mail' => 'Пошта',
            'shop' => 'Продавница',
            'team' => 'Тим',
            'users' => 'Корисници',
            'system' => 'Систем',
            'social' => 'Социјални мрежи',
            'backend' => 'Позадински систем',
            'events' => 'Настани',
            'customers' => 'Клиенти',
            'my_settings' => 'Мои поставки',
            'notifications' => 'Известувања',
        ],
    ],
    'theme' => [
        'label' => 'Тема',
        'unnamed' => 'Неименувана тема',
        'name' => [
            'label' => 'Име на темата',
            'help' => 'Именувајте ја темате според нејзиниот единствен код. На пример, RainLab.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Инсталирајте теми',
        'search' => 'пребарај теми за инсталирање...',
        'installed' => 'Инсталирани теми',
        'no_themes' => 'Нема инсталирани теми од пазарот.',
        'recommended' => 'Препорачано',
        'remove_confirm' => 'Дали сте сигурни дека сакате да ја отстраните оваа тема?',
    ],
    'plugin' => [
        'label' => 'Додаток',
        'unnamed' => 'Неименуван додаток',
        'name' => [
            'label' => 'Име на додаток',
            'help' => 'Именувајте го додатокот според неговиот единствен код. На пример, RainLab.Blog',
        ],
        'by_author' => 'Од :name',
    ],
    'plugins' => [
        'manage' => 'Управувајте со додатоци',
        'install' => 'Инсталирајте додатоци',
        'install_products' => 'Инсталирајте производи',
        'search' => 'пребарај додатоци за инсталирање...',
        'installed' => 'Инсталирани додатоци',
        'no_plugins' => 'Нема инсталирани додатоци од пазарот.',
        'recommended' => 'Препорачано',
        'plugin_label' => 'Додаток',
        'unknown_plugin' => 'Додатокот е отстранет од системот.',
        'select_label' => 'Изберете акција...',
        'bulk_actions_label' => 'Повеќе акции',
        'check_yes' => 'Да',
        'check_no' => 'Не',
        'unfrozen' => 'Ажурирањата се овозможени',
        'enabled' => 'Додатокот е овозможен',
        'freeze' => 'оневозможи ажурирања за',
        'unfreeze' => 'овозможи ажурирања за',
        'enable' => 'овозможи',
        'disable' => 'оневозможи',
        'refresh' => 'ресетирај',
        'remove' => 'Отстрани',
        'freeze_label' => 'Оневозможете ги ажурирањата',
        'unfreeze_label' => 'Овозможете ажурирања',
        'enable_label' => 'Овозможи додатоци',
        'disable_label' => 'Оневозможи додатоци',
        'refresh_label' => 'Ресетирај податоци за додатокот',
        'action_confirm' => 'Дали сте сигурни дека сакате да :action овие додатоци?',
        'freeze_success' => 'Успешно оневозможени ажурирања за избраните додатоци.',
        'unfreeze_success' => 'Успешно овозможени ажурирања за избраните додатоци.',
        'enable_success' => 'Успешно ги овозможивме избраните додатоци.',
        'disable_success' => 'Успешно ги оневозможивте избраните додатоци.',
        'refresh_confirm' => 'Дали сте сигурни дека сакате да ги ресетирате избраните додатоци? Ова ќе ги ресетира податоците на секој додаток, враќајќи ги во почетната состојба на инсталација.',
        'refresh_success' => 'Избраните додатоци се успешно ресетирани.',
        'remove_confirm' => 'Дали сте сигурни дека сакате да ги отстраните избраните додатоци? Ова исто така ќе ги отстрани сите поврзани податоци.',
        'remove_success' => 'Избраните приклучоци се успешно отстранети.',
    ],
    'project' => [
        'name' => 'Проект',
        'owner_label' => 'Сопственик',
        'attach' => 'Прикачи проект',
        'detach' => 'Одвој проект',
        'none' => 'Ништо',
        'id' => [
            'label' => 'Проект ID',
            'help' => 'Како да го пронајдете ID од проектот',
            'missing' => 'Наведете ID на проект за употреба.',
        ],
        'detach_confirm' => 'Дали сте сигурни дека сакате да го откачите овој проект?',
        'unbind_success' => 'Проектот е откачен.',
    ],
    'settings' => [
        'menu_label' => 'Поставки',
        'not_found' => 'Не може да се најдат наведените поставки.',
        'missing_model' => 'На страницата за поставки недостасува дефиниција за модел.',
        'update_success' => 'Поставките за :name се ажурирани',
        'return' => 'Вратете се во системските поставки',
        'search' => 'Пребарување',
    ],
    'mail' => [
        'log_file' => 'Дневник датотека',
        'menu_label' => 'Конфигурација на е-пошта',
        'menu_description' => 'Управувајте со конфигурацијата за е-пошта',
        'general' => 'Генерално',
        'method' => 'Метод на е-пошта',
        'sender_name' => 'Име на испраќачот',
        'sender_email' => 'Е-пошта на испраќачот',
        'php_mail' => 'PHP пошта',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP адреса',
        'smtp_authorization' => 'Потребно е овластување за SMTP',
        'smtp_authorization_comment' => 'Изберете го ова поле ако вашиот SMTP сервер бара овластување.',
        'smtp_username' => 'Корисничко име',
        'smtp_password' => 'Лозинка',
        'smtp_port' => 'SMTP порта',
        'smtp_ssl' => 'Потребна е SSL-врска',
        'smtp_encryption' => 'SMTP протокол за шифрирање',
        'smtp_encryption_none' => 'Без криптирање',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail патека',
        'sendmail_path_comment' => 'Специфицирај ја патеката за sendmail програмата.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun домен',
        'mailgun_domain_comment' => 'Специфицирај име на домен за Mailgun.',
        'mailgun_secret' => 'Mailgun таен клуч (secret)',
        'mailgun_secret_comment' => 'Внесете го вашиот Mailgun API клуч.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill таен клуч (secret)',
        'mandrill_secret_comment' => 'Внесете го вашиот Mandrill API клуч.',
        'ses' => 'SES',
        'ses_key' => 'SES клуч',
        'ses_key_comment' => 'Внесете го вашиот SES API клуч',
        'ses_secret' => 'SES таен клуч (secret)',
        'ses_secret_comment' => 'Внесете го вашиот SES API таен клуч',
        'sparkpost' => 'SparkPost',
        'sparkpost_secret' => 'SparkPost таен клуч (secret)',
        'sparkpost_secret_comment' => 'Внесете го вашиот SparkPost API таен клуч',
        'ses_region' => 'SES регион',
        'ses_region_comment' => 'Внесете го вашиот SES регион (e.g. us-east-1)',
        'drivers_hint_header' => 'Двигателите (drivers) не се инсталирани',
        'drivers_hint_content' => 'Овој метод за е-пошта бара да се инсталира додатокот ":plugin" пред да можете да испраќате пошта.',
    ],
    'mail_templates' => [
        'menu_label' => 'Шаблони за пошта',
        'menu_description' => 'Изменете ги шаблоните за пошта што се испраќаат до корисниците и администраторите.',
        'new_template' => 'Нов шаблон',
        'new_layout' => 'Нов распоред',
        'new_partial' => 'Нов парцијал',
        'template' => 'Шаблон',
        'templates' => 'Шаблони',
        'partial' => 'Парцијал',
        'partials' => 'Парцијали',
        'menu_layouts_label' => 'Распореди на пошта',
        'menu_partials_label' => 'Парцијали на пошта',
        'layout' => 'Распоред',
        'layouts' => 'Распореди',
        'no_layout' => '-- Без распоред --',
        'name' => 'Име',
        'name_comment' => 'Уникатно име што се користи за упатување на овој шаблон',
        'code' => 'Код',
        'code_comment' => 'Уникатен код користен за упатување на овој шаблон',
        'subject' => 'Предмет',
        'subject_comment' => 'Предмет на е-пошта',
        'description' => 'Опис',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Обичен текст',
        'test_send' => 'Испратете тест порака',
        'test_success' => 'Испратена е тест порака.',
        'test_confirm' => 'Испрати тест порака на :email. Продолжи?',
        'creating' => 'Создавање на шаблон...',
        'creating_layout' => 'Создавање распоред...',
        'saving' => 'Зачувување на шаблон...',
        'saving_layout' => 'Зачувување на распоред...',
        'delete_confirm' => 'Да се избрише овој шаблон?',
        'delete_layout_confirm' => 'Да се избрише овој распоред?',
        'deleting' => 'Бришење на шаблон...',
        'deleting_layout' => 'Бришење на распоред...',
        'sending' => 'Испраќање на тест порака...',
        'return' => 'Врати се на списокот со шаблони',
        'options' => 'Опции',
        'disable_auto_inline_css' => 'Оневозможете автоматски вметнат CSS',
    ],
    'mail_brand' => [
        'menu_label' => 'Брендирање на пошта',
        'menu_description' => 'Изменете ги боите и изгледот на шаблоните за пошта.',
        'page_title' => 'Прилагодете го изгледот на поштата',
        'sample_template' => [
            'heading' => 'Заглавие',
            'paragraph' => 'Ова е пасус исполнет со произволен текст што не значи ништо.',
            'table' => [
                'item' => 'Предмет',
                'description' => 'Опис',
                'price' => 'Цена',
                'centered' => 'Центриран',
                'right_aligned' => 'Порамнето на десно',
            ],
            'buttons' => [
                'primary' => 'Примарно копче',
                'positive' => 'Позитивно копче',
                'negative' => 'Негативно копче',
            ],
            'panel' => 'Колку е одличен овој панел?',
            'more' => 'Уште малку текст',
            'promotion' => 'Купон код: OCTOBER',
            'subcopy' => 'Ова е поткопија на е-поштата',
            'thanks' => 'Благодарам',
        ],
        'fields' => [
            '_section_background' => 'Позадина',
            'body_bg' => 'Позадина на основата',
            'content_bg' => 'Позадина на содршината',
            'content_inner_bg' => 'Позадина на внатрешната содржина',
            '_section_buttons' => 'Копчиња',
            'button_text_color' => 'Боја на текст на копче',
            'button_primary_bg' => 'Позадина на примарно копче',
            'button_positive_bg' => 'Позадина на позитивно копче',
            'button_negative_bg' => 'Позадина на негативно копче',
            '_section_type' => 'Типографија',
            'header_color' => 'Боја на заглавие',
            'heading_color' => 'Боја на заглавија',
            'text_color' => 'Боја на текст',
            'link_color' => 'Боја на линк',
            'footer_color' => 'Боја на подножје (footer)',
            '_section_borders' => 'Граници',
            'body_border_color' => 'Боја на основните граници',
            'subcopy_border_color' => 'Боја на граници на поткопија',
            'table_border_color' => 'Боја на граници на табела',
            '_section_components' => 'Компоненти',
            'panel_bg' => 'Позадина на панелот',
            'promotion_bg' => 'Позадина на промоција',
            'promotion_border_color' => 'Боја на границата на промоција',
        ],
    ],
    'install' => [
        'project_label' => 'Attach to Project',
        'plugin_label' => 'Install Plugin',
        'theme_label' => 'Install Theme',
        'missing_plugin_name' => 'Please specify a Plugin name to install.',
        'missing_theme_name' => 'Please specify a Theme name to install.',
        'install_completing' => 'Finishing installation process',
        'install_success' => 'Plugin installed successfully',
    ],
    'updates' => [
        'title' => 'Manage Updates',
        'name' => 'Software update',
        'menu_label' => 'Updates & Plugins',
        'menu_description' => 'Update the system, manage and install plugins and themes.',
        'return_link' => 'Return to system updates',
        'check_label' => 'Check for updates',
        'retry_label' => 'Try again',
        'plugin_name' => 'Name',
        'plugin_code' => 'Code',
        'plugin_description' => 'Description',
        'plugin_version' => 'Version',
        'plugin_author' => 'Author',
        'plugin_not_found' => 'Plugin not found',
        'plugin_version_not_found' => 'Plugin version not found',
        'core_current_build' => 'Current build',
        'core_view_changelog' => 'View Changelog',
        'core_build' => 'Build :build',
        'core_build_help' => 'Latest build is available.',
        'core_downloading' => 'Downloading application files',
        'core_extracting' => 'Unpacking application files',
        'core_set_build' => 'Setting build number',
        'update_warnings_title' => 'Some issues have been detected and require attention:',
        'update_warnings_plugin_missing' => 'The :parent_code plugin requires :code to be installed before it will work',
        'changelog' => 'Changelog',
        'changelog_view_details' => 'View details',
        'plugins' => 'Plugins',
        'themes' => 'Themes',
        'disabled' => 'Disabled',
        'plugin_downloading' => 'Downloading plugin: :name',
        'plugin_extracting' => 'Unpacking plugin: :name',
        'plugin_version_none' => 'New plugin',
        'plugin_current_version' => 'Current version',
        'theme_new_install' => 'New theme installation.',
        'theme_downloading' => 'Downloading theme: :name',
        'theme_extracting' => 'Unpacking theme: :name',
        'update_label' => 'Update software',
        'update_completing' => 'Finishing update process',
        'update_loading' => 'Loading available updates...',
        'update_success' => 'Update process complete',
        'update_failed_label' => 'Update failed',
        'force_label' => 'Force update',
        'found' => [
            'label' => 'Found new updates!',
            'help' => 'Click Update software to begin the update process.',
        ],
        'none' => [
            'label' => 'No updates',
            'help' => 'No new updates were found.',
        ],
        'important_action' => [
            'empty' => 'Select action',
            'confirm' => 'Confirm update',
            'skip' => 'Skip this update (once only)',
            'ignore' => 'Skip this update (always)',
        ],
        'important_action_required' => 'Action required',
        'important_view_guide' => 'View upgrade guide',
        'important_view_release_notes' => 'View release notes',
        'important_alert_text' => 'Some updates need your attention.',
        'details_title' => 'Plugin details',
        'details_view_homepage' => 'View homepage',
        'details_readme' => 'Documentation',
        'details_readme_missing' => 'There is no documentation provided.',
        'details_changelog' => 'Changelog',
        'details_changelog_missing' => 'There is no changelog provided.',
        'details_upgrades' => 'Upgrade Guide',
        'details_upgrades_missing' => 'There are no upgrade instructions provided.',
        'details_licence' => 'Licence',
        'details_licence_missing' => 'There is no licence provided.',
        'details_current_version' => 'Current version',
        'details_author' => 'Author',
    ],
    'server' => [
        'connect_error' => 'Error connecting to the server.',
        'response_not_found' => 'The update server could not be found.',
        'response_invalid' => 'Invalid response from the server.',
        'response_empty' => 'Empty response from the server.',
        'file_error' => 'Server failed to deliver the package.',
        'file_corrupt' => 'File from server is corrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Class :class must define property $:property used by :behavior behavior.',
    ],
    'config' => [
        'not_found' => 'Unable to find configuration file :file defined for :location.',
        'required' => "Configuration used in :location must supply a value ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Unable to extract core file ':file'.",
    ],
    'event_log' => [
        'hint' => 'This log displays a list of potential errors that occur in the application, such as exceptions and debugging information.',
        'menu_label' => 'Event log',
        'menu_description' => 'View system log messages with their recorded time and details.',
        'empty_link' => 'Empty event log',
        'empty_loading' => 'Emptying event log...',
        'empty_success' => 'Event log emptied',
        'return_link' => 'Return to event log',
        'id' => 'ID',
        'id_label' => 'Event ID',
        'created_at' => 'Date & Time',
        'message' => 'Message',
        'level' => 'Level',
        'preview_title' => 'Event',
    ],
    'request_log' => [
        'hint' => 'This log displays a list of browser requests that may require attention. For example, if a visitor opens a CMS page that cannot be found, a record is created with the status code 404.',
        'menu_label' => 'Request log',
        'menu_description' => 'View bad or redirected requests, such as Page not found (404).',
        'empty_link' => 'Empty request log',
        'empty_loading' => 'Emptying request log...',
        'empty_success' => 'Request log emptied',
        'return_link' => 'Return to request log',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Counter',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status',
        'preview_title' => 'Request',
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Manage system settings',
        'manage_software_updates' => 'Manage software updates',
        'access_logs' => 'View system logs',
        'manage_mail_templates' => 'Manage mail templates',
        'manage_mail_settings' => 'Manage mail settings',
        'manage_other_administrators' => 'Manage other administrators',
        'impersonate_users' => 'Impersonate users',
        'manage_preferences' => 'Manage backend preferences',
        'manage_editor' => 'Manage global code editor preferences',
        'manage_own_editor' => 'Manage personal code editor preferences',
        'view_the_dashboard' => 'View the dashboard',
        'manage_default_dashboard' => 'Manage the default dashboard',
        'manage_branding' => 'Customize the back-end',
    ],
    'log' => [
        'menu_label' => 'Log settings',
        'menu_description' => 'Specify which areas should use logging.',
        'default_tab' => 'Logging',
        'log_events' => 'Log system events',
        'log_events_comment' => 'Store system events in the database in addition to the file-based log.',
        'log_requests' => 'Log bad requests',
        'log_requests_comment' => 'Browser requests that may require attention, such as 404 errors.',
        'log_theme' => 'Log theme changes',
        'log_theme_comment' => 'When a change is made to the theme using the back-end.',
    ],
    'media' => [
        'invalid_path' => "Invalid file path specified: ':path'.",
        'folder_size_items' => 'item(s)',
    ],
    'page' => [
        'custom_error' => [
            'label' => 'Page error',
            'help' => 'We\'re sorry, but something went wrong and the page cannot be displayed.',
        ],
        'invalid_token' => [
            'label' => 'Невалиден безбедносен токен',
        ],
        'maintenance' => [
            'label' => "We'll be right back!",
            'help' => "We're currently down for maintenance, check back soon!",
            'message' => 'Порака:',
            'available_at' => 'Try again after:',
        ],
    ],
    'pagination' => [
        'previous' => 'Претходно',
        'next' => 'Следно',
    ],
];
