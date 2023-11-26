<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kotak Radar</title>
</head>

<body>

    <nav class="topnav">
        <div class="nav-left-content">
            <div>
                <a href="/home">Beranda</a>
            </div>
            <div>
                <a href="/kuis">Kuis</a>
            </div>
            <div>
                <a href="/mail">Kotak Surat</a>
            </div>

        </div>
        <div class="nav-right-content">
            @csrf
            <div>
                <a href="/logout">Logout</a>
            </div>
            <div>
                <a>Selamat Datang! {{ $user->name}}</a>
            </div>

        </div>
    </nav>
    <div class="pt-5">
    @foreach ($posts as $post)
    <div class="bg-[#f1f1f1] grid h-full mb-4 rounded rounded-lg mt-4 ml-64 mr-64">
        <div class="align-middle flex justify-between pt-5 px-16">
            <div class="flex gap-4">
                <div class="leading-5">
                    <h4 class="overflow-hidden font-bold text-[#BB2525]">{{ $user->name}} <span class="font-normal text-black">to</span>  {{ $post->recipient }}</h4>
                    <span>{{ $post->created_at }}</span>
                </div>
            </div>
        </div>
        <div class="font-normal px-16 py-3 pb-6 text-black">
            <p>{{ $post->content }}</p>
        </div>
        <div class="flex gap-3 pb-6 pt-3 px-7 ml-8">
        <a href="#" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Comments.svg" alt=""><span>36 comments</span></a>
        </div>
    </div>
    @endforeach
    </div>


</body>

</html>
