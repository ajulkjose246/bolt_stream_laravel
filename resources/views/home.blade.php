@include('header')
<section class="home">
    <div class="text">Latest Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row recent">
                @foreach($movies->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="home">
    <div class="text">Popular Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row popular">
                @foreach($movies->shuffle()->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="home">
    <div class="text">Malayalam Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row popular">
                @foreach($movies->where('language', 'Malayalam')->shuffle()->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="home">
    <div class="text">Tamil Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row popular">
                @foreach($movies->where('language', 'Tamil')->shuffle()->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="home">
    <div class="text">English Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row popular">
                @foreach($movies->where('language', 'English')->shuffle()->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="home">
    <div class="text">Hindi Movies</div>
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row popular">
                @foreach($movies->where('language', 'Hindi')->shuffle()->take(6) as $movie)
                <div class='col-6 col-sm-4 col-md-3 col-lg-2'>
                    <a href='/movie/{{$movie->id}}'> <!-- Add movie ID to the URL -->
                        <div class='card'>
                            <img src='{{$movie->image_url}}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <p class='card-text'>{{$movie->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
