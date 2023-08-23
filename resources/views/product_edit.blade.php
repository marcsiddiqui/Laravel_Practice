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

    <a href="/products"> --- Back to List</a>

        <h1>Edit Product</h1>
        
        <form action="pro_edit" method="post">
            @csrf;

            <input name="Id" type="hidden" value={{$id}} />
            <input type="text" name="Name" placeholder="Product Name" value="{{$name}}" />
            <input type="text" name="Description" placeholder="Product Description" value="{{$description}}" />
            <input type="number" name="BundleQuantity" placeholder="Product Bundle Quantity" value="{{$bundle_qunatity}}" />

            <button type="submit">Save Product</button>
        </form>

    </body>
</html>
