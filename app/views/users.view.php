<?php require('partials/head.php');?>
<section class="bg-gray-800 rounded-lg p-5 shadow-xl">
    <h1 class="text-4xl text-white">Users</h1>
        <h1 class="text-3xl text-center text-white ">Submit a form test</h1>
        <form method="POST" action="/users" class="flex flex-col space-y-5 w-1/2">
            <div class="flex flex-col" >
                <label class="text-left text-lg text-white" for="name">Name</label>
                <input class="p-5 rounded-lg" type="text" name="name">
            </div>
            <input class="p-5 bg-blue-600 hover:shadow-xl hover:bg-blue-500 hover:text-white rounded-lg cursor-pointer font-black" type="submit">
        </form>
        <div class="my-5 bg-gray-700 rounded-lg flex flex-col w-1/2">
            <pre >
                <p>response</p>
                <?php foreach ($users as $user) :?>
                <p class="text-left ml-5 text-white"><?= $user->name ;?></p>
                <?php endforeach?>
            </pre>
        </div>
    </section>
<?php require('partials/footer.php');?>