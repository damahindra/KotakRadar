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
        <div>
            <a class="beranda" href="/home">Beranda</a>
            <a href="/kuis">Kuis</a>
            <a href="/mail">Kotak Surat</a>
            @csrf
            <a href="/logout">Logout</a>
            <p>{{ $user->name}}</p>
        </div>
        <div class="button">

            {{-- <button class="daftar"><a href="register">Sign Up</a></button></div></class></buttonclass>
       <button class="masuk"><a href="login">Log In</a></button></div></class></buttonclass> --}}
        </div>
    </nav>
    @foreach ($posts as $post)
    @php
        $user = App\Models\User::find($post->user_id);
    @endphp
    <div class="bg-[#f1f1f1] grid h-full mb-4 rounded rounded-lg mt-4 ml-24 mr-24">
        <div class="align-middle flex justify-between pt-5 px-7">
            <div class="flex gap-4">
                <img src="https://rvs-accountable-social-media-feed.vercel.app/assets/User Avatar 05.svg" alt="">
                <div class="leading-5">
                    <h4 class="font-bold text-black">{{ $user->name }} to {{ $post->recipient }}</h4>
                    <span>{{ $post->created_at }}</span>
                </div>
            </div>
            <a href="#" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Report.svg" alt="" class=""><span class="">Report</span></a>
        </div>
        <div class="font-normal px-7 py-3 text-black">
            <p>{{ $post->content }}</p>
        </div>
        <div class="flex gap-3 pb-6 pt-3 px-7">
            <a href="#" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Comments.svg" alt=""><span>11 comments</span></a>
            <a href="#" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Reaction.svg" alt=""><span>24 reactions</span></a>
        </div>
    </div>
    @endforeach
    
</body>

</html>
