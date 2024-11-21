@extends('app')
@section('title', __('home.welcome.title'))

@section('content')
    <div class="container-lg mt-4">
        <div class="text-center">
            <p class="text-muted">見どころ</p>
            <h1>Our Features</h1>
        </div>
    </div>
    <!-- FEATURES CARDS -->
    <div class="container text-center mt-5">
        <div class="row row-cols-1 row-cols-xxl-4 g-1">
            <div class="col">
                <div class="card border mb-3">
                    <div class="card-body">
                    <h5 class="card-header"><i class="bi bi-stars"></i> Diverse Airlines!</h5>
                    <p class="card-text">ANA Virtual Group offers you various airlines to fly around the world. Fly ANA, AirDo, Air Japan, and More!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border mb-3">
                    <div class="card-body">
                    <h5 class="card-header"><i class="bi bi-airplane-fill"></i> Various Fleet!</h5>
                    <p class="card-text">Our fleet consists of more than 300 aircrafts and updated live time following the real world condition.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border mb-3">
                    <div class="card-body">
                    <h5 class="card-header"><i class="bi bi-calendar3-event"></i> Various Events!</h5>
                    <p class="card-text">We strive for realism with up-to-date Standard Operating Procedures, Schedules and Handbooks.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border mb-3">
                    <div class="card-body">
                    <h5 class="card-header"><i class="bi bi-file-earmark-text"></i> Updated Documents!</h5>
                    <p class="card-text">We are working to create a better relations with each members by hosting various kind of fun events.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIAL -->
        <div class="card mb-2">
            <div class="card-body text-md-start">
                <blockquote class="blockquote mb-0">
                <p>"A Virtual Group of ANA is my favorite VA to fly for! You can never run out of content, with multiple ANA subsidiaries included there's always something to fly. The community is absolutely lovely too!"</p>
                <footer class="blockquote-footer">Discord Moderator - Makana W</footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body text-md-start">
                <blockquote class="blockquote mb-0">
                <p>"They offer an extensive range of routes and a fleet that will leave you spoilt choice. And that's not all - their community is simply amazing and promises to make your journey even more enjoyable and fun-filled!"</p>
                <footer class="blockquote-footer">Captain (320+ Flight Hours) - Yuhang S</footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body text-md-start">
                <blockquote class="blockquote mb-0">
                <p>"ANA Virtual Group has given me the opportunity to meet other like-minded aviation enthusiasts with a passion for flight simming in Japan and Asia! There's a widely diverse network of routes connecting Japan with the world and I'm happy to be apart of it!"</p>
                <footer class="blockquote-footer">Second Officer (145+ Flight Hours) - Kam E</footer>
                </blockquote>
            </div>
        </div>
        <a href="/about/" class="btn btn-lg btn-outline-secondary px-4 mt-4"><i class="bi bi-lightbulb"></i> Know More About Us..!</a>
    </div>
<!-- FEATURES END -->
</section>    
<!-- Latest Section -->
<section id="latest" class="bg-light">
    <div class="container-lg mt-2">
        <div class="text-center">
            <p class="text-muted">新着情報</p>
            <h1>Latest News</h1>
        </div>
    </div>
    <!-- Latest Container -->
    <div class="mt-5">
        <div class="container text-center px-4">
            <!-- EVENT CAROUSEL -->
            <div class="mb-4">
                <div id="carouselEventsIndicatorsAutoPlaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselEventsIndicatorsAutoPlaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselEventsIndicatorsAutoPlaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselEventsIndicatorsAutoPlaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <!-- EVENT CAROUSEL -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <img src="/assets/events/anaxhuesgiveaway.png" class="img-fluid rounded" alt="Event 1">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img src="/assets/events/seasonaltravel.jpg" class="img-fluid rounded" alt="Event 2">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                                <img src="/assets/events/flyinrjff.png" class="img-fluid rounded" alt="Event 3">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventsIndicatorsAutoPlaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEventsIndicatorsAutoPlaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- NEWS SECTION -->
            <div class="row row-cols-1 text-center px-2 mb-2">
                <ul class="list-group">
                    <!-- NEWS ITEM -->
                    <li class="list-group-item">
                        <a href="/news/posts/3" style="text-decoration: none;">
                            <h5 class="mb-1">ANA Virtual Group x HUES By Horizon Simulation Giveaway</h5>
                            <small class="text-muted">14/11/2024 Posted by, Commercial Team</small>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/news/posts/2" style="text-decoration: none;">
                            <h5 class="mb-1">ANA Virtual Group - Update Log V2.2</h5>
                            <small class="text-muted">14/11/2024 Posted by, Commercial Team</small>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/news/posts/1" style="text-decoration: none;">
                            <h5 class="mb-1">ANA Virtual Group - Recruiting New Volunteers!</h5>
                            <small class="text-muted">14/11/2024 Posted by, Commercial Team</small>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Read More Button -->
            <div class="text-center mt-4">
                <a href="/news/" class="btn btn-lg btn-outline-secondary px-4"><i class="bi bi-newspaper"></i> Read More..</a>
            </div>
        </div>
    </div>
    <!-- LATEST END -->
</section>
<!-- PARTNERS SECTION -->
<section id="partners" class="bg-light">
    <div class="container-lg mt-2">
        <div class="text-center">
            <p class="text-muted">パートナー</p>
            <h1>Our Partners</h1>
        </div>
    </div>
    <div class="container-lg mt-5">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 g-4 px-5 justify-content-center">
            <div class="col d-flex justify-content-center">
                <a href="https://vatsim.net/">
                    <img src="/assets/partners/VATSIMONE.png" alt="VATSIM" style="max-width: 250px; width: 100%;">
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="https://aerovantage.net/">
                    <img src="/assets/partners/AVONE.png" alt="VATSIM" style="max-width: 250px; width: 100%;">
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="https://discord.gg/vhJs2CsyAu/">
                    <img src="/assets/partners/HUESONE.png" alt="HUES By HorizonSim" style="max-width: 250px; width: 100%;">
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="https://china-airlines-virtual.com/">
                    <img src="/assets/partners/CALONE.png" alt="China Airlines Virtual" style="max-width: 250px; width: 100%;">
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="https://hangzhouva.com/">
                    <img src="/assets/partners/HAZONE.png" alt="Hangzhou Virtual Airlines" style="max-width: 250px; width: 100%;">
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="https://jalvirtual.com/">
                    <img src="/assets/partners/JALONE.png" alt="Japan Airlines Virtual" style="max-width: 250px; width: 100%;">
                </a>
            </div>
        </div>
    </div>
@endsection