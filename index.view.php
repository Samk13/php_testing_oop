<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam test</title>
    <style>
    /* header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    } */
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-gray-900">
    <header class="container mx-auto text-center bg-orange-400 p-2 mt-10 rounded-lg">
        <h1 class="text-4xl font-bold mb-5"> Testin with PHP</h1>
        <table class="table-auto w-full">
            <tr>
                <?php foreach($task1 as $name => $val) : ?>
                <th class="px-4 py-2 text-left"> <?= ucwords($name); ?></th>
                <?php endforeach ?>
            </tr>
            <tr>
                <td class="px-4 py-2 text-left">
                    <?= $task1['title']; ?>
                </td>
                <td class="px-4 py-2 text-left">
                    <?= $task1['due']; ?>
                </td>
                <td class="px-4 py-2 text-left">
                    <?= $task1['assigned_to']; ?>
                </td>
                <td class="px-4 py-2 text-left">
                    <!-- <?= $task1['completed'] ? 'Completed':'Not completed'; ?> -->
                    <?php
                    if($task1['completed']) :?>
                        <span class="text-xl">&#9989;</span>
                    <?php else  :?>
                        <span class="text-xl">&#10060;</span>
                   <?php endif ?>
                </td>
            </table>
            <section>
        <div>test</div>
            <ul class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">
            <?php foreach ($tasks as $task) :?>
                <li>
                <?php if ($task->get_completed()) :?>
                    <strike>
                        <?= $task->get_description(); ?>
                    </strike>
                    <?php else : ?>
                    <?= $task->get_description(); ?>
                <?php endif; ?>
                </li>
            <?php endforeach ?>
            </ul>
        </section>
        <?php
            dd($tasks);
        ?>

    </header>
</body>
</html>