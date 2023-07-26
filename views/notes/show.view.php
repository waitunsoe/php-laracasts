<?php require_once base_path('views/partials/head.php') ?>
<?php require_once base_path('views/partials/nav.php') ?>
<?php require_once base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class=" text-center text-3xl font-bold">I am Note page with id <?= $note['id'] ?>!</h1>
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go Notes</a>
        </p>
        <p><?= htmlspecialchars($note['title']) ?></p>
        <form action="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm px-3 py-1 text-white rounded bg-red-600 mt-3">Delete</button>
        </form>
    </div>
</main>

<?php require_once base_path('views/partials/footer.php') ?>