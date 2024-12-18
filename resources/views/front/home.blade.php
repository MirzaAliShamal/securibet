@extends('layouts.front', ['footer' => 'footer'])

@section('content')

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="hero-section-content">
                        <h1>L'IA 3.0 qui transforme vos paris sportifs en véritables profits</h1>
                        <p>Devenez le cauchemar des bookmakers et transformez vos paris en revenus réguliers!</p>

                        <div class="hero-form">
                            <form action="" method="POST">
                                @csrf
                                <h5>Fais partie de la team des 5% rentable en paris sportif !</h5>
                                <div class="row">
                                    
                                    
                                    <div class="col-12">
                                        <button type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                                       
                                        Go faire partie des 5% <img src="{{ asset('images/icons/dollar-bag.png') }}" alt="Logo" class="button-icon">
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="calculator-section py-5 left-glow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="section-heading">
                        Maximisez vos gains grâce à ce <br><span class="text-blue">nouvel outil 3.0</span> encore peu connu.
                    </h2>
                </div>
                <div class="col-12 text-center">
                    <div class="btn-group btn-group-calculator" role="group" >
                        <button type="button" class="btn btn-calculator">
                            <img src="{{ asset('images/icons/money-bets-3.0 copie.png') }}" class="img-fluid" width="18px" alt="">
                            Money Bets 3.0
                        </button>
                        <button type="button" class="btn btn-calculator">
                            <img src="{{ asset('images/icons/growth1.png') }}" class="img-fluid" width="18px" alt="">
                            Réussite supérieur à 75 %
                        </button>
                        <button type="button" class="btn btn-calculator">
                            <img src="{{ asset('images/icons/calculate copie.png') }}" class="img-fluid" width="18px" alt="">
                            Analyses automatisées
                        </button>
                        <button type="button" class="btn btn-calculator">
                            <img src="{{ asset('images/icons/clock1.png') }}" class="img-fluid" width="18px" alt="">
                            Entre 15-20 minutes / Jour
                        </button>
                    </div>
                    <div style="display: none;">
                        <div class="calculator-points">
                            <span>
                                <img src="{{ asset('images/icons/dot copie.png') }}" class="img-fluid" alt="">
                                Taux de réussite supérieur à 75 %
                            </span>
                            <span>
                                <img src="{{ asset('images/icons/dot copie.png') }}" class="img-fluid" alt="">
                                Analyses automatisées
                            </span>
                            <span>
                                <img src="{{ asset('images/icons/dot copie.png') }}" class="img-fluid" alt="">
                                Seulement 15 minutes par jour
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row mt-4">
                <!-- Calculateur de gain -->
<div class="row">
    <!-- Conteneur Calculateur de gain -->
    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card shadow-box">
            <h2 class="fw-bolder mb-3">Calculateur de gain</h2>
            <div class="calculator-form">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="capital-range" class="calculator-label">
                            <img src="{{ asset('images/icons/capital.png') }}" class="img-fluid" width="18px" alt="">
                            Capital initial
                        </label>
                        <input type="range" class="form-range calculator-range" id="capital-range" min="300" max="5000" step="50" value="300">
                        <span id="capital-display" class="capital-initial">€ 300</span>
                    </div>
                    <div class="form-group">
                        <label class="calculator-label">
                            <img src="{{ asset('images/icons/strategies.png') }}" class="img-fluid" width="18px" alt="">
                            Stratégies de paris
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategy" id="standard" value="Standard" checked>
                            <label class="form-check-label" for="standard">Standard</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="calculator-label">
                            <img src="{{ asset('images/icons/dollar-bag.png') }}" class="img-fluid" width="18px" alt="">
                            Votre revenu
                        </label>
                        <div class="row">
                            <div class="col-6">
                                <span id="monthly-revenue">€ 183 / mois</span>
                            </div>
                            <div class="col-6">
                                <span id="annual-revenue">€ 2189 / an</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                            <img src="{{ asset('images/icons/claim.png') }}" class="img-fluid" width="18px" alt="">
                            Choisir un plan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


                <!-- Inclusion du fichier JavaScript -->
                <div class="col-lg-6 mb-3">
                    <div class="card shadow-box">
                        <h2 class="fw-bolder mb-3">Ne parie plus selon ton instinct !</h2>
                        <h5 class="mb-5">Gagnez potentiellement: <span id="dynamic-monthly-revenue" <span class="text-blue blue-glow">270 €</span> ou plus par mois</h5>
                        <h4 class="fw-bold mb-3">
                            <img src="{{ asset('images/icons/capital.png') }}" class="img-fluid" alt="">
                            Capital initial
                        </h4>
                        <p>C'est votre montant investi qui pourra être réparti entre plusieurs bookmakers.</p>
                        <h4 class="fw-bold mb-3 mt-4">
                            <img src="{{ asset('images/icons/strategies.png') }}" class="img-fluid" alt="">
                            Stratégies de pari
                        </h4>
                        <p>
                            Misez pour gagner sur le long terme : limitez vos paris entre <span class="text-blue">6 % et 10 % de votre capital</span> et laissez la discipline transformer vos paris en profits constants. <br><br>
                            <p style="color: #4b4b4b; font-size: 12px;">Le calculateur affiche le niveau de revenu approximatif. Les performances passées ne préjugent pas des performances futures.</p>

                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bonus-detector-section pt-0 pb-0 right-glow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h6 class="section-title">Detecteur de bonus</h6>
                    <h2 class="section-heading">
                       <span class="text-blue">Plus de 1000€</span> d'offres exclusives avec notre Top 3 des bookmaker.
                    </h2>
                    <div class="section-subheading">
                        <p>Les sites de paris distribuent une multitude de crédits bonus pour vous faire découvrir leurs services. <br> Nous vous guiderons pour maximiser ces promotions.</p>
                    </div>
                </div>
            </div>
            
        


            
<div class="row mt-4">
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bonus-detector-card">
            <div class="top">
                <div class="top-logo"><img src="{{ asset('images/bookmaker1.png') }}"></div>
                <div class="top-meta">
                    <h2>B******</h2>
                    <span class="top-price">Top 1</span>
                </div>
            </div>
            <div class="body">
                <p><li>50% de Freebets jusqu'à 400€ de dépôt !</li>
                <li>Des Cashbacks chaque semaine</li>
                <li>Les meilleurs cotes pour les parieurs Français.</li></p>
            </div>
            <div class="bottom text-center">
                <button type="button" class="btn btn-primary w-100" onclick="window.location.href='https://bit.ly/TerenaXBetify';">
                    Impératif à avoir →
                </button>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bonus-detector-card zoom-box">
            <div class="top">
                <div class="top-logo"><img src="{{ asset('images/bookmaker2.png') }}"></div>
                <div class="top-meta">
                    <h2>L********</h2>
                    <span class="top-price">Top 2</span>
                </div>
            </div>
            <div class="body">
                <p><li>Cadeaux et Freebets réguliers</li>
                <li>Des cotes élevées</li>
                <li>Peut concurrencer le #1 sur certains matchs</li></p>
            </div>
            <div class="bottom text-center">
                <button type="button" class="btn btn-primary w-100" onclick="window.location.href='https://c1li7tt5ck.com/?serial=44976&creative_id=512&anid=';">
                    Deuxième bookmaker à avoir →
                </button>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bonus-detector-card">
            <div class="top">
                <div class="top-logo"><img src="{{ asset('images/bookmaker3.png') }}"></div>
                <div class="top-meta">
                    <h2>3******</h2>
                    <span class="top-price">Top 3</span>
                </div>
            </div>
            <div class="body">
                <p><li>Bonus de bienvenue de 100% jusqu’à 1 000€!</li>
                <li>Cotes un peu en dessous des 2 premiers bookmakers</li> 
                <li>Enormement de ligues disponibles</li></p>
            </div>
            <div class="bottom text-center">
                <button type="button" class="btn btn-primary w-100" onclick="window.location.href='https://go.affision.com/visit/?bta=43239&nci=5766';">
                    Troisième bookmaker →
                </button>
            </div>
        </div>
    </div>
</div>


        <br><br>    <br><br>     <br><br>
    </section>

    <section class="promotion-section pt-0 pb-0 left-glow">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 text-md-start text-center mb-4">
                    <h6 class="section-title text-md-start text-center">Money Bets 3.0</h6>
                    <h2 class="section-heading text-md-start text-center">
                        L'outil ultime grâce à une technologie <span class="text-blue">IA 3.0 encore inconnue.</span>
                    </h2>
                    <p>Imaginez générer des <b>profits réguliers dès votre premier mois</b>, sans effort ni prise de risque.
                    
                    Nous sommes tellement sur de nous que si vous ne réalisez pas de profits, <b>nous vous remboursons intégralement votre mensualité.*</b></p>
                    <p>Etes vous prêt à faire parti des <b>5% de parieurs dans le profit ?</b></p><br>
                    <center>
                        <button type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                            Oui je veux faire parti des 5% dès maintenant !
                        </button>
                    </center>
                    <br>
                </div>
                <div class="col-lg-5 col-md-12 col-12 mb-4 position-relative">
                    <div class="promotion-card">
                        <img src="{{ asset('images/1Money Bet.png') }}" alt="Image de promotion" class="img-fluid">
                    </div>
                    <div class="card promotion-floating-card">
                        <span class="fw-bold">Des paris détectés par notre IA 3.0</span>
                    </div>
                    <img src="{{ asset('images/arrow.png') }}" class="floating-arrow" alt="">
                </div>
            </div>
        </div>
        <br><br><br><br>
    </section>

    <section class="arbitrage-section py-5 right-glow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h6 class="section-title">Money Bet 3.0</h6>
                    <h2 class="section-heading">
                       Les 3 étapes pour <span class="text-blue">exploser tes gains</span>
                    </h2>
                    <div class="section-subheading">
                        <p>Analyser différents types de paris, sur différents championnats peut être extrêmement chronophage .. mais notre <br> nouvelle technologie IA 3.0 le fait en quelques secondes.</p>
                    </div>
                </div>
            </div>
            
            
            
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card arbitrage-card">
                        <div class="arbitrage-card-image">
                            <img src="{{ asset('images/2eme etape algo.png') }}" alt="">
                        </div>
                        <div class="arbitrage-card-body">
                            <h3>1 - L'IA 3.0 Analyse</h3>
                            <ul>
                                <li><strong>Analyse approfondie des données</strong> : Notre IA passe en revue des milliers de statistiques bien particulières par match.</li><br>
                                <li><strong>Adaptation en temps réel</strong> : Les analyses sont continuellement mises à jour avec les dernières informations.</li><br>
                                <button type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
    Je veux découvrir aujourd'hui !
</button>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card arbitrage-card">
                        <div class="arbitrage-card-image">
                            <img src="{{ asset('images/1ere etape algo.png ') }}" alt="">
                        </div>
                        <div class="arbitrage-card-body">
                            <h3>2 - Recevez la Sélection</h3>
                            <ul>
                                <li><strong>Sélection des meilleures opportunités</strong> : L'IA 3.0 identifie les matchs avec les meilleures probabilités de gains.</li><br>
                                <li><strong>Recommandations simplifiées</strong> : Recevez directement les pronostics optimisés sur votre application.</li><br>
                                <button type="submit" type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                                    Je veux découvrir aujourd'hui !
                                </button>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="card arbitrage-card">
                        <div class="arbitrage-card-image">
                            <img src="{{ asset('images/3me etape algo.png') }}" alt="">
                        </div>
                        <div class="arbitrage-card-body">
                            <h3>3 - Pariez, Encaissez et Recommencez</h3>
                            <ul>
                                <li><strong>Pariez malin :</strong> Suivez les recommandations précises de l'IA.</li><br>
                                <li><strong>Encaissez et réinvestissez :</strong> Profitez des gains et réinvestissez pour maximiser vos bénéfices.<BR>Saurez-vous être constant et rigoureux ?</li>
                            </ul>
                            <button type="button" onclick="location.href='#packages'" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                                Je veux découvrir aujourd'hui !
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section py-5 left-glow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="section-heading">Nous comprenons. Cela semble trop beau pour être vrai.</h2>
                    <p style="font-size: 18px; font-weight: bold;">Voici les questions les plus fréquemment posées</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="accordion" id="accordionFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                    Comment fonctionne Securibet ?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                   <p>Si vous avez déjà vu le film <em><strong><span class="text-blue">Moneyball</strong></em></span>, vous savez que l’idée principale était de tirer parti des <strong><span class="text-blue">statistiques et des données</strong></span> pour former une équipe gagnante, plutôt que de se baser uniquement sur l'intuition ou l'expérience. Cette approche révolutionnaire dans le monde du sport nous a profondément inspirés chez <strong>Securibet</strong>.</p>
                                   <p>C'est dans cet esprit que <strong><span class="text-blue">nous avons développé notre IA 3.0</strong></span>. Nous analysons une immense quantité de données spécifiques, parfois invisibles à l'œil humain, pour prédire les résultats des paris sportifs. Que ce soit des <span class="text-blue"><b>performances d'équipes, des tendances historiques, ou des facteurs contextuels<strong></span>, notre IA s'assure que chaque pari est calculé avec précision</strong>.</b></p>
                                 
                                   <b><span class="text-blue">Etapes:</span></b>
                                 
                         <ul>
    <li><span class="text-blue"><b>1.</b></span> Chaque jour, connectez-vous et découvrez les opportunités que notre IA a trouvées pour vous.</li>
    <li><span class="text-blue"><b>2.</b></span> Il vous suffit de cliquer sur le match pour être redirigé directement sur le site de paris sportif et parier.</li>
    <li><span class="text-blue"><b>3.</b></span> En général, nous conseillons de vérifier les opportunités proposées la veille au soir pour le lendemain, ainsi qu'en fin de matinée et en milieu d'après-midi.</li>
</ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                    Combien de temps cela prend-il par jour ?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    <p>Notre IA commence à détecter les matchs la veille au soir pour le jour suivant, puis affine ses recommandations en fin de matinée et de nouveau en milieu d'après-midi. Nous mettons à jour les paris dès que l'IA identifie de nouvelles opportunités.</p>
                                    <p>La plupart des utilisateurs ne passent <b><span class="text-blue">pas plus de 15/20 minutes par jour</b></span> pour suivre ces recommandations.</p>
                                    <p>Plus vous placez de paris optimisés, plus vos gains augmentent. Vérifier les paris une à deux fois par jour suffit amplement pour maximiser vos profits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    Vais-je gagner tous les paris ?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    <span class="text-blue"><b>Non</b></span> — Nous ne vous promettons pas que vous gagnerez chaque pari, ou chaque jour, ce n'est pas la réalité des paris sportifs.<br>
                                    Même avec notre IA 3.0, il est impossible de prédire parfaitement tous les résultats. <br>
                                    <span class="text-blue"><b>Cependant, sur une période de 30 jours, nous garantissons que vous serez profitable grâce à notre IA 3.0.</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSix" aria-expanded="false" aria-controls="faqSix">
                                    Quel budget pour commencer ?
                                </button>
                            </h2>
                            <div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    <p><strong><span class="text-blue">Budget conseillé :</strong> Entre 300 € et 400 €</p></span>
                                    <ul>
                                        <li>Pour débuter efficacement et avoir la possibilité de profiter de gains potentiels intéressants, un budget de 300 € à 400 € est fortement recommandé. Cette fourchette permet de parier des montants optimisés sur chaque pari, augmentant ainsi vos chances de générer des retours potentiels attractifs dès le début. Avec ce budget, vous bénéficiez d'une marge suffisante pour gérer les fluctuations et maximiser vos chances de profits à long terme.</li>
                                    </ul>
                                    <p><strong><span class="text-blue">Budget minimum conseillé :</strong> Entre 150 € et 300 €</p></span>
                                    <ul>
                                        <li>Un budget de 150 € à 300 € est le point d'entrée minimum pour observer des résultats potentiellement profitables. Bien que les gains potentiels soient plus modestes, cette somme permet de tester la stratégie tout en prenant des risques limités et en construisant progressivement votre capital.</li>
                                    </ul>
                                    <p><strong><span class="text-blue">Budget optimal conseillé pour commencer : </strong>500 €</span></p>
                                    <ul>
                                        <li>Avec un budget initial de 500 €, vous avez la possibilité de commencer à voir des gains potentiels plus significatifs. Ce montant offre une flexibilité maximale pour diversifier vos paris et augmenter les mises sur les opportunités à fort potentiel. C'est l'idéal pour ceux qui souhaitent débuter avec des rendements potentiellement élevés dès le départ.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                    Combien de sites de paris sportifs dois-je utiliser ?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    <p>Le nombre de sites de paris sportifs que vous utilisez va dépendre de votre budget. Il faut impérativement un <b>minimum de deux sites de paris sportifs</b> :</p>
                                    <ul>
                                        <li><strong><span class="text-blue">Si votre budget est entre 150 € et 450 €</span></strong> : nous vous recommanderons spécialement <span class="text-blue">2 bookmakers</span> offrant les meilleures cotes pour maximiser vos profits.</li>
                                        <li><strong><span class="text-blue">Avec un budget égal ou supérieur à 500 €</span></strong> : nous vous suggérerons également <span class="text-blue">3 bookmakers</span> sélectionnés pour leurs cotes avantageuses, afin de maximiser vos gains.</li>
                                    </ul>
                                    <p>Ainsi, en fonction de votre budget, <b><span class="text-blue">nous vous guidons vers les plateformes les plus adaptées</span></b> pour optimiser vos paris.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    Que faire si je n'aime pas ou si je veux annuler ?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    Pas de problème, vous pouvez facilement annuler votre abonnement si vous n'êtes pas satisfait du produit.<br>
                                    <b><span class="text-blue">Nous sommes tellement sûrs que vous ne perdrez pas d'argent</span></b> que si vous n'êtes pas en profit à la fin de votre abonnement mensuel, <b><span class="text-blue">nous vous remboursons intégralement votre mensualité !</span></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="section-heading">La parole à <span class="text-blue">notre communauté !</span></h2>
                    Rejoins l'équipe et encaisse chaque semaine de l'année 🔥
                </div>
            </div>

            <div class="review-slider mt-4">
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>

                    <div class="client-review mb-3">
                        "L'équipe continuez à nous envoyer de la qualité !!! 100% des mois en vert depuis que jsuis la !"
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Lucas M.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">Lucas M<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Novembre 2023</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Vous êtes ENORME ! Quasi doublé mon capital, 80% de réussite, merci Max de m'avoir fait connaitre la commu 😍"
                    </div>
                    <!-- First image insertion -->
                    <div class="client-result mb-3">
                        <img src="{{ asset('images/Bankroll resultat septembre octobre.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" alt="Résultats de la Bankroll de MiradorLensois">
                    </div>
                    <!-- Second image insertion -->
                    <div class="client-result mb-3">
                        <img src="{{ asset('images/Bankroll resultat septembre octobre2.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" alt="Résultats supplémentaires de la Bankroll de MiradorLensois">
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/MiradorLensois.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">MiradorLensois<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Septembre 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Du très très haut niveau les gars. Continuez à nous faire kiffer et HALA MADRID #CasaBlanca 🤍"
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Yanis Madrid.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">HalaMadrid69<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Mars 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Bankroll pas très élevé de base, j'ai une stratégie de mise prudente, et pourtant les résultats sont là.<br>
                    Une analyse aux petits oignons, chapeau.<br> Equipe vraiment sérieuse."
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Pat Crossfit.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">Pat CrossFit<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Novembre 2023</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Hier c'était régalade! J'ai failli raté le dernier match 🤣🤣"
                    </div>
                    <!-- Image insertion -->
                    <div class="client-result mb-3">
                        <img src="{{ asset('images/Resultats Ozkan2.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" alt="Résultats Ozkan">
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Ozkan.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">OzkanGalatasaray1905<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Fevrier 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Au début, j'avais vraiment peur que ça soit comme d'hab, des paris à la volée un peu hasardeux. J'ai dû lire pas mal d'avis avant de me lancer. Finalement, la promesse de remboursement si je n'étais pas en profit m'a rassuré. Et au final, je ne l'ai jamais utilisé, car j'ai été rentable dès le premier mois. Continuez à nous donner des Money Bets! 💸💸💸"
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Aminee.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">AmineTipster<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Juin 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Comme énormément de personnes je pense, je repoussais, je repoussais, je repoussais et jme suis dit qu'il fallait que je test. AUCUN REGRET, le seul est d'avoir attendu mais bon mieux vaut tard que jamais ^^. J'ai commencé courant mois de septembre vraiment tranquil et dans un bon bénéf avec un budget pas ouf. Je vais passer la deuxième le mois prochain !"

                        <div class="client-result mb-3">
                        <img src="{{ asset('images/Maximerousset.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" alt="Maximerousset">
                    </div>
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/max m.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">Max RCVB<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Septembre 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Un pote qui était dans l'équipe depuis plusieurs mois m'a dit de tenter. Il faisait du bénéf régulièrement, alors j'ai décidé de tester avec un capital pas ouf ouf histoire de voir. Premier pari, premier doute (pari perdu)... et après une semaine, j'avais déjà gratté un peu moins de 200€ ! LFG "

                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/PN Make Money.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">Pierre Nico<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Janvier 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Je me suis dit que c'était encore un truc où il fallait être scotché à son écran H24 (mauvaises experiences précedemment) ... Mais en fait, c'est archi simple. Je vérifie les pronos une fois ou deux dans la journée, et c'est tout. Resultats premiere semaine hate de voir la suite 🤑"
                        <br>
                        <!-- Image insertion -->
                    <div class="client-result mb-3">
                        <img src="{{ asset('images/Resultats premiere semaine Jimmy.png') }}" class="img-fluid" style="max-width: 100%; height: auto;" alt="Résultats Ozkan">
                    </div>
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/JimmyParieur.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">JimmyParieur<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Mars 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Une IA qui fait des analyses et propose des matchs ouf. Comme dit Yann : ce n'est pas de la magie, c'est de l'analyse."<br> Plus sérieusement, bluffé par la constance des résultats semaine après semaine. <br> On en voudrait même plus parfois, mais on préfère la qualité à la quantité et là, on est servi !"
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Marco L.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0 d-inline">Marco le Fifou <img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p><br>
                            <small class="fw-light">Membre depuis, Juin 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "L'IA est carrément balèze. 4ème mois dedans, donc pour moi, c'est validé pour l'instant."
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Lebron The Goat.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0 d-inline">Samiii <img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p><br>
                            <small class="fw-light">Membre depuis, Juillet 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>
                    <div class="client-review mb-3">
                        "Je pensais que suivre les pronos, ça allait être un casse-tête et que ça me prendrait trop de temps. Avec le taf et les sorties, j'avais pas envie de me prendre la tête pendant des heures. Mais en vrai, c'est simple comme bonjour. Je reçois les paris, ça me prend même pas 10 minutes à placer, et tout est déjà optimisé. <br>Je peux continuer à profiter tout en voyant les gains rentrer, c'est le top ! Pourvu que ça dure ..!"
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Bellingham Fan.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0 d-inline">BellingoalDu74 <img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p><br>
                            <small class="fw-light">Membre depuis, Juin 2024</small>
                        </div>
                    </div>
                </div>
                <div class="card review-card">
                    <div class="client-ratings d-flex justify-content-between mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/stars.png') }}" width="100px" height="auto" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('images/icons/quotations.png') }}" width="20px" alt="">
                        </div>
                    </div>

                    <div class="client-review mb-3">
                        "Franchement, j'étais grave sceptique avant de m'inscrire. J'avais déjà testé pas mal de services de pronos, et à chaque fois, c'était la même galère : des promesses de fou mais au final, que dalle... Mais là, Securibet, c'est vraiment pas la même. Les résultats sont là, mais surtout, y'a une vraie transparence, ils te vendent pas du rêve. Good Job la team."
                    </div>
                    <div class="client-meta">
                        <div class="client-pic"><img src="{{ asset('images/Picsou BettingGoat.png') }}" alt=""></div>
                        <div class="client-details">
                            <p class="fw-bolder mb-0">Picsou BettingGoat<img src="{{ asset('images/icons/bluetick.png') }}" width="20px" height="20px" style="display: inline;" alt=""></p>
                            <small class="fw-light">Membre depuis, Juillet 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section id="packages" class="packages-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="section-heading">
                        Débloquez la puissance des pronostics <br> basés sur <span class="text-blue">l’IA 3.0 dès maintenant.</span>
                    </h2>
                    <div class="section-subheading">
                        <p>MENSUEL : 99,99€ 69.99€ par mois (seulement 2.33€ par jour!)</p>
                    </div>
                    <div class="package-switcher">
                        <div class="package-type">
                            <span class="switch monthly active" data-type="monthly">Mensuel</span>
                            /
                            <span class="switch yearly" data-type="yearly">Annuel</span>
                        </div>
                        <span class="btn btn-primary">Economise 20%</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card package-card">
                        <div class="package-header">
<button type="button" class="btn btn-primary silver-button">
    {{ setting('basic_plan_name') }}
</button>

<style>
    .silver-button {
        background: linear-gradient(135deg, #e6e6e6, #bdbdbd, #f7f7f7); /* Dégradé pour l'effet argenté */
        color: #000; /* Texte noir pour contraster avec le fond argenté */
        border: 1px solid #ccc; /* Bordure légère pour l'effet de relief */
        border-radius: 5px; /* Coins arrondis pour un style moderne */
        padding: 10px 20px; /* Espacement intérieur */
        font-weight: bold; /* Texte en gras pour bien le mettre en valeur */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre légère pour l'effet 3D */
        transition: none; /* Pas d'animation ou de transition */
    }

    /* Désactive les styles au survol */
    .silver-button:hover,
    .silver-button:focus {
        background: linear-gradient(135deg, #e6e6e6, #bdbdbd, #f7f7f7); /* Conserve le dégradé argenté */
        color: #000; /* Conserve le texte noir */
        border: 1px solid #ccc; /* Conserve la bordure */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Conserve l'effet 3D */
        transform: none; /* Pas de changement de taille ou d'effet */
    }
</style>


                            <div class="package-price monthly">
                                <span class="amount">{{ setting('basic_plan_monthly') }}€</span>/<span class="duration">mois</span>
                            </div>
                            <div class="package-price yearly" style="display: none;">
                                <span class="amount">{{ setting('basic_plan_yearly') }}€</span>/<span class="duration">an</span>
                            </div>
                        </div>

                        <div class="package-points mb-5">
                           
REJOIGNEZ LES 5% DE PARIEURS RENTABLES


<div style="margin: 16px 0; height: 1px; width: 100%; background-color: gray; opacity: 0.6;"></div>

                             <ul class="benefits">
       
            ☑️ <strong>Accédez aux prédictions précises de notre IA 3.0 Money Bet.</strong><br>
            ➡️ Via des analyses détaillées des performances des équipes et des joueurs.<br>
       
            ☑️ <strong>Sélection des paris avec les meilleures cotes disponibles.</strong><br>
        
            ☑️ <strong>Réduction des risques grâce à des recommandations optimisées.</strong><br>
        
 
        
            ☑️ <strong>Stratégie adaptée pour faire croître votre capital chaque mois.</strong><br>
            
        
            ☑️ <strong>Accès aux 3 bookmakers ayant les meilleurs cotes pour les francophones</strong> pour l'année 2024/2025<br>
            
            
            
            <div class="referral-feature">
    <p>☑️ <strong>Accès au système de parrainage exclusif.</strong></p>
    <p class="feature-benefit" style="margin-left: 20px;">
        ➡️ <em>Transformez vos relations en revenus.</em> Chaque parrainage réussi vous permet de toucher des commissions directes. Plus vous partagez, plus vous gagnez, tout en aidant vos proches à profiter des mêmes avantages que vous. <strong>C'est une opportunité de créer une source de revenus supplémentaire, sans effort supplémentaire.</strong>
    </p>
</div>

        
        <div style="margin: 16px 0; height: 1px; width: 100%; background-color: gray; opacity: 0.6;"></div>


            <b><span class="text-blue blue-glow">Si vous n'êtes pas dans le positif dès le premier mois, nous vous remboursons votre mensualité</span></b><br>
        
    </ul>
</div>
                       <a href="/checkout?plan=basic&type=monthly" class="btn btn-primary w-auto goto-checkout-basic pulse-animation-basic">
    Je veux commencer
    <img src="{{ asset('images/icons/dollar-bag.png') }}" alt="Logo" class="button-icon">
</a>

<style>
    /* Animation de pulsation pour le bouton Basic */
    .pulse-animation-basic {
        animation: pulse-basic 1.5s infinite;
        display: inline-flex; /* Permet d'aligner le texte et l'image */
        align-items: center; /* Centre verticalement le texte et le logo */
        justify-content: center; /* Centre le contenu dans le conteneur */
        overflow: hidden; /* Empêche l'animation de sortir du conteneur */
    }

    @keyframes pulse-basic {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05); /* Légère expansion à 105% */
        }
        100% {
            transform: scale(1);
        }
    }

    /* Style pour l'icône dans le bouton */
    .button-icon {
        width: 20px; /* Taille de l'icône */
        height: 20px;
        margin-left: 8px; /* Espacement entre le texte et l'icône */
    }
</style>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card package-card">
                        <div class="package-header">
<button type="button" class="btn btn-primary gold-button">
    {{ setting('pro_plan_name') }}
</button>

<style>
    .gold-button {
        background: linear-gradient(135deg, #FFD700, #FFC700, #FFEA70); /* Dégradé doré */
        color: #000; /* Texte noir pour contraster avec le fond doré */
        border: 1px solid #E6B800; /* Bordure légèrement plus foncée pour le relief */
        border-radius: 5px; /* Coins arrondis pour un effet moderne */
        padding: 10px 20px; /* Espacement intérieur */
        font-weight: bold; /* Texte en gras pour bien le mettre en valeur */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 0 15px rgba(255, 215, 0, 0.5); /* Ombre légère + Glow doré */
        transition: none; /* Pas d'animation de transition */
    }

    /* Désactive les styles de survol */
    .gold-button:hover,
    .gold-button:focus {
        background: linear-gradient(135deg, #FFD700, #FFC700, #FFEA70); /* Garde le dégradé doré */
        color: #000; /* Conserve le texte noir */
        border: 1px solid #E6B800; /* Garde la bordure dorée */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 0 15px rgba(255, 215, 0, 0.5); /* Garde le glow constant */
        transform: none; /* Désactive l'expansion */
    }
</style>


                            <div class="package-price monthly">
                                <span class="amount">{{ setting('pro_plan_monthly') }}€</span>/<span class="duration">mois</span>
                            </div>
                            <div class="package-price yearly" style="display: none;">
                                <span class="amount">{{ setting('pro_plan_yearly') }}€</span>/<span class="duration">an</span>
                            </div>
                        </div>

                        <div class="package-points mb-5">
PASSEZ À L'ÉTAPE SUPÉRIEURE AVEC LE PACK COMPLET                            
                            <div style="margin: 16px 0; height: 1px; width: 100%; background-color: gray; opacity: 0.6;"></div>
                            
                         <h5>Ce qui est inclu dans le pack Money Bet 3.0 ainsi que:</h5>
                            <ul>

        
            ☑️ S<strong>upport client prioritaire pour toutes vos questions.</strong><br>
        
        
           <p>☑️ <strong>Recevez instantanément une notification par email dès qu'un nouveau pronostic est publié.</strong></p>
    <p class="feature-benefit" style="margin-left: 20px;">
        ➡️ <em>Ne perdez jamais une opportunité de gagner.</em> Chaque pronostic est une chance d'augmenter vos profits. En recevant nos recommandations en temps réel, vous êtes parmi les premiers à profiter des cotes les plus avantageuses. <strong>Moins d'attente, plus de résultats.</strong><br>
        
          
                            </ul>
                        
                            
                               <div style="margin: 16px 0; height: 1px; width: 100%; background-color: gray; opacity: 0.6;"></div>


            <b><span class="text-blue blue-glow">Si vous n'êtes pas dans le positif dès le premier mois, nous vous remboursons votre mensualité</span></b><br>
                        </div>
<a href="/checkout?plan=pro&type=monthly" class="btn btn-primary w-auto goto-checkout-pro pulse-animation">
    Je veux commencer
    <img src="{{ asset('images/icons/dollar-bag.png') }}" alt="Logo" class="button-icon">
</a>

<style>
    /* Animation de pulsation */
    .pulse-animation {
        animation: pulse 1.5s infinite;
        display: inline-flex; /* Permet d'aligner le texte et l'image */
        align-items: center; /* Centre verticalement le texte et le logo */
        justify-content: center; /* Centre le contenu dans le conteneur */
        overflow: hidden; /* Empêche l'animation de sortir du conteneur */
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05); /* Légère expansion à 105% */
        }
        100% {
            transform: scale(1);
        }
    }

    /* Style pour l'icône dans le bouton */
    .button-icon {
        width: 20px; /* Taille de l'icône */
        height: 20px;
        margin-left: 8px; /* Espacement entre le texte et l'icône */
    }
</style>

                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="newsletter-section py-5" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <h4 class="section-heading">Débloquez dès aujourd'hui 15 % de réduction</h4>
                    <p>votre premier mois à moins 15% en rentrant votre adresse mail</p>
                    <div class="hero-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select name="state" class="form-control">
                                            <option value="" selected disabled>State</option>
                                            <option value="">A State</option>
                                            <option value="">B State</option>
                                            <option value="">C State</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1 m-auto">
                                <img src="{{ asset('images/icons/claim.png') }}" class="img-fluid" width="18px" alt="">
                                Je veux recevoir ma réduction
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
    <script src="{{ asset('js/calculator.js') }}?v={{ time() }}"></script>
    <script>
        $(".package-switcher .switch").click(function (e) {
            e.preventDefault();
            let elem = $(this);
            $(".switch").removeClass('active');
            elem.addClass('active');
            $('.package-price').hide();

            if (elem.data('type') == 'monthly') {
                $('.package-price.monthly').show();
                $(".goto-checkout-basic").attr('href', '/checkout?plan=basic&type=monthly');
                $(".goto-checkout-pro").attr('href', '/checkout?plan=pro&type=monthly');
            } else {
                $('.package-price.yearly').show();
                $(".goto-checkout-basic").attr('href', '/checkout?plan=basic&type=yearly');
                $(".goto-checkout-pro").attr('href', '/checkout?plan=pro&type=yearly');
            }
        });
    </script>
@endsection
