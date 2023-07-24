<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/nav.php' ?>
<?php require_once 'partials/banner.php' ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class=" text-center text-3xl font-bold">Create New Note</h1>

        <form action="/notes/create" method="post">
            <label class="block">Enter Note</label>
            <textarea name="title" class="border border-blue-400 focus:border-blue-500"></textarea>
            <button class="block">Save Note</button>
        </form>

        <p class="mt-6">
            <a href="/notes" class="text-blue-500 hover:underline">All Notes</a>
        </p>
    </div>
</main>

<?php require_once 'partials/footer.php'; ?>