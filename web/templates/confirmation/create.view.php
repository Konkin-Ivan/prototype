<?php require base_path('templates/partials/head.php') ?>

<main class="main">
    <div>
        <h1>Введите код из смс</h1>
        <form action="/confirmation" method="POST">
            <div>
                <label for="codeFromSms">Код из смс</label>
                <input id="codeFromSms" name="codeFromSms" type="number" autocomplete="" required
                       placeholder="" value="">
            </div>

            <div>
                <button type="submit">
                    Подтвердить
                </button>
            </div>
            <?php if (isset($errors['codeFromSms'])) : ?>
                <p><?= $errors['codeFromSms'] ?></p>
            <?php endif; ?>
        </form>
    </div>
</main>

<?php require base_path('templates/partials/footer.php') ?>
