@extends('layouts.front', ['footer' => 'pages-footer'])

@section('content')
    <section class="monybet-section py-5 left-glow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="moneybet-card">
                        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
                            <img src="{{ asset('images/icons/moneybets.png') }}" width="24px" height="32px" alt="">
                            <h2 class="fw-bolder">Money Bets 3.0</h2>
                        </div>
                       <div class="alert alert-danger" role="alert">
    <strong>⚠️ Attention :</strong> Suivez ces 3 étapes pour maximiser vos chances de réussite.<BR>
        Ne pariez jamais plus de 10% de votre capital sur chaque paris.<br>
        Ce sont des paris simples et non pas des combinés.
</div>

<ol>
    <li>
        <p>
            <strong><span class="text-blue blue-glow">Le Budget:</span> </strong>
            <ul>
            <li>Entre 150€ et 450€ :</li>Inscrivez-vous sur les 
           <a href="#moneybet-bonuses" class="text-primary text-decoration-underline">2 premiers bookmakers ici</a>. 
           
        <li>Egal ou supérieur à 500€ :</li></strong> Inscrivez-vous sur les 
            <a href="#moneybet-bonuses" class="text-primary text-decoration-underline">3 bookmakers ici</a>. 
         
            </ul>
        </p>
    </li>
    <li>
        <p>
            <strong><span class="text-blue blue-glow">Pourquoi choisir ces bookmakers ?</span></strong> 
            <br>Ces plateformes offrent :
        </p>
        <ul>
            <li>Les cotes les plus élevées du marché pour maximiser vos gains.</li>
            <li>Une couverture complète : si un bookmaker ne propose pas le match recommandé, l'autre l'aura.</li>
        </ul>
    </li><br>
    <li>
            
        <p>
            <strong><span class="text-blue blue-glow">Comment parier ?</span></strong> 
            <br>
        </p>
        Cliquez sur la case bleue avec le sac d'argent pour accéder au match sur le bookmaker offrant la meilleure cote parmi nos 3 options.
    </li><br>
    <li>
        <p>
            <strong><span class="text-blue blue-glow">Objectif à retenir :</span></strong> La méthode ne consiste pas à doubler votre capital en 24 heures. 
            Avec l'IA 3.0, l'objectif est de faire croître votre capital initial chaque mois.
        </p>
    </li>
</ol>

<div class="alert alert-warning mt-4" role="alert">
    <strong>💡 Garantie :</strong> Si vous n'êtes pas dans le profit après 30 jours d'abonnement, nous remboursons intégralement votre mensualité. 
    (Important : vous devez être inscrit sur au moins les deux premiers bookmakers pour garantir d'avoir les cotes optimales et avoir parié un montant similaire sur tous les paris proposés.)
</div>
                       <div class="moneybet-table">
    <div class="moneybet-filters">
        <div class="moneybet-filters-left">
            <!-- Suppression des filtres "Combiner%" et "Seulement Money" -->
        </div>
    </div>
    @foreach ($moneybets as $moneybet)
        <div class="moneybet-row">
            <div class="moneybet-row-title">
                <div class="moneybet-title-left">
                    <div class="moneybet-flag">
                        <img src="{{ asset('flags/circle/Flag of '.$moneybet->country?->name.'.png') }}" alt="">
                    </div>
                </div>
                <div class="moneybet-title-right">
                    <div class="moneybet-match">{{ Str::upper($moneybet->country?->name) }} / {{ $moneybet->league }}</div>
                    <div class="moneybet-goals">{{ $moneybet->total_score }}</div>
                </div>
            </div>
            <div class="moneybet-row-content">
                <div class="moneybet-content-left">
                    {{ $moneybet->date.' '.$moneybet->time }}
                </div>
                <div class="moneybet-content-right">
                    <div class="moneybet-content-teams">
                        <div class="moneybet-team">
                            <div class="moneybet-team-icon">
                                <img src="{{ asset('images/teams/'.$moneybet->team_1) }}" alt="">
                            </div>
                            <div class="moneybet-team-name">
                                {{ $moneybet->team_1 }}
                            </div>
                        </div>
                        <div class="moneybet-team">
                            <div class="moneybet-team-icon">
                                <img src="{{ asset('images/teams/'.$moneybet->team_2) }}" alt="">
                            </div>
                            <div class="moneybet-team-name">
                                {{ $moneybet->team_2 }}
                            </div>
                        </div>
                    </div>
                    <div class="moneybet-content-actions">
                        <!-- Affichage du pourcentage -->
                        <div class="moneybet-percentage">{{ $moneybet->combine_percentage }}%</div>
                        <div class="moneybet-odds">{{ $moneybet->odds }}</div>
                        <a class="moneybet-bet" href="{{ $moneybet->url }}" target="_blank">
                            <img src="{{ asset('images/icons/dollar-bag.png') }}" alt="" class="pulse-animation">
<style>
    .pulse-animation {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

                        </a>
                    </div>
                </div>
            </div>
        </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
    <style>
        #hide-other-tools {
            display: none;
        }
    </style>

    <!-- Section "Autres Outils De Paris" -->
    <div class="moneybet-card" id="hide-other-tools">
        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
            <h5 class="fw-bolder">Autres Outils De Paris</h5>
        </div>
        <div class="moneybet-tools">
            @foreach ($bettingTools as $tool)
                <a href="{{ $tool->link }}" target="_blank" style="text-decoration:none;">
                    <div class="moneybet-tool">
                        <div class="moneybet-tool-icon">
                            <img src="{{ Storage::url($tool->logo) }}" alt="">
                        </div>
                        <div class="moneybet-tool-name">{{ $tool->name }}</div>
                        <div class="moneybet-tool-action ms-auto">
                            <img src="{{ asset('images/icons/keyboard_arrow_down.png') }}" alt="">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Section "Les Meilleurs Bonus Des Bookmakers En France" -->
    <div class="moneybet-card">
        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
            <img src="{{ asset('images/icons/france-flag.png') }}" width="30px" alt="">
            <h5 class="fw-bolder">Les Meilleurs Bonus Des Bookmakers En France</h5>
        </div>

        <div id="moneybet-bonuses" class="moneybet-bonuses">
            @foreach ($bookmarkers as $bookmarker)
                <div class="moneybet-bonus">
                    <div class="moneybet-bonus-icon">
                        <img src="{{ Storage::url($bookmarker->logo) }}" alt="">
                    </div>
                    <div class="moneybet-bonus-name">
                        <span>{{ $bookmarker->name }}</span>
                        <span>{{ $bookmarker->description }}</span>
                    </div>
                    <div class="moneybet-bonus-action">
                        <a href="{{ $bookmarker->link }}" target="_blank" class="btn btn-primary">Let's go</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    </section>
@endsection
