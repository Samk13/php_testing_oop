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
        <section class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">
            <?php foreach($tasks as $row) : ?>
                <ul >
                    <li><?= $row->get_description(); ?></li>
                    <li><?= $row->get_completed(); ?></li>
                </ul>
            <?php endforeach?>
        </section>

    </header>
</body>
</html>