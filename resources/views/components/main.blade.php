<div class="container">
    <div class="row">
        @foreach($allMovies as $movie)
            <div class="card-movie">
                <div class="foto-container">
                    <div class="hover-ciao">ciao ciao ciao</div>
                    <div class="cover">
                        <img src="{{$movie->cover}}" alt="">
                    </div>
                </div>
                <h2 class="title">{{$movie->title}}</h2>
            </div>
        @endforeach
    </div>
</div>