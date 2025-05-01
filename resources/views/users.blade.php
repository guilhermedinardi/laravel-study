<div>
    {{-- <marquee>
        {{ $username }}
        @if (1 == 1)
            <span class="text-green-500">Hello, {{ $username }}</span>
        @else
            <span class="text-red-500">Hello, not {{ $username }}</span>
        @endif

        @foreach ($args as $arg)
            {{ $arg }}
        @endforeach

        @auth
            <span class="text-blue-500">You are authenticated as {{ $username }}</span>
        @endauth

        @guest
            <span class="text-yellow-500">You are a guest</span>
        @endguest
    </marquee> --}}

    @if ($username == 'dinardito')
        <span class="text-green-500">Hello if, {{ $username }}</span>
     @elseif ($username == 'guilherme')
        <span class="text-blue-500">Hello else if, {{ $username }}</span>
     @else
        <span class="text-red-500">Hello else, not {{ $username }}</span>
    @endif

    @unless ($username == 'dinardito')
        <span class="text-green-500">Hello unless, {{ $username }}</span>
    @endunless

    @isset($username)
        <span class="text-blue-500">Hello isset, {{ $username }}</span>
    @endisset

    @empty($args['a'])
        <span class="text-red-500">args não setado </span>
    @endempty

    <table>
        @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>{{ $i }}</td>
            </tr>
        @endfor
    </table>

    @while ($whilezada)
        {{-- {{dump($whilezada)}} --}}

        @if ($whilezada)
            {{ $whilezada = false }}
        @endif
    @endwhile
    <table>
        @foreach ($usernames as $key => $user)
            <tr>
                <td>{{$key . '-' . $user }}</td>
            </tr>
        @endforeach
    </table>
</div>
