<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-partials.header />

    <main>
        <x-partials.categories.picker :subcategories="$category->subcategories" />
    </main>
    <x-partials.footer />

    <x-partials.copyright />

</body>

</html>
