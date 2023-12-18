@if(auth()->check() && auth()->user()->role === 2)
<script>
    window.location.href = '/';
</script>
@elseif(auth()->guest())
<script>
    window.location.href = '/';
</script>
@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolt-Stream</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/header/header.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/index/index.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/admin.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('assets/index/getMovies.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7440541691766969" crossorigin="anonymous"></script>

</head>

<body className="snippet-body">
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                    <img src="data:image/png;base64,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">
                </span>
                <div class="text logo-text">
                    <span class="name"> Bolt-Stream</span>
                    <span class="profession">Movie Streaming</span>
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/Mlist">
                            <i class="bx bx-list-ul icon"></i>
                            <span class="text nav-text">List Movies</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                @auth
                <li class="">
                    <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                        @method('POST')
                    </form>

                </li>
                <li class="">
                    <a href="#">
                        <i class="bx bx-user icon"></i>
                        <span class="text nav-text">{{auth()->user()->name}}</span>
                    </a>
                </li>
                @else
                <li class="">
                    <a href="/register">
                        <i class="bx bx-user icon"></i>
                        <span class="text nav-text">Login</span>
                    </a>
                </li>
                @endauth
                <div class="modeChange">
                    <li class="theme">
                        <a href="#">
                            <i class="bi bi-moon-fill icon"></i>
                            <span class="text nav-text">Dark Mode</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">Dashboard</div>
        <div id="cards-div">
            <div class="container-fluid">
                <div class="row recent">
                    <table id="movieList" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Language</th>
                                <th>Rating</th>
                                <th>Genre</th>
                                <th>Discription</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td>{{$movie->name}}</td>
                                <td>{{$movie->language}}</td>
                                <td>{{$movie->rating}}</td>
                                <td>{{$movie->genre}}</td>
                                <td>{{$movie->description}}</td>
                                <td><a href="{{$movie->image_url}}" target="_blank" class="btn btn-primary">View</a></td>
                                <td><a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/header/header.js')}}"></script>
</body>
<script>
    setTimeout(function() {
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
<script>
    $(document).ready(() => {
        const themeMode = document.cookie.split("; ").find(row => row.startsWith("themeMode="))?.split("=")[1];
        $(".theme").remove()
        if (themeMode == "Dark") {
            document.body.classList.toggle("dark-theme");
            $(".theme").remove()
            $(".modeChange").append("<li class='theme'><a href='#'><i class='bi bi-brightness-high-fill icon'></i><span class='text nav-text'>Light Mode</span></a></li>");
            document.cookie = "themeMode=Dark";
        } else {
            $(".theme").remove()
            $(".modeChange").append("<li class='theme'><a href='#'><i class='bi bi-moon-fill icon'></i><span class='text nav-text'>Dark Mode</span></a></li>")
            document.cookie = "themeMode=Light";
        }
        $(".modeChange").click(() => {
            document.body.classList.toggle("dark-theme");
            if ($('body').hasClass('dark-theme')) {
                $(".theme").remove()
                $(".modeChange").append("<li class='theme'><a href='#'><i class='bi bi-brightness-high-fill icon'></i><span class='text nav-text'>Light Mode</span></a></li>");
                document.cookie = "themeMode=Dark";
            } else {
                $(".theme").remove()
                $(".modeChange").append("<li class='theme'><a href='#'><i class='bi bi-moon-fill icon'></i><span class='text nav-text'>Dark Mode</span></a></li>")
                document.cookie = "themeMode=Light";
            }

        })
    })
</script>
<script>
    new DataTable('#movieList');
</script>
@endif

</html>