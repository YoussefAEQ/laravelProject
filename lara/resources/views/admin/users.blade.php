<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Template</title>
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
        <h1 class="text-2xl font-bold mb-4 ">Users</h1>
    </div>
    <div>
        <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="container mx-auto p-6">
                <h2 class="text-xl font-bold mb-2">Users List</h2>
        <table class="border-collapse min-w-full text-left text-sm font-light border border-slate-400 ...">
            <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
                <th class="border border-slate-300 ...">Id</th>
                <th class="border border-slate-300 ...">Name</th>
                <th class="border border-slate-300 ...">email</th>
                <th class="border border-slate-300 ...">phone</th>
                <th class="border border-slate-300 ...">address</th>
            </tr>
            </thead>
            @foreach ($users as $user)

            <tbody class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
            <tr>
                <td class="border border-slate-300 ...">{{$user->id}}</td>
                <td class="border border-slate-300 ...">{{$user->name}}</td>
                <td class="border border-slate-300 ...">{{$user->email}}</td>
                <td class="border border-slate-300 ...">{{$user->phone}}</td>
                <td class="border border-slate-300 ...">{{$user->address}}</td>
            </tr>

            </tbody>
            @endforeach

        </table>
      </div>
</div>
</body>
</html>
