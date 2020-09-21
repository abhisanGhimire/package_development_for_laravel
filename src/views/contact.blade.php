<!DOCTYPE html>

<html class="has-navbar-fixed-top">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        {{-- Bulma CSS CDN --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    </head>

    <body>
        <section class="section has-text-centered is-family-monospace">
            <div class="container is-fluid">
                <div class="tile is-ancestor">
                    {{-- First Two Tiles --}}
                    <div class="tile is-4 is-vertical is-parent">
                        {{-- Upper Tile --}}
                        <div class="tile is-child box">
                            <p class="title has-text-left">Address</p>
                            <p class=" has-text-left">
                                {{-- Your Address Goes Here --}}
                                {!! config('contact.address') !!}
                            </p>
                        </div>
                        {{-- Lower Tile --}}
                        <div class="tile is-child box">
                            <p class="title has-text-left">Find Me On </p>
                            <p class=" has-text-left">
                                {{-- Facebook --}}
                                <a href="{{ config('contact.fb_address') }}" target="_blank" class="has-text-info"> <i
                                        class="fab fa-facebook-square"></i>
                                    Facebook</br></a>
                                {{-- Instagram --}}
                                <a href="{{ config('contact.insta_address') }}" target="_blank" class="has-text-danger">
                                    <i class="fab fa-instagram"></i></i> Instagram</br>
                                </a>
                                {{-- Twitter --}}
                                <a href="{{ config('contact.twitter_address') }}" target="_blank" class="has-text-info">
                                    <i class="fab fa-twitter-square"></i>
                                    Twitter</br>
                                </a></p>
                        </div>
                    </div>
                    {{-- First Tile End --}}

                    {{-- Second Tile Begins --}}
                    <div class="tile is-parent">
                        <div class="tile is-child box">
                            <p class="title">Contact</p>
                            {{-- Contact Form --}}
                            <form action="{{ route('contact') }}" method="post">
                                @csrf
                                {{-- Name --}}
                                <label class="label is-pulled-left mt-1">Name</label>
                                <input class="input " name="name" type="text" "
                                    placeholder=" Enter Your Name">

                                {{-- Email --}}
                                <label class="label is-pulled-left mt-1">Email</label>
                                <input class="input " " name=" sender_email" type="email"
                                    placeholder="Enter Your E-mail">

                                {{-- Message --}}
                                <label class="label is-pulled-left mt-1">Message</label>
                                <textarea class="textarea " name="message"
                                    placeholder="Any queries you have"></textarea>

                                <button class="button is-link mt-3" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                    {{-- Second Tile Ends --}}
                </div>
            </div>
        </section>
    </body>

</html>