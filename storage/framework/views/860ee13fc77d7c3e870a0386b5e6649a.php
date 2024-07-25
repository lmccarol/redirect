<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Redirect</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <!--Scripts -->
    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>

<!-- background image added to body with no repeat, fixed attachment and cover -->

<body style="background-image: url(/img/laptop.jpg); background-repeat:no-repeat; background-attachment: fixed;
background-size: cover;">
   
    <!-- navigation bar with language option -->
    <div id="app">
        <div class="text-capitalize" style="background-color: #343a40;">
            <nav class="navbar navbar-expand-lg navbar-dark container p-6">
                <div class="navbar-nav flex justify-end">
                    <a class="text-white" href="lang/en">EN</a>
                    <span class="mg-1">/</span>
                    <a class="text-white" href="lang/fr">FR</a>
                </div>
            </nav>
        </div>
    </div>

    <!-- container for logo, text and button for portal link -->

    <div class="flex h-screen justify-center items-center">
        <div class="text-center" style="background-color:rgba(0, 0, 0, 0.8)">
            <!-- ⬅️ THIS DIV WILL BE CENTERED style="background-color:rgba(0, 0, 0, 0.5)"-->
            <img src="/img/Netsolid-Logo.png" class="img-fluid py-6 mx-auto" alt="Netsolid">

            <h1 class="text-4xl " style="color: #e20e2b;"><?php echo e(__('index.Titlemsg')); ?></h1>
            <p class="text-xl text-white px-12"><?php echo e(__('index.msgbox')); ?></p>

            <a href="https://portal.netsolid.ca"
                class="inline-block text-xl px-4 py-2 border rounded text-white font-bold hover:border-transparent hover:text-blue-500 hover:bg-white  mt-6 mb-6"><?php echo e(__('index.portal')); ?></a>

        </div>
    </div>

</body>

</html>
<?php /**PATH /app/resources/views/welcome.blade.php ENDPATH**/ ?>