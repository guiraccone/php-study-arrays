<?php require "partials/head.php"; ?>
<?php require "partials/header.php"; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl"><?= $heading ?></h1>
            <ul class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>" class="hover:underline hover:text-blue-600 text-gray-300" href="">
                            <?= $note['body']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>
<?php require "partials/footer.php"; ?>