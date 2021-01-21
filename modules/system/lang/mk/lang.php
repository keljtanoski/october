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
        'project_label' => 'Прикачи на проектот',
        'plugin_label' => 'Инсталирај додаток',
        'theme_label' => 'Инсталирај тема',
        'missing_plugin_name' => 'Ве молиме, наведете име на додатокот за инсталирање.',
        'missing_theme_name' => 'Ве молиме, наведете име на тема за инсталирање.',
        'install_completing' => 'Завршување на процесот на инсталација',
        'install_success' => 'Додатокот е успешно инсталиран',
    ],
    'updates' => [
        'title' => 'Управувајте со ажурирањата',
        'name' => 'Ажурирај софтвер',
        'menu_label' => 'Ажурирања & додатоци',
        'menu_description' => 'Ажурирајте го системот, управувајте и инсталирајте приклучоци и теми.',
        'return_link' => 'Вратете се на ажурирањата на системот',
        'check_label' => 'Проверете дали има ажурирања',
        'retry_label' => 'Обиди се повторно',
        'plugin_name' => 'Име',
        'plugin_code' => 'Код',
        'plugin_description' => 'Опис',
        'plugin_version' => 'Верзија',
        'plugin_author' => 'Автор',
        'plugin_not_found' => 'Приклучокот не е пронајден',
        'plugin_version_not_found' => 'Верзијата на додатокот/приклучокот не е пронајдена',
        'core_current_build' => 'Тековна верзија',
        'core_view_changelog' => 'Прикажи листа со промени',
        'core_build' => 'Верзија :build',
        'core_build_help' => 'Достапна е нова верзија.',
        'core_downloading' => 'Превземање на апликациски датотеки',
        'core_extracting' => 'Отпакување на апликациски датотеки',
        'core_set_build' => 'Поставување на број на верзија',
        'update_warnings_title' => 'Откриени се некои проблеми и бараат внимание:',
        'update_warnings_plugin_missing' => 'Додатокот :parent_code бара :code да се инсталира пред да работи',
        'changelog' => 'Листа со промени',
        'changelog_view_details' => 'Погледни детали',
        'plugins' => 'Додатоци',
        'themes' => 'Теми',
        'disabled' => 'Оневозможено',
        'plugin_downloading' => 'Се превзема додаток: :name',
        'plugin_extracting' => 'Отпакување додаток: :name',
        'plugin_version_none' => 'Нов додаток/приклучок',
        'plugin_current_version' => 'Сегашна верзија',
        'theme_new_install' => 'Инсталација на нова тема.',
        'theme_downloading' => 'Се превзема тема: :name',
        'theme_extracting' => 'Отпакување тема: :name',
        'update_label' => 'Ажурирање на софтвер',
        'update_completing' => 'Завршува процесот на ажурирање',
        'update_loading' => 'Се вчитуваат достапните ажурирања...',
        'update_success' => 'Процесот на ажурирање е завршен',
        'update_failed_label' => 'Ажурирањето не беше успешно',
        'force_label' => 'Присилно ажурирање',
        'found' => [
            'label' => 'Пронајдени нови ажурирања!',
            'help' => 'Кликни на Ажурирај Софтвер за да започне процесот на ажурирање.',
        ],
        'none' => [
            'label' => 'Нема ажурирања',
            'help' => 'Не беа пронајдени нови ажурирања.',
        ],
        'important_action' => [
            'empty' => 'Изберете акција',
            'confirm' => 'Потврдете го ажурирањето',
            'skip' => 'Прескокнете го ова ажурирање (само еднаш)',
            'ignore' => 'Прескокнете го ова ажурирање (секогаш)',
        ],
        'important_action_required' => 'Неопходна акција',
        'important_view_guide' => 'Погледнете го упатството за надградба',
        'important_view_release_notes' => 'Погледнете ги белешките од издавањето',
        'important_alert_text' => 'На некои надградби им треба вашето внимание.',
        'details_title' => 'Детали за додатокот',
        'details_view_homepage' => 'Погледнете ја почетната страница',
        'details_readme' => 'Документација',
        'details_readme_missing' => 'Нема обезбедена документација.',
        'details_changelog' => 'Листа на промени',
        'details_changelog_missing' => 'Нема обезбеден дневник на промени.',
        'details_upgrades' => 'Водич за надградба',
        'details_upgrades_missing' => 'Не се дадени упатства за надградба.',
        'details_licence' => 'Лиценца',
        'details_licence_missing' => 'Нема обезбедена лиценца.',
        'details_current_version' => 'Сегашна верзија',
        'details_author' => 'Автор',
    ],
    'server' => [
        'connect_error' => 'Грешка при поврзување со серверот.',
        'response_not_found' => 'Серверот за ажурирање не е пронајден.',
        'response_invalid' => 'Невалиден одговор од серверот.',
        'response_empty' => 'Празен одговор од серверот.',
        'file_error' => 'Серверот не успеа да го испорача пакетот.',
        'file_corrupt' => 'Датотеката од серверот е оштетена.',
    ],
    'behavior' => [
        'missing_property' => 'Класа :class мора да дефинира својство $:property што го користи :behavior.',
    ],
    'config' => [
        'not_found' => 'Конфигурациската датотека :file дефинирана за :location не е пронајдена.',
        'required' => "Конфигурацијата што се користи во :location мора да обезбеди вредност за ':property' својство.",
    ],
    'zip' => [
        'extract_failed' => "Екстракцијата на главната датотека ':file' не е возможна.",
    ],
    'event_log' => [
        'hint' => 'Овој дневник прикажува список на потенцијални грешки што се случуваат во апликацијата, како што се исклучоци и информации за дебагирање.',
        'menu_label' => 'Дневник на настани',
        'menu_description' => 'Прегледајте ги системските пораки со запишано време и детали.',
        'empty_link' => 'Испразни го дневникот за настани',
        'empty_loading' => 'Празнење на дневникот за настани...',
        'empty_success' => 'Дневникот на настани е испразнет',
        'return_link' => 'Врати се во дневникот на настани',
        'id' => 'ID',
        'id_label' => 'ID на настан',
        'created_at' => 'Датум & време',
        'message' => 'Порака',
        'level' => 'Ниво',
        'preview_title' => 'Настан',
    ],
    'request_log' => [
        'hint' => 'Овој дневник прикажува список на барања што може да бараат ваше внимание. На пример, кога посетител отвора страница и таа не постои.',
        'menu_label' => 'Дневник на барања',
        'menu_description' => 'Прикажи лоши или пренасочени барања.',
        'empty_link' => 'Испразни го дневник на барања',
        'empty_loading' => 'Празнење на дневникот со барања...',
        'empty_success' => 'Дневникот со барања е испразнет',
        'return_link' => 'Врати се во дневникот на барања',
        'id' => 'ID',
        'id_label' => 'ID на дневник',
        'count' => 'Бројач',
        'referer' => 'Референци',
        'url' => 'URL',
        'status_code' => 'Статус',
        'preview_title' => 'Барање',
    ],
    'permissions' => [
        'name' => 'Систем',
        'manage_system_settings' => 'Управувајте со системските поставки',
        'manage_software_updates' => 'Управувајте со ажурирањата на софтверот',
        'access_logs' => 'Погледнете ги дневниците на системот',
        'manage_mail_templates' => 'Управувајте со шаблони за е-пошта',
        'manage_mail_settings' => 'Управувајте со поставките за е-пошта',
        'manage_other_administrators' => 'Управувајте со други администратори',
        'impersonate_users' => 'Имитирај корисници',
        'manage_preferences' => 'Управувајте со преференциите на позадинскиот систем',
        'manage_editor' => 'Управувајте со опциите на едиторот на глобалниот код',
        'manage_own_editor' => 'Управувајте со преференциите на едиторот на личен код',
        'view_the_dashboard' => 'Погледнете ја контролната табла',
        'manage_default_dashboard' => 'Управувајте со основната контролна табла',
        'manage_branding' => 'Измени го позадинскиот систем',
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
