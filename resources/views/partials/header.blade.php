<header>
    <div class="container">
        logo
    </div>
    <ul>
        <li> <a href="/">home</a> </li> 
        {{-- {{url('/')}} --}}
        <li> <a href="{{route('comics.index')}}">Show</a> </li>
        {{-- {{route('show')}} --}}
        <li> <a href="{{route('comics.create')}}">create</a> </li>
        <li> <a href="{{route('comics.store')}}">store</a> </li>

    </ul>
</header>