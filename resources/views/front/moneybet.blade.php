@extends('layouts.front', ['footer' => 'pages-footer'])

@section('content')
    <section class="monybet-section py-5 left-glow">
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="moneybet-card">
                        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
                            <img src="{{ asset('images/icons/filters.png') }}" width="20px" height="20px" alt="">
                            <h5 class="fw-bolder mb-0">Filters</h5>
                        </div>
                        <div class="monebet-filters-group moneybet-filters-types">
                            <h6 class="fw-bolder">Types de paris</h6>
                            <div class="filter-ul">
                                <div class="filter-li">
                                    <div class="filter-label">
                                        <label class="form-check-label" for="tous">Tous types</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="tous">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="monebet-filters-group moneybet-filters-percentage">
                            <h6 class="fw-bolder">Pourcentage</h6>
                            <div class="form-group mb-0">
                                <input type="range" class="form-range calculator-range" id="percentage-range" min="300" max="5000" step="50" value="300">
                            </div>
                        </div>
                        <div class="monebet-filters-group moneybet-filters-cotes">
                            <h6 class="fw-bolder">Cotes</h6>
                            <div class="form-group mb-0">
                                <input type="range" class="form-range calculator-range" id="cotes-range" min="300" max="5000" step="50" value="300">
                            </div>
                        </div>
                        <div class="monebet-filters-group moneybet-filters-types">
                            <h6 class="fw-bolder">Heure de Début</h6>
                            <div class="filter-ul">
                                <div class="filter-li">
                                    <div class="filter-label">
                                        <label class="form-check-label" for="proch24">Prochaines 24 heures</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="proch24">
                                    </div>
                                </div>
                                <div class="filter-li">
                                    <div class="filter-label">
                                        <label class="form-check-label" for="proch48">Prochaines 48 heures</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="proch48">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="moneybet-card">
                        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
                            <img src="{{ asset('images/icons/moneybets.png') }}" width="24px" height="32px" alt="">
                            <h2 class="fw-bolder">Money Bets</h2>
                        </div>
                        <p>
                            Avecnotre outil Money Bets 3.0, vous ne faites plus de paris selon un feeling. Notre IA 3.0 analyse chaque match, chaque équipe,
                            et vous livre des prédictions optimisées avec un taux de réussite de 76 %. Vous voulez des paris rentables basés sur des données
                            fiables ? C'est votre destination ultime pour transformer les tendances statistiques en gains réels.
                        </p>

                        <div class="moneybet-table">
                            <div class="moneybet-filters">
                                <div class="moneybet-filters-left">
                                    <div class="d-flex gap-2 justify-content-center align-items-center">
                                        <p class="mb-0 fw-bolder">Combiner%</p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input switch" type="checkbox" role="switch" id="combiner">
                                        </div>
                                    </div>

                                    <div class="d-flex gap-2 justify-content-center align-items-center">
                                        <p class="mb-0 fw-bolder">Seulement Money</p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input switch" type="checkbox" role="switch" id="money">
                                        </div>
                                    </div>
                                </div>
                                <div class="moneybet-filters-right">
                                    <div class="percentage-sort">
                                        <span>Perc.</span>
                                        <img src="{{ asset('images/icons/sorting.png') }}" width="18px" alt="">
                                    </div>
                                    <div class="odds-sort">
                                        <span>Odds.</span>
                                        <img src="{{ asset('images/icons/sorting.png') }}" width="18px" alt="">
                                    </div>
                                </div>
                            </div>
                            @for($i = 0; $i < 10; $i++)
                            <div class="moneybet-row">
                                <div class="moneybet-row-title">
                                    <div class="moneybet-title-left">
                                        <div class="moneybet-flag">
                                            <img src="{{ asset('images/icons/moneybet-flag.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="moneybet-title-right">
                                        <div class="moneybet-match">NORVÈGE / GROUPE 3 DIVISION 3</div>
                                        <div class="moneybet-goals">Total de buts supérieurs à 3.5</div>
                                    </div>
                                </div>
                                <div class="moneybet-row-content">
                                    <div class="moneybet-content-left">
                                        19 Aug 2024
                                    </div>
                                    <div class="moneybet-content-right">
                                        <div class="moneybet-content-teams">
                                            <div class="moneybet-team">
                                                <div class="moneybet-team-icon">
                                                    <img src="{{ asset('images/icons/team-icon.png') }}" alt="">
                                                </div>
                                                <div class="moneybet-team-name">
                                                    KFUM ||
                                                </div>
                                            </div>
                                            <div class="moneybet-team">
                                                <div class="moneybet-team-icon">
                                                    <img src="{{ asset('images/icons/team-icon.png') }}" alt="">
                                                </div>
                                                <div class="moneybet-team-name">
                                                    Ullem
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moneybet-content-actions">
                                            <div class="moneybet-percentage">66%</div>
                                            <div class="moneybet-odds">1.72</div>
                                            <div class="moneybet-bet">
                                                <img src="{{ asset('images/icons/dollar-bag.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="moneybet-card">
                        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
                            <h5 class="fw-bolder">Autres Outlis De Paris</h5>
                        </div>
                        <div class="moneybet-tools">
                            <div class="moneybet-tool">
                                <div class="moneybet-tool-icon">
                                    <img src="{{ asset('images/icons/moneybet-tool.png') }}" alt="">
                                </div>
                                <div class="moneybet-tool-name">Paris sûrs</div>
                                <div class="moneybet-tool-action ms-auto">
                                    <img src="{{ asset('images/icons/keyboard_arrow_down.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moneybet-card">
                        <div class="d-flex justify-content-start mb-3 gap-3 align-items-center">
                            <img src="{{ asset('images/icons/france-flag.png') }}" width="30px" alt="">
                            <h5 class="fw-bolder">Les Meilleurs Bonus Des Bookmarkers En France</h5>
                        </div>

                        <div class="moneybet-bonuses">
                            <div class="moneybet-bonus">
                                <div class="moneybet-bonus-icon">
                                    <img src="{{ asset('images/fezbet.png') }}" alt="">
                                </div>
                                <div class="moneybet-bonus-name">
                                    <span>Fezbet</span>
                                    <span>Bonus de premier dépét Jjusqu'a 1008</span>
                                </div>
                                <div class="moneybet-bonus-action">
                                    <button type="button" class="btn btn-primary">Réclamer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
