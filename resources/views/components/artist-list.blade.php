<ul class="artist-name">

    @foreach ($product[$type_of_artist] as $comic)

    <li>{{ $comic }} </li>

    @if(!$loop->last)
    ,
    @endif

    @endforeach

</ul>