<?php require __DIR__ . "/../partials/head.php"; ?>
<?php require __DIR__ . "/../partials/header.php"; ?>
<main>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">

        <div class="text-center">
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl"><?= $heading ?></h1>
            <a href="notes/create">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add note</button>
            </a>
            <ul class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>" class="hover:underline hover:text-blue-600 text-gray-300" href="">
                            <?= htmlspecialchars($note['body']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</main>
<?php require basePath('views/partials/footer.php') ?>
