@extends('layout.default')

@section('content')
<br>
<br>

    <div class="card" mt-3 pl-2 pr-2>
        <table border="2">
            <tr>
                <th><a class="nav-link" href="/card">Hey there</a></th>
                <th><button type="submit">Delete</button></th>
            </tr>
            <tr>
                <th><a class="nav-link" href="/card">Hello</a></th>
                <th><button type="submit">Delete</button></th>
            </tr>
            <tr>
                <th><a class="nav-link" href="/card">Hi everyone</a></th>
                <th><button type="submit">Delete</button></th>
            </tr>

        </table>
    </div>

@endsection
