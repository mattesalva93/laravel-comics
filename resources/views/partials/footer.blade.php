<footer>
    <div class="head-footer">
        <div class="container">
            @foreach ($linkfooter as $elemento)
                <div class="card-container">
                    <img src="{{ $elemento['src'] }}">
                    <span>{{ $elemento['title'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="footer-links">
                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>Tv</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                    </ul>
                </div>

                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>Tv</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                        <li>Movies</li>
                        <li>Tv</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                </div>

                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                    </ul>
                </div>
            </div>

            <div class="container-logo">
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
            </div>

        </div>
    </div>
    <div class="low-footer">
        <div class="container">
            <a href="#" class="button-sign-up">
                <h4>SIGN-UP NOW!</h4>
            </a>
            <div class="icone-social">
                <h2>FOLLOW US</h2>
                <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
            </div>
        </div>
    </div>


</footer>
