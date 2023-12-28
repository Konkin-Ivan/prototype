<?php require_once base_path('templates/partials/head.php') ?>
<?php require_once base_path('templates/partials/banner.php') ?>

    <div class="main_left">
        <div class="main_left_head">
            <a href=""><img src="./assets/img/back.svg" alt=""></a>
            <h1>Регистрация</h1>
        </div>
        <div class="main_left_for">
            <button class="main_left_for_button main_left_for_button_active">Для ФЛ</button>
            <button class="main_left_for_button">Для ЮЛ</button>
        </div>
        <form action="/register" method="POST">
            <div  class="main_left_register">
                <label for="phoneNumber">Номер телефона
                    <input id="phoneNumber" name="phoneNumber" type="tel" autocomplete="tel" required
                           placeholder="" value="">
                </label>
                <label>Электронная почта
                    <input id="email" name="email" type="email" autocomplete="email" required
                           placeholder="Адрес электронной почты" value="">
                </label>
                <label for="name">Ваше имя
                    <input id="name" name="name" type="text">
                </label>


                <div class="main_left_register_button">
                    <button type="submit">Зарегистрироваться</button>
                    <span>У вас уже есть аккаунт?<a href="./authorization.html"> Войдите в него</a></span>
                </div>

                <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['phoneNumber'])) : ?>
                        <li><?= $errors['phoneNumber'] ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </form>
    </div>
    <div class="main_right">
        <img src="./assets/img/red-sport-car-front-side-view-black-wheel-with-metallic-silver-color 1.png" alt="">
    </div>


<?php require_once base_path('templates/partials/footer.php') ?>
