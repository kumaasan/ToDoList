<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="todolist.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>Things to do</title>
</head>
    <body>

<a
        href="login.php"
        id="btn-logout"
        class="bg-dark dark:bg-dark-2 border-dark dark:border-dark-2 border rounded-full inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
>
    Log out
</a>
<a

        id="addTask"
        class="bg-dark dark:bg-dark-2 border-dark dark:border-dark-2 border rounded-full inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-body-color hover:border-body-color disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5"
>
    Add new task
</a>

<div id="list" class="flex items-center justify-center h-screen" >
<table class="mx-auto table-auto bg-white border-separate border border-gray-300">
    <thead>
    <tr>
        <th class="py-2 px-4 border-b-2 border-gray-300">Category</th>
        <th class="py-2 px-4 border-b-2 border-gray-300">Description</th>
        <th class="py-2 px-4 border-b-2 border-gray-300">Due to </th>
        <th class="py-2 px-4 border-b-2 border-gray-300">Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">The Sliding Mr. Bones (Next Stop, Pottersville)</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">Malcolm Lockyer</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">1961</div>
        </td>
        <td>
            <div class="bg-white rounded-t px-4 py-2">Done</div>
        </td>
    </tr>
    <tr>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">Witchy Woman</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">The Eagles</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">1972</div>
        </td>
        <td>
            <div class="bg-white rounded-t px-4 py-2">Done</div>
        </td>
    </tr>
    <tr>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">Shining Star</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">Earth, Wind, and Fire</div>
        </td>
        <td class="py-4 px-4 border-b border-gray-300">
            <div class="bg-white rounded-t px-4 py-2">1975</div>
        </td>
        <td>
            <div class="bg-white rounded-t px-4 py-2">Done</div>
        </td>
    </tr>
    </tbody>
</table>
</div>

<div id="addNewTaskForm" class="flex items-center justify-center h-screen" style="display: none">
<form class="max-w-sm mx-auto" method="post">
    <div class="mb-5">
        <label for="small-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Category</label>
        <input type="text" autocomplete="off" name="category" id="small-input" class="block w-full py-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5">
        <label for="base-input" class="block mb-2 mt-2 text-base font-medium text-gray-900 dark:text-white">Due to</label>

        <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input name="datepicker"  autocomplete="off" datepicker datepicker-orientation="bottom right" datepicker-format="{dd/mm/yyyy}"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>


    </div>

    <div class="mb-5">
        <label for="large-input" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Description</label>
        <textarea id="message" autocomplete="off" name="description" rows="7" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your task description..."></textarea>
    </div>
    <button type="submit" name="submitNewTask" class="text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

    <?php
        if(isset($_POST['submitNewTask'])){
            $category = $_POST['category'];
            $datepicker = $_POST['datepicker'];
            $description = $_POST['description'];

            echo $category . " " . $datepicker . " " . $description;
        }
    ?>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"> import Datepicker from 'flowbite-datepicker/Datepicker';
    const datepickerEl = document.getElementById('datepickerId');
    new Datepicker(datepickerEl, {
        // options
    }); </script>
    </body>
</html>
