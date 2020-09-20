<!DOCTYPE html>

<html class="has-navbar-fixed-top">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Contact</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    </head>

    <body>
        <section class="section has-text-centered is-family-monospace">
            <div class="container is-fluid">
                <div class="tile is-ancestor">
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="tile is-child box">
                            <p class="title has-text-left">Address</p>
                            <p class=" has-text-left">
                                {!! config('contact.address') !!}
                            </p>
                        </div>
                        <div class="tile is-child box">
                            <p class="title has-text-left">Find Me On </p>
                            <p class=" has-text-left">
                                <a href="{{ config('contact.fb_address') }}" target="_blank" class="has-text-info"> <i
                                        class="fab fa-facebook-square"></i>
                                    Facebook</br></a>
                                <a href="{{ config('contact.insta_address') }}" target="_blank" class="has-text-danger">
                                    <i class="fab fa-instagram"></i></i> Instagram</br>
                                </a> <a href="{{ config('contact.twitter_address') }}" target="_blank"
                                    class="has-text-info"> <i class="fab fa-twitter-square"></i>
                                    Twitter</br>
                                </a></p>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child box">

                            <p class="title">Contact</p>
                            <form action="{{ route('contact') }}" method="post">
                                @csrf
                                <label class="label is-pulled-left mt-1">Name</label>
                                <input class="input" name="name" type="text" placeholder="Enter Your Name">
                                <label class="label is-pulled-left mt-1">Email</label> <input class="input "
                                    name="email" type="email" placeholder="Enter Your E-mail">
                                <label class="label is-pulled-left mt-1">Query</label> <textarea class="textarea "
                                    name="message" placeholder="Any queries you have"></textarea>
                                <button class="button is-link mt-3" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
