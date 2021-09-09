<div class="container">
    <div class="row">
        @foreach($allMovies as $movie)
            <div class="card-movie">
                <div class="foto-container">
                    <img src="{{$movie->cover}}" alt="">
                </div>
                <h2 class="title">{{$movie->title}}</h2>

            </div>
        @endforeach
    </div>
</div>