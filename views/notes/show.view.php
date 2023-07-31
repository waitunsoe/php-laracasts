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
        <div class="mt-6 flex gap-5">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="block px-5 py-2 bg-blue-700 text-white rounded hover:bg-blue-500">Edit</a>
            <form action="/note/delete" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="block px-3 py-2 border border-red-700 text-red-700 rounded hover:bg-red-700 hover:text-white">Delete</button>
            </form>
        </div>

    </div>
</main>

<?php require_once base_path('views/partials/footer.php') ?>