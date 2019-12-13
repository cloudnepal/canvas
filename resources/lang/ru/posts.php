<?php

return [

    'header'  => 'Публикации',
    'empty'   => [
        'description' => 'Публикаций не найдено, начните с',
        'action'      => 'добавления новой публикации',
    ],
    'search'  => [
        'input' => 'Поиск по названию ...',
        'empty' => 'Ни одной публикации не было найдено по заданным критериям поиска.',
    ],
    'details' => [
        'published' => 'Опубликовано',
        'draft'     => 'Черновик',
        'updated'   => 'Обновлено',
        'scheduled' => 'по расписанию',
    ],
    'forms'   => [
        'editor'   => [
            'title'  => 'Заголовок',
            'body'   => 'Расскажи свою историю...',
            'link'   => 'Вставьте или напишите ссылку...',
            'html'   => [
                'label'       => 'Вставить HTML',
                'placeholder' => 'Вставьте свой HTML здесь',
            ],
            'images' => [
                'featured' => [
                    'title'       => 'Подпись к изображению',
                    'placeholder' => 'Добавьте подпись для вашего изображения',
                ],
                'picker'   => [
                    'greeting'    => 'Пожалуйста',
                    'action'      => 'загрузите',
                    'item'        => 'изображение',
                    'operator'    => 'или',
                    'unsplash'    => 'найти на Unsplash',
                    'key'         => 'Пожалуйста, настройте ваш ключ Unsplash API.',
                    'placeholder' => 'Поиск бесплатных фотографий в высоком разрешении',
                    'clear'       => [
                        'action'      => 'Удалить',
                        'description' => 'выбранное изображение',
                    ],
                    'caption'     => [
                        'by' => 'фото',
                        'on' => 'на',
                    ],
                    'search'      => [
                        'empty' => 'Мы не смогли найти совпадений.',
                    ],
                    'uploader'    => [
                        'label'   => 'Добавить изображение',
                        'caption' => [
                            'placeholder' => 'Введите подпись к изображению (опционально)',
                        ],
                        'layout'  => [
                            'default' => 'Расположение по умолчанию',
                            'wide'    => 'Широкое изображение',
                        ],
                    ],
                ],
            ],
        ],
        'image'    => [
            'header' => 'Главное изображение',
        ],
        'publish'  => [
            'header'  => 'Дата публикации (м/д/г ч:м)',
            'subtext' => [
                'details'  => 'Планировщик публикаций использует 24-часовой формат времени в',
                'timezone' => 'часовом поясе',
            ],
        ],
        'seo'      => [
            'header'    => 'SEO и социальные сети',
            'meta'      => 'Мета Описание',
            'facebook'  => [
                'title'       => [
                    'label'       => 'Заголовок карточки Facebook',
                    'placeholder' => 'Заголовок в карточке Facebook',
                ],
                'description' => [
                    'label'       => 'Описание карточки Facebook',
                    'placeholder' => 'Описание в карточке Facebook',
                ],
            ],
            'twitter'   => [
                'title'       => [
                    'label'       => 'Заголовок карточки Twitter',
                    'placeholder' => 'Заголовок в карточке Twitter',
                ],
                'description' => [
                    'label'       => 'Описание карточки Twitter',
                    'placeholder' => 'Описание в карточке Twitter',
                ],
            ],
            'canonical' => [
                'label'       => 'Каноническая ссылка',
                'placeholder' => 'Каноническая ссылка оригинального источника',
            ],
            'sync'      => [
                'title'       => 'Синхронизировать с заголовком поста',
                'description' => 'Синхронизировать с краткой публикацией',
            ],
        ],
        'settings' => [
            'header'  => 'Общие настройки',
            'slug'    => [
                'label'       => 'Строка Идентификатор',
                'placeholder' => 'уникальная-строка-идентификатор',
            ],
            'summary' => [
                'label'       => 'Резюме',
                'placeholder' => 'Короткое описание...',
            ],
            'topic'   => [
                'label' => 'Тема',
            ],
            'tags'    => [
                'label' => 'Теги',
            ],
        ],
    ],
    'delete'  => [
        'header'  => 'Удаление',
        'warning' => 'Удаленные сообщения исчезают навсегда. Вы уверены, что хотите продолжить?',
    ],

];