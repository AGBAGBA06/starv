<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jad_avenou</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="frontend/css/open-iconic-bootstrap.min.css">

</head>

<body>
    <header role="header">

        <nav class="menu " role="navigation ">
            <div class="inner">
                <div class="m-left ">

                    <a href=" "> <img src="images/jad.jpg" alt="logo " id="pl"> </a>
                </div>
                <div>
                    <ul id="de">
                        <!-- <li><a href="pages/contact.html " class="m-link ">contact</a></li>
                        <li><a href="pages/emploi.html " class="m-link ">emploi</a></li>

                        <li><a href="pages/galerie.html " class="m-link ">galerie</a></li> -->

                        <li><a href="{{ URL::to('/ajouterjeune') }}" class="m-link ">enregistrer_un(e)_jeune</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <img src="images/jad.jpg"  id="tr">

    </header>

    <section>
        <div id="slide ">

        </div>
    </section>

    {{-- <section>
        <h1>
            <marquee behavior="alternate " direction=" " background-coLO>Bienvenue</marquee>
        </h1>
    </section>
     --}}
    <FOOter>
        <p>
            jadavenou.io
        </p>
    </FOOter>
</body>

</html>