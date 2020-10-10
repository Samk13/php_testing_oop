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
                <?php foreach($task as $name => $val) : ?>
                <th class="px-4 py-2"> <?= ucwords($name); ?></th>
                <?php endforeach ?>
            </tr>
            <tr>
                <td>
                    <?= $task['title']; ?>
                </td>
                <td>
                    <?= $task['due']; ?>
                </td>
                <td>
                    <?= $task['assigned_to']; ?>
                </td>
                <td>
                    <!-- <?= $task['completed'] ? 'Completed':'Not completed'; ?> -->
                    <?php
                    if($task['completed']) :?>
                        <span class="text-xl">&#9989;</span>
                    <?php else  :?>
                        <span class="text-xl">&#10060;</span>
                   <?php endif ?>
                </td>
            </table>
            <div class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">
                <?php
                dd($task);

                ?>
            </div>
            <div>
            <form action="" method="get" >
            <input type="text" name="age">
            <input type="submit">
            </form>
            <div><?= $result; ?></div>
            </div>

    </header>
</body>
</html>