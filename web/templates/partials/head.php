<!doctype html>
<html lang="ru" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body>
<header class="header">
    <div class="header_head">
        <div class="header_head_left">
            <a href="/" class="header_head_left_logo">
                <img src="./assets/img/logo_head.svg" alt="logo">
            </a>
            <div class="header_head_left_location">
                <span>Москва</span>
            </div>
            <button class="header_head_left_about">О нас</button>
        </div>
        <div class="header_head_right">
            <div class="header_head_right_add hidden">
                <div class="header_head_right_add_one">
                    <img src="./assets/img/profile_list_0.svg" alt="">
                    <span>Объявление</span>
                </div>
                <div class="header_head_right_add_two">
                    <img src="./assets/img/profile_list_1.svg" alt="">
                    <span>Заявка</span>
                </div>
            </div>
            <button class="header_head_right_button">
                <span class="header_head_right_button_span_one"></span>
                <span class="header_head_right_button_span_two"></span>
            </button>
            <div class="header_head_right_favourites">
                <a href="/profile/fav" class="header_head_right_favourites_text">Избранное
                    <span class="header_head_right_favourites_counter">3</span>
                </a>
            </div>

            <div class="header_head_right_messages">
                <a href="/profile/chat"  class="header_head_right_messages_text">Сообщения
                    <span class="header_head_right_messages_counter">1</span>
                </a>
            </div>
            <div class="header_head_right_office">
                <a href="/profile" class="header_head_right_office_text">Личный кабинет
                    <span class="header_head_right_office_counter">1</span>
                </a>
            </div>
            <?php if ($_SESSION['user'] ?? false) : ?>
                <div class="ml-3">
                    <form method="POST" action="/session">
                        <input type="hidden" name="_method" value="DELETE"/>

                        <button class="header_head_right_office_text">Выйти</button>
                    </form>
                </div>
            <?php else : ?>
                <div class="header_head_right_office">
                    <a class="header_head_right_office_text" href="/register">Регистрация</a>
                    <a class="header_head_right_office_text" href="/login">Вход</a>
                </div>
            <?php endif ?>

        </div>
    </div>
</header>
