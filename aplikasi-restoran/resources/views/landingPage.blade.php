<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body>
    <header></header>

    <div class="container mx-auto p-5">
        <h1 class="text-4xl font-bold text-center mb-3">PROMO YANG SEDANG BERLANGSUNG</h1>
        <div class="flex flex-wrap justify-center">
            @foreach ($promos as $promo)
                <div class="mx-2 mb-5">
                    <div class="w-80 bg-slate-300 rounded-xl overflow-hidden shadow-lg">
                        <img src="/img/1615916524567.jpeg" alt="dummy"
                            class="w-80 rounded-xl items-center p-5 mx-auto mt-5">

                        <div class="px-6 py-4">
                            <h3 class="text-3xl font-bold">{{ $promo->menus->nama_menu }}</h3>
                            <p class="text-gray-700 text-base">
                                {{ 'Rp ' . number_format($promo->menus->harga_menu) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
