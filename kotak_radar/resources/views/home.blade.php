<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css'); }} ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Beranda</title>
</head>

<body class="bg-slate-100">
    <header class="l-header" id="header">
        <nav class="topnav">
        <div class="nav-left-content">
            <div>
            <a href="/landing"><img src="{{ asset('images/Radar Logo.png') }}" alt="" class="radar-logo"></a>
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
                <a href="/policyBrief">Policy Brief</a>
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
    <main>

        <div class="flex flex-col gap-5 lg:flex-row p-5 text-gray-500 w-full">
            <div id="kritik" class="h-full lg:order-none lg:w-1/1 order-first w-full mt-5">
            @foreach ($posts as $post)
            @php
                $user = App\Models\User::find($post->user_id);
                $comments_count = App\Models\Comments::where('post_id', $post->id)->count()
            @endphp
                <div class="bg-white grid h-full mb-3 py-3 rounded rounded-lg">
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
            <div id="topik" class="mt-5 flex flex-col h-full lg:flex-col lg:order-none lg:w-1/4 order-last w-full">
                <div>
                    <a href="/landing"><img id="mekanisme" src="{{ asset('images/tata-cara/1.svg') }}" alt="" class="h-full mb-5 rounded rounded-lg"></a>
                </div>
                <div class="bg-white p-7 rounded rounded-lg h-full">
                    <h3 class="font-bold mb-4 text-[#BB2525] text-lg"><a href="/home">All Topic</a></h3>
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
