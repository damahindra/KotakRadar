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

<body class="bg-slate-100">

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
                <a>Selamat Datang, {{ $user->name}}</a>
            </div>

        </div>
    </nav>
    <!-- <div class="pt-5">
    {{-- display all mails --}}
    @foreach ($posts as $post)
    @php
        $user = App\Models\User::find($post->user_id);
    @endphp
    <div class="bg-[#f1f1f1] grid h-full mb-4 rounded rounded-lg mt-4 ml-24 mr-24">
        <div class="align-middle flex justify-between pt-5 px-7">
            <div class="flex gap-4">
                <div class="leading-5">
                    <h4 class="overflow-hidden font-bold text-[#BB2525]">{{ $user->name }} <span class="font-normal text-black">to</span>  {{ $post->recipient }}</h4>
                    <span>{{ $post->created_at }}</span>
                </div>
            </div>
        </div>
        <div class="font-normal px-7 py-3 pb-6 text-black">
            <p>{{ $post->content }}</p>
        </div>
        <div class="flex gap-3 pb-6 pt-3 px-7">
        <a href="#" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Comments.svg" alt=""><span>36 comments</span></a>
        </div>
    </div>
    @endforeach
    </div> -->
    <main>
    
        <div class="container flex flex-col gap-5 lg:flex-row p-5 py-10 text-gray-500">

            <!-- <div class="mt-5 bg-white h-full lg:mt-0 lg:order-none lg:w-1/4 order-first p-7 rounded rounded-md w-full">
            <h2 class="font-semibold mb-4 text-gray-700 text-lg">Users</h2>
                <ul class="gap-4 grid leading-5 mb-2 text-gray-500">
                    @foreach ($users as $users)
                    <li class="flex gap-4 w-full">
                        <img src="https://rvs-accountable-social-media-feed.vercel.app/assets/User Avatar 02.svg" alt="" class="">
                        <p class="pt-1">{{ $users->name}}</p>
                    </li>
                    @endforeach
                </ul>
            </div> -->
            <div class="h-full lg:order-none lg:w-1/1 order-first w-full mt-5 ml-8">
            @foreach ($posts as $post)
            @php
                $user = App\Models\User::find($post->user_id);
                $comments_count = App\Models\Comments::where('post_id', $post->id)->count()
            @endphp
                <div class="bg-white grid h-full mb-3 rounded rounded-lg">
                    <div class="align-middle flex justify-between pt-5 px-7">
                        <div class="flex gap-4">
                            <div class="leading-5">
                            <h4 class="overflow-hidden font-bold text-[#BB2525]">{{ $user->name }} <span class="font-normal text-black">to</span>  {{ $post->recipient }}</h4>
                            <span>{{ $post->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="font-normal px-7 py-3 text-black">
                    <p>{{ $post->content }}</p>
                    </div>
                    <div class="flex gap-3 pb-6 pt-3 px-7">
                        <a href="{{ url('/mail', ['user' => $user->id, 'post' => $post->id])}}" class="align-middle border border-gray-300 flex gap-3 justify-center px-4 py-1 rounded rounded-lg"><img src="https://rvs-accountable-social-media-feed.vercel.app/assets/Comments.svg" alt=""><span>{{ $comments_count }} comments</span></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mr-8 mt-5 flex flex-col-reverse h-full lg:flex-col lg:order-none lg:w-1/4 order-last w-full">
                <div class="bg-white p-7 rounded rounded-lg h-full">
                    <h2 class="font-bold mb-4 text-gray-700 text-lg"><a href="/home">All Topic</a></h2>
                    <ul class="gap-4 grid leading-5 text-gray-500">
                        @php
                            $topics = App\Models\Post::select('topic')->distinct()->get();
                        @endphp
                        @foreach ($topics as $topic)
                        <li class="gap-2 grid w-full">
                            <a href="{{ url('/topic', $topic->topic) }}" class="font-medium text-black">{{ $topic->topic }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- <a href="#" class="align-middle flex font-semibold gap-2 text-orange-500 underline">
                        <span>View all Stories</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                        </svg>
                    </a> -->
                </div>
            </div>
        </div>
    </main>


</body>

</html>
