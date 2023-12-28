<?php require_once base_path('templates/partials/head.php') ?>
<?php require_once base_path('templates/partials/banner.php') ?>

    <div class="main_left">
        <div class="main_left_head">
            <a href=""><img src="./assets/img/back.svg" alt=""></a>
            <h1>Авторизация</h1>
        </div>
        <div class="main_left_for">
            <button class="main_left_for_button main_left_for_button_active">Для ФЛ</button>
            <button class="main_left_for_button">Для ЮЛ</button>
        </div>
        <div class="main_left_register">
            <form action="/session" method="POST">
                <label>Ваше имя
                    <input type="text">
                </label>
                <label>Номер телефона
                    <input type="text" placeholder="+7">
                </label>
                <label>Электронная почта
                    <input id="email"
                           name="email"
                           type="email"
                           autocomplete="email"
                           required
                           placeholder=""
                           value="">
                </label>
                </label>
                <div class="main_left_register_button">
                    <button>Войти</button>
                    <span>У вас уже есть аккаунт?<a href="./authorization.html"> Войдите в него</a></span>
                </div>
                <?php if (isset($errors['email'])) : ?>
                    <li><?= $errors['email'] ?></li>
                <?php endif; ?>

                <?php if (isset($errors['phoneNumber'])) : ?>
                    <li><?= $errors['phoneNumber'] ?></li>
                <?php endif; ?>
            </form>
        </div>
        <div class="main_left_register hidden">
            <label>Номер телефона
                <input type="text" placeholder="+7">
            </label>
            <label>Электронная почта
                <input type="text">
            </label>
            <label>Наименование организации
                <input type="text">
            </label>
            <label>ИНН
                <input type="text">
            </label>
            <label>ОГРН/ОГРНИП
                <input type="text">
            </label>
            <label>Номер записи в ЕГРЮЛ
                <input type="text">
            </label>
            <div class="main_left_register_button">
                <button>Войти</button>
                <span>У вас уже есть аккаунт?<a href="./authorization.html"> Войдите в него</a></span>
            </div>
        </div>
    </div>
    <div class="main_right">
        <img src="./assets/img/red-sport-car-front-side-view-black-wheel-with-metallic-silver-color 1.png" alt="">
    </div>

<?php require base_path('templates/partials/footer.php') ?>
