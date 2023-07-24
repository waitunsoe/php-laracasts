<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/nav.php' ?>
<?php require_once 'partials/banner.php' ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class=" text-center text-3xl font-bold">I am Notes page!</h1>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class=" text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create New Note</a>
        </p>
    </div>
</main>

<?php require_once 'partials/footer.php'; ?>