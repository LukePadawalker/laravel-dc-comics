@vite('resources/js/app.js')


<div>
    <!-- header -->
    @include('header')

    <!-- jumbotron -->
    <div class="jumbotron d-flex align-items-center">
        <div class="container">
            <img src="{{$comic['thumb']}}" alt="" class="comic-thumbnail">

        </div>
    </div>


    <!-- comic-info -->
    <div class="comic-info">
        <div class="container py-2">
            <div class="comic-title">
                {{ $comic['title'] }}
            </div>
            <div class="comic-price">
                {{$comic['price']}}
            </div>
            <div class="comic-description">
                {{$comic['description']}}
            </div>

        </div>
        
    </div>
    <div class="comic-creators">
        <div class="comic-artists">

        </div>
        <div class="comic-writers">

        </div>
    </div>

        
    <!-- footer -->
    @include('footer')

    <!-- scripts -->
    @yield('scripts')
</div>
