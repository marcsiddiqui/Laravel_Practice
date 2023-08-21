<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <form method="post" action="/createproduct">
            @csrf;
            <input type="text" name="Name" placeholder="Product Name" />
            <input type="text" name="Description" placeholder="Product Description" />
            <input type="number" name="BundleQuantity" placeholder="Product Bundle Quantity" />
            <button type="submit">Save</button>
        </form>
    </body>
</html>
