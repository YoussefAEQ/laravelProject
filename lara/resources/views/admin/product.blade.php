
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Template</title>
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
        <h1 class="text-2xl font-bold mb-4 ">Product</h1>
    </div>
    <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Product Management</h2>
        <div class="mb-4">
            <form>
                <a href="{{route('product.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Product</a>
            </form>
        </div>
            <h2 class="text-xl font-bold mb-2">Product List</h2>
            <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400  ">
                <thead class="text-xs text-gray-700 uppercase bg-green-50 dark:bg-gray-700 dark:text-gray-400">
                    <th pe="col" class="px-6 py-4">Id</th>
                    <th pe="col" class="px-6 py-4">Title</th>
                    <th pe="col" class="px-6 py-4">description</th>
                    <th pe="col" class="px-6 py-4">price</th>
                    <th pe="col" class="px-6 py-4">image</th>
                    <th pe="col" class="px-6 py-4">Action</th>
                </thead>
                <tbody>
                    @foreach ($allProduct as $item)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-600">
                            <td class="px-6 py-4 font-medium">{{$item->id}}</td>
                            <td class="px-6 py-4 font-medium">{{$item->title}}</td>
                            <td class="px-6 py-4 font-medium">{{$item->description}}</td>
                            <td class="px-6 py-4 font-medium">{{$item->price}}</td>
                            <td class="px-6 py-4 font-medium">{{$item->image}}</td>

                            <td class="px-6 py-4 flex flex-row space-x-2">

                                <a href="{{route('product.edit',$item)}}">
                                    <button class="bg-red-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">Modifier</button>
                                </a>
                                <form action="{{route("product.destroy",$item)}}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
