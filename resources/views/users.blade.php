<div>
    <marquee>
        {{ $username }}
        @if (1 == 1)
            <span class="text-green-500">Hello, {{ $username }}</span>
        @else
            <span class="text-red-500">Hello, not {{ $username }}</span>
        @endif

        @foreach ($args as $arg)
            {{ $arg }}
        @endforeach

        @auth({{$username}})
            <span class="text-blue-500">You are authenticated as {{ $username }}</span>
        @endauth

        @guest
            <span class="text-yellow-500">You are a guest</span>
        @endguest
    </marquee>
</div>
