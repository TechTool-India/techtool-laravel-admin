@auth
    @extends('layouts.app')

    @section('title', 'Permission Error')

    @section('content')
        <div class="container-fluid">

            <!-- 404 Error Text -->
            <div class="text-center">
                <div class="error mx-auto" data-text="404">404</div>
                <p class="lead text-gray-800 mb-5">Page Not Found!</p>
                <p class="text-gray-500 mb-0">It looks like you are trying to access wrong page!</p>
                <a href="{{route('home')}}">← Back to Dashboard</a>
            </div>

        </div>
    @endsection
@endauth