<?php require base_path('templates/partials/head.php') ?>
<?php require base_path('templates/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($products as $product) : ?>
                <li>
                    <a href="/note?id=<?= $product['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($product['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require base_path('templates/partials/footer.php') ?>
