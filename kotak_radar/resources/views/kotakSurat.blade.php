<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/kotaksurat.css'); }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }} ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kotak Surat</title>
</head>
<body class="bg-slate-100">
<header class="l-header" id="header">
        <nav class="topnav">
        <div class="nav-left-content">
            <div>
                <a href="{{ route('landing.show') }}"><img src="{{ asset('images/Radar Logo.png') }}" alt="" class="radar-logo"></a>
            </div>
            <div>
                <a href="/home">Beranda</a>
            </div>
            <div>
                <a href="/kuis">Kuis</a>
            </div>
            <div>
                <a href="/mail">Kotak Surat</a>
            </div>
            <div>
                <a href="/aboutUs">About Us</a>
            </div>
            <div>
                <a href="#">Policy Brief</a>
            </div>

        </div>
        <div class="nav-right-content">
        @csrf
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div class="name">
                <p>Selamat Datang, {{ $user->name}}</p>
            </div>

        </div>
    </nav>
        </header>
    <div class="">

    <div class="title px-16">
        <h2 class="text-xl font-bold">Kotak Surat</h2>
        <button class="inline-flex items-center" onclick="window.location.href='/addmail'">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>

        <span>Tambahkan surat</span>
        </button>
    </div>

    @foreach ($posts as $post)
    <div class="bg-white grid h-full mb-4 rounded rounded-lg mt-4 ml-16 mr-16">
        <div class="items-center flex justify-between pt-5 px-16">
            <div class="flex gap-4">
                <div class="leading-5">
                    <h4 class="font-bold text-[#BB2525]"><span class="font-bold text-black">Untuk: </span>{{ $post->recipient }}</h4>
                    <p class="my-4">{{ $post->created_at }}</p>
                </div>
            </div>


        </div>
        <div class="font-normal px-16 mb-4 text-black flex justify-between align-middle">
            <p><span class="font-semibold">Topik:</span> {{ $post->topic }}</p>
            <div class="">
            <p class="status">Diterima</p>
            </div>
        </div>
        <div class="font-normal px-16 pb-6 text-black">
            <p>{{ $post->content }}</p>
        </div>
        <div class="flex gap-3 pb-6">
        </div>
    </div>
    @endforeach
    </div>

</body>
</html>
