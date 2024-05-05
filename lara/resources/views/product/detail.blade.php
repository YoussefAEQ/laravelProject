<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div>
    <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" src="http://127.0.0.1:8000/images/{{ $item->image }}" title="{{ $item->title }}" />

        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
              Price: {{ $item->price }}
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">{{ $item->title }}</div>
            <p class="text-gray-700 text-base">
              Description: {{ $item->description }}
            </p>
          </div>
          <div class="p-6 pt-0">
            <button
             class=" mt-2 -mb-2 w-full rounded bg-yellow-400 p-4 text-sm font-medium  "
             type="button">
             Add to Cart
            </button>
            </div>
            <div class="p-6 pt-0">
                <button
                 class=" mt-2 -mb-2 w-full rounded bg-yellow-400 p-4 text-sm font-medium  "
                 type="button">
                 Acheter
                </button>
          </div>
        </div>

    </div>
</div>

</body>
</html>
