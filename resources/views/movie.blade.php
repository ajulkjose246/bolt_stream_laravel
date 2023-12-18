@include('header')
<link rel="stylesheet" href="/app/assets/view_movies/view_movies.css">
<section class="home">
    <div id="cards-div">
        <div class="container-fluid">
            <div class="row main_row">
                <div class="col-12 col-md-4 m-2 mov_img_div">
                    <div class="bm-alert"></div>
                    <div class="row">
                        <div class="col-12" style="text-align: center;">
                            <img src="{{ $movie->image_url }}" alt="imag" style="border-radius: 10px;">
                        </div>
                        <div class="col-6 mt-4">
                            <div class="d-grid gap-1">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#movieWatch" type="button">Watch</button>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="d-grid gap-1">
                                <a href="https://www.youtube.com/watch?v={{$movie->video_url}}" target="_blank" class="btn btn-primary">Trailer</a>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <a class="btn btn-primary" href="/">Back</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 m-2 column">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="fw-bold">{{ $movie->name }} [{{ $movie->language }}]</h3>
                        </div>
                        <div class="col-12">
                            <h6>IMDB {{ $movie->rating }} <i class="bi bi-star-fill"></i></h6>
                        </div>
                        <div class="col-12 mt-2">
                            <h6>
                                {{ $movie->genre }}
                            </h6>
                        </div>

                        <div class="col-12 mt-4">
                            <h6 class="fw-bold">Summary</h6>
                            <p>{{ $movie->description }}</p>
                        </div>

                        <!-- <div class="col-12 mt-4">
                            <h6 class="fw-bold">Available in:</h6>
                        </div>
                        <div class="d-grid mt-2 gap-2 col-6 mx-auto">
                            <a href="url" class="btn btn-outline-primary btn-sm">hai</a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>