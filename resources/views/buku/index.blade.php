<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    @include('buku.tabel1')

    <div class="mt-16">
        <h1 class="text-4xl font-bold my-8 text-center text-teal-500">Tabel Sorted By Id Descend</h1>
        <div class="relative overflow-x-auto ">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-teal-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Terbit
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data_buku_sorted as $buku)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                        {{ $no++ }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $buku->judul }}                        </th>
                        <td class="px-6 py-4">
                        {{ $buku->penulis }}
                        </td>
                        <td class="px-6 py-4">
                        {{ "Rp ". number_format($buku->harga, 2, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <h1 class="text-4xl font-bold my-8 px-32 text-teal-500">Jumlah Tabel : {{ $length }}</h1>
    <h1 class="text-4xl font-bold my-8 px-32 text-teal-500">Jumlah Harga : {{ "Rp ". number_format($harga, 2, ',', '.')  }}</h1>


</body>
</html>