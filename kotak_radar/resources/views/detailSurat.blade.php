<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/detailsurat.css'); }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kotak Surat</title>
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
                <a>Selamat Datang!</a>
            </div>

        </div>
    </nav>
    <div class="pt-5">
        <div class="bg-white grid h-full mb-1 rounded rounded-lg mt-4 ml-72 mr-72">
            <div class="align-middle flex justify-between pt-5 px-16">
                <div class="flex gap-4">
                    <div class="leading-5">
                        <h4 class="font-bold text-[#BB2525]"><span class="font-normal text-black">{{ $user->name }} to </span>{{ $post->recipient }}</h4>
                        <span>{{ $post->created_at }}</span>
                    </div>
                </div>

            </div>
            <div class="font-normal px-16 pb-6 text-black">
                <p>{{ $post->content }}</p>
            </div>
            <div class="flex gap-3 pb-6">
            </div>
        </div>
    <div class="bg-white grid h-full rounded rounded-lg mt-8 ml-72 mr-72">
        <div class="align-middle flex justify-between pt-5 pb-4 px-16">
            @php 
                $curr_user = auth()->user();
            @endphp
            <form method='POST' action="{{ route('comment.perform') }}">
                @csrf
                <div class="input-group">
                    <input type="hidden" name="user_id" value="{{ $curr_user->id }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="textfield" name="content" class="input-field" placeholder="Share your comments...">
                    <button type="submit">Post comment<i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </form>

        </div>
    </div>
    @foreach($comments as $comment)
    @php
        $user_name = App\Models\User::find($comment->user_id);
    @endphp
    <div class="bg-white grid h-full mb-4 rounded rounded-lg mt-2 ml-72 mr-72">
        <div class="align-middle flex justify-between pt-5 pb-5 px-16">
            <div class="flex gap-4">
                <div class="leading-5">
                    <h4 class="font-bold text-black">{{ $user_name->name }} commented</h4>
                    <h4 class="text-black">{{ $comment->created_at }}</h4>
                    <br>
                    <h4 class="text-black">{{ $comment->content }}</h4>
                </div>
            </div>
    
        </div>
    </div>
    @endforeach
    </div>

</body>
</html>
