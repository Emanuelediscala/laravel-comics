<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<header >
    <div class="container">
        <div class="d-flex justify-content-between p-2 align-items-center">
          <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
          </div>
          <div>
              <div class="h-100">
                  <ul class="nav justify-content-end d-flex align-items-center ">
                @foreach ($links as $link)
                <li class="nav-item d-flex">
                    <a class="nav-link active" href="#">{{ $link }}</a> 
                </li>
                @endforeach 
                <li>
                    <input type="text" class="text-end" placeholder="search">
                </li>
              </div>
            </ul>
          </div>
        </div>
      </div>
</header>