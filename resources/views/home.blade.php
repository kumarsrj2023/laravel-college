<div>
    <h1>Home page for guest</h1>
    <a href="{{ Auth::logout() }}" class="bg-red-500 text-white px-7 py-2 rounded">Logout</a>

    @if (Auth::check())
    {{ Auth::user()->name}}
        
    @endif
</div>
