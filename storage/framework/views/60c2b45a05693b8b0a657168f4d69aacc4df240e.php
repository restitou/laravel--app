<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'TodoList')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <script src="https://use.fontawesome.com/186d66fd50.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Baloo Da 2', cursive;
                background-color: #F8F8FF;
            }
        </style>
    </head>
    <body>
        <main id="app">
          <todo-list-component></todo-list-component>
        </main>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-vuejs-todolist-master\laravel-vuejs-todolist-master\resources\views/todos.blade.php ENDPATH**/ ?>