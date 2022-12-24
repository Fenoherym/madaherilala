@extends('app')

@section('content')
    <div class="welcome welc-about" id="welcome">
        <h3 class="title">Bienvenue sur le site de MADAHERILALA TOURS
        </h3>
        <div class="content">
            <div class="img">
                <img src="{{ asset('img/welcome.jpg') }}" alt="about">
            </div>
            <div class="text">
                <h5>MADAHERILALA <span>TOURS</span> </h5>
                <p>
                    Laisse dans votre cœur, un souvenir inoubliable qui ne s’efface jamais. C’est le plus beau de
                    tous ses trésors et Madagascar est une île qui ne se contente pas du simple regard. Elle se vit
                    au rythme de ses habitants, de leurs pirogues à balancier, des grandes espaces de savane
                    mordorée et des pister bobeuses.
                </p>
                <p>
                    L’Exubérance de sa forêt tropicale (en péril, d’ailleurs, …)
                    La sérénité asiatique de ses rizière en gradins, le mystère de ses lacs tourmentés et de ses
                    pies karstiques habités de légendes, le fraîcheur et la simplicité de ses village de pécheurs
                    éparpillées sur trois mille kilomètre de plage, le sourire, la gentillesse et l’authenticités
                    des gens ne s’achètent pas.
                </p>
                <p>
                    Ils sont à découvrir, Ile de contrastes et de particularités. Madagascar ne laisse pas
                    indiffèrent lors qu’on a la chance de la visiter. C’est pourquoi, MADAHERILALA TOURS, nous
                    serons très heureux de partages les merveilles de notre beau pays avec vous.
                    Compliment à vous et merci d’avoir pris le temps précieux de visiter avec notre site et profiter
                    de la nature avec nous car notre expérience et notre connaissance, notre comportement qui compte
                    beaucoup dans notre voyage.


                </p>
            </div>

        </div>
    </div>
    <div class="about welc-about" id="about" data-aos="fade-right">
        <h3 class="title">Qui sommes nous ?</h3>
        <div class="content">
            <div class="text">
                <h5>MADAHERILALA <span>TOURS</span> </h5>
                <p>
                    Qui a été créé par HERILALA l’une de Prestataire sérieux et compétent, en plus, l’une de
                    meilleurs spécialistes de la descente de la tsiribihina et la village Zafimaniry, le Grand Sud
                    de Madagascar et nous organisons tous les circuits dans tous îls de Madagascar, circuit attente.
                </p>
                <p>
                    Avec plusieurs Années d’expérience, notre équipe est une équipe professionnelle, que vous
                    propose des circuits divers transports, hébergement, équipement et matériel de bivouac,
                    assistance, etc …
                </p>
                <p>
                    Pour que votre voyage est une réussite, un souvenir inoubliable,
                    Nous sommes toujours à votre écoute.
                </p>
                <p>
                    Dès réception dans un délai de moins de 72 heures, avec un programme détaillé correspondant à la
                    durée de votre séjour et suivant les circuits sont modifiables :

                </p>
                <ul>
                    <li> <img src="./src/img/row.png" alt=""> En nombre de jours</li>
                    <li><img src="./src/img/row.png" alt=""> En types d’hébergement souhaité</li>
                    <li><img src="./src/img/row.png" alt=""> Nous les fabriquons aussi possible de créer des
                        circuits sur mesure en fonction de vos besoins particulier, que ce soit pour un groupes</li>
                </ul>
            </div>
            <div class="img">
                <img src="{{ asset('img/about.jpg') }}" alt="about">
            </div>
        </div>
    </div>

    <div class="circuits" data-aos="fade-left">
        <h3 class="title">Nos Circuits</h3>
        <div class="content mt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < count($data); $i++)
                        <div class="carousel-item @if ($i == 0) active @endif">
                            <div class="row mx-auto">
                                @foreach ($data[$i] as $circuit)
                                    <div class="col-lg-4">
                                        <div class="card mb-2" style="width: 21rem;">
                                            <a href="{{ route('circuit.show', $circuit->id) }}"><img
                                                    src="{{ Storage::url($circuit->photoUrl) }}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <p class="card-text title"><a
                                                        href="{{ route('circuit.show', $circuit->id) }}">{{ $circuit->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if (count($data[$i]) == 2)
                                    <div class="col-lg-4">
                                        <div class="card mb-2" style="width: 21rem;">
                                            <a href="{{ route('circuit.show', $data[0][0]->id) }}"><img
                                                    src="{{ Storage::url($data[0][0]->photoUrl) }}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <p class="card-text title"><a
                                                        href="{{ route('circuit.show', $data[0][0]->id) }}">{{ $data[0][0]->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (count($data[$i]) == 1)
                                    <div class="col-lg-4">
                                        <div class="card mb-2" style="width: 21rem;">
                                            <a href="{{ route('circuit.show', $data[0][0]->id) }}"><img
                                                    src="{{ Storage::url($data[0][0]->photoUrl) }}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <p class="card-text title"><a
                                                        href="{{ route('circuit.show', $data[0][0]->id) }}">{{ $data[0][0]->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card mb-2" style="width: 21rem;">
                                            <a href="{{ route('circuit.show', $data[0][1]->id) }}"><img
                                                    src="{{ Storage::url($data[0][1]->photoUrl) }}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <p class="card-text title"><a
                                                        href="{{ route('circuit.show', $data[0][1]->id) }}">{{ $data[0][1]->name }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact" data-aos="fade-right">
        <h3 class="title">Contactez-nous</h3>
        <div class="content mt-5">
            <div class="card-content">
                <div class="_card">
                    <div class="contact-us p-5">
                        <h4>Contact</h4>
                        @if ($contact->adresse != null)
                            <p><i class="fa-solid fa-location-dot"></i> {{ $contact->adresse }}</p>
                        @endif
                        <p><i class="fa fa-phone"></i> {{ $contact->telephone }}</p>
                        @if ($contact->email != null)
                            <p><i class="fa-solid fa-envelope"></i> {{ $contact->email }}</p>
                        @endif
                    </div>
                    <div class="form p-5">
                        <form action="{{ route('message.send') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Votre nom" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Votre email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"
                                    placeholder="Votre message" required></textarea>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-success">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const header = document.querySelector(".header");

        window.addEventListener("scroll", function() {
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
@endsection
