<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
<div class="flex h-screen bg-gray-800" x-data="{ open: false }">
        <div :class="{'hidden': !open}" class="flex-shrink-0 w-64 bg-gray-800">
            <div class="h-screen flex flex-col justify-between">
                <div class="mt-4">
                    <form action="">
                        <a href="{{route('admin.home')}}" class="text-white px-4 py-2 block hover:bg-gray-700">Dashboard</a>
                        <a href="{{route('admin.users')}}" class="text-white px-4 py-2 block hover:bg-gray-700">Users</a>
                        <a href="{{route('admin.product')}}" class="text-white px-4 py-2 block hover:bg-gray-700">Product</a>
                    </form>
                </div>
            </div>
        </div>

<div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <div class="container mx-auto p-6 bg-red-400 ">
                <h1 class="text-2xl font-bold mb-4 ">Dashboard</h1>
    </div>
    <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
        <div class="container mx-auto p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h1 class="text-2xl  font-bold mb-4">Welcome,<span style="color: #9f1239"> {{ Auth::user()->name }} </span></h1>
                <div class="grid grid-cols-2 gap-4">
                    <div class="border border-gray-300 rounded-lg p-4">
                        <h2 class="text-lg font-semibold mb-2">Number of Products</h2>
                        <p class="text-xl">{{ $productsCount }}</p>
                    </div>
                    <div class="border border-gray-300 rounded-lg p-4">
                        <h2 class="text-lg font-semibold mb-2">Number of Users</h2>
                        <p class="text-xl">{{ $usersCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-2">Les Commandes:</h2>
                <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400  ">
                    <thead class="text-xs text-gray-700 uppercase bg-yellow-100 dark:bg-gray-700 dark:text-gray-400">
                        <th pe="col" class="px-6 py-4">N° Commande</th>
                        <th pe="col" class="px-6 py-4">Name of Product </th>
                        <th pe="col" class="px-6 py-4">Name of User</th>
                        <th pe="col" class="px-6 py-4">Date of Commande</th>
                    </thead>
                    <tbody>
                         {{-- @foreach ( as ) --}}
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-600">
                                <td class="px-6 py-4 font-medium"></td>
                                <td class="px-6 py-4 font-medium"></td>
                                <td class="px-6 py-4 font-medium"></td>
                                <td class="px-6 py-4 font-medium"></td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</div>
</body>
</html>
