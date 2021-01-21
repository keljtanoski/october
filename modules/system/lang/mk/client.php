<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client-side Language Lines
    |--------------------------------------------------------------------------
    |
    | These are messages made available to the client browser via JavaScript.
    | To compile this file run: php artisan october:util compile lang
    |
    */

    'markdowneditor' => [
        'formatting' => 'Форматирање',
        'quote' => 'Цитат',
        'code' => 'Код',
        'header1' => 'Заглавие 1',
        'header2' => 'Заглавие 2',
        'header3' => 'Заглавие 3',
        'header4' => 'Заглавие 4',
        'header5' => 'Заглавие 5',
        'header6' => 'Заглавие 6',
        'bold' => 'Задебели',
        'italic' => 'Закоси',
        'unorderedlist' => 'Несортирана листа',
        'orderedlist' => 'Подредена листа',
        'video' => 'Видео',
        'image' => 'Слика',
        'link' => 'Линк',
        'horizontalrule' => 'Вметни хоризонтална линија',
        'fullscreen' => 'Цел екран',
        'preview' => 'Преглед',
    ],
    'mediamanager' => [
        'insert_link' => 'Вметни линк',
        'insert_image' => 'Вметни слика',
        'insert_video' => 'Вметни видео',
        'insert_audio' => 'Вметни аудио',
        'invalid_file_empty_insert' => 'Изберете датотека кон која ќе се вметнат линкови.',
        'invalid_file_single_insert' => 'Изберете една датотека за вметнување.',
        'invalid_image_empty_insert' => 'Изберете слика/слики за вметнување.',
        'invalid_video_empty_insert' => 'Изберете видео датотека за вметнување.',
        'invalid_audio_empty_insert' => 'Изберете аудио датотека за вметнување.',
    ],
    'alert' => [
        'confirm_button_text' => 'Добро',
        'cancel_button_text' => 'Откажи',
        'widget_remove_confirm' => 'Отстрани го овој виџет?',
    ],
    'datepicker' => [
        'previousMonth' => 'Претходен месец',
        'nextMonth' => 'Следен месец',
        'months' => ['Јануари', 'Февруари', 'Март', 'Април', 'Мај', 'Јуни', 'Јули', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември'],
        'weekdays' => ['Недела', 'Понеделник', 'Вторник', 'Среда', 'Четврток', 'Петок', 'Сабота'],
        'weekdaysShort' => ['Нед', 'Пон', 'Вто', 'Сре', 'Четв', 'Пет', 'Саб']
    ],
    'colorpicker' => [
        'choose' => 'Добро',
    ],
    'filter' => [
        'group' => [
            'all' => 'сите',
        ],
        'scopes' => [
            'apply_button_text' => 'Примени',
            'clear_button_text' => 'Одстрани',
        ],
        'dates' => [
            'all' => 'сите',
            'filter_button_text' => 'Филтрирај',
            'reset_button_text' => 'Ресетирај',
            'date_placeholder' => 'Датум',
            'after_placeholder' => 'После',
            'before_placeholder' => 'Пред',
        ],
        'numbers' => [
            'all' => 'сите',
            'filter_button_text' => 'Филтрирај',
            'reset_button_text' => 'Ресетирај',
            'min_placeholder' => 'Минимум',
            'max_placeholder' => 'Максимум',
        ],
    ],
    'eventlog' => [
        'show_stacktrace' => 'Покажи ја трагата',
        'hide_stacktrace' => 'Скријте ја трагата',
        'tabs' => [
            'formatted' => 'Форматирано',
            'raw' => 'Изворно',
        ],
        'editor' => [
            'title' => 'Уредник на изворен код',
            'description' => 'Вашиот оперативен систем треба да биде конфигуриран да слуша една од овие URL-шеми.',
            'openWith' => 'Отвори со',
            'remember_choice' => 'Запомнете ја избраната опција за оваа сесија',
            'open' => 'Отвори',
            'cancel' => 'Откажи',
        ],
    ],
];
