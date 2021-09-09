<div class="container">
    <div class="row">
        @foreach($allMovies as $movie)
            <div class="container-card">
                <div class="movie-card">
                    <div class="descr">
                        {{$movie->description}}
                    </div>
                    <img src="{{$movie->cover}}" alt="">
                </div>
                <h2 class="title">{{$movie->title}}</h2>
            </div>
        @endforeach
    </div>
</div>