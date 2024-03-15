<div>
    <div class="jumbotron">

    </div>
    <div class="series-section">
        <div class="movies-container">
            @foreach(config('comics') as $comic)
            <div class="movie-card">
                <a href="products/{{$comic['index']}}">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{ $comic['title']}}</p>
            
                </a>
            </div>
            @endforeach
        </div>
        <button>Load More</button>
    </div>
    <div class="blue-banner">
        <div class="container">
            <div class="card">
                <img src="/img/buy-comics-digital-comics.png" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            <div class="card">
                <img src="/img/buy-comics-merchandise.png" alt="">
                <p>DC MERCHANDISE</p>
            </div>
            <div class="card">
                <img src="/img/buy-comics-subscriptions.png" alt="">
                <p>SUBSCRIPTION</p>
            </div>
             <div class="card">
                <img src="/img/buy-comics-shop-locator.png" alt="">
                <p>COMIC SHOP LOCATOR</p>
             </div>
            <div class="card">
                <img src="/img/buy-dc-power-visa.svg" alt="">
                <p>DC POWER VISA</p>
             </div>

        </div>
    </div>

</div>