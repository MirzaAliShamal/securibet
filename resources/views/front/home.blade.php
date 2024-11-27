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
                                <h5>Débloquez immédiatement 15 % de réduction</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Adresse email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="Prénom" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1 w-100">
                                            <img src="{{ asset('images/icons/claim.png') }}" class="img-fluid" width="18px" alt="">
                                            Je veux recevoir ma réduction maintenant
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
                <div class="col-lg-6 mb-3">
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
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="strategy" id="standard" value="Standard" checked>
                                            <label class="form-check-label" for="standard">Standard</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="strategy" id="aggressive" value="Aggressive">
                                            <label class="form-check-label" for="aggressive">Aggressive</label>
                                        </div>
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
                                    <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                                        <img src="{{ asset('images/icons/claim.png') }}" class="img-fluid" width="18px" alt="">
                                        Choisir un plan
                                    </button>
                                </div>
                            </form>
                            <div id="symbols-container"></div>
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
                            C'est une manière de travailler avec les money bets. La stratégie de pari simple nécessite 2 à 3 heures de votre temps par jour ou tous les 2/3 jours, tandis que la stratégie agressive demande 3, 4 heures ou plus.
                        </p>
                        <p style="color: #4b4b4b; font-size: 13px;">Le calculateur affiche le niveau de revenu approximatif. Les performances passées ne préjugent pas des performances futures.</p>
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
                        Profitez de jusqu'à <span class="text-blue">500€</span> en offres promotionnelles en vous inscrivant aux bookmakers en <span class="text-blue">France.</span>
                    </h2>
                    <div class="section-subheading">
                        <p>Les sites de paris distribuent une multitude de crédits bonus pour vous faire découvrir leurs services. <br> Nous vous guiderons pour maximiser ces promotions.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 mb-4">
                    <div class="card bonus-detector-card">
                        <div class="top">
                            <div class="top-logo"><img src="{{ asset('images/image-5.png') }}"></div>
                            <div class="top-meta">
                                <h2>BetMGM</h2>
                                <span class="top-price">$1500</span>
                            </div>
                        </div>
                        <div class="body">
                            <p>Obtenez jusqu’à $ 1500 en paris bonus si le premier pari est perdant - Garanti ! Doit être 21+. Problème de jeu ? Composez le 1-800-GAMBLER.</p>
                        </div>
                        <div class="bottom">
                            <h6 class="fw-bold">Copiez et collez ce code sur BetMGM</h6>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control" name="code" placeholder="Slop" autocomplete="off">
                                </div>
                                <div class="col-5 ps-0">
                                    <button type="button" class="btn btn-primary w-100">
                                        Claim $1500
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bonus-detector-card zoom-box">
                        <div class="top">
                            <div class="top-logo"><img src="{{ asset('images/image-4.png') }}"></div>
                            <div class="top-meta">
                                <h2>Sporttrade</h2>
                                <span class="top-price">$300</span>
                            </div>
                        </div>
                        <div class="body">
                            <p>Obtenez une remise en argent allant jusqu’à 300 $ !</p>
                        </div>
                        <div class="bottom">
                            <h6 class="fw-bold">Copiez et collez ce code sur Sporttrade</h6>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control" name="code" placeholder="Slop" autocomplete="off">
                                </div>
                                <div class="col-5 ps-0">
                                    <button type="button" class="btn btn-primary w-100">
                                        Claim $300
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bonus-detector-card">
                        <div class="top">
                            <div class="top-logo"><img src="{{ asset('images/image-4.png') }}"></div>
                            <div class="top-meta">
                                <h2>Fanatics</h2>
                                <span class="top-price">$500</span>
                            </div>
                        </div>
                        <div class="body">
                            <p>Obtenez jusqu’à 1 000 $ de paris bonus !</p>
                        </div>
                        <div class="bottom">
                            <h6 class="fw-bold">Copiez et collez ce code sur Fanatics</h6>
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control" name="code" placeholder="Slop" autocomplete="off">
                                </div>
                                <div class="col-5 ps-0">
                                    <button type="button" class="btn btn-primary w-100">
                                        Claim $500
                                    </button>
                                </div>
                            </div>
                        </div>
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
                    Grâce à notre <b>IA 3.0</b>, vous n'avez plus qu'à suivre et placer nos paris optimisés en <b>moins de 15 minutes par jour.</b></br></br>
                    Nous sommes tellement sur de nous que si vous ne réalisez pas de profits, <b>nous vous remboursons intégralement votre mensualité.*</b></p>
                    <p>Etes vous prêt à faire parti des <b>5% de parieurs dans le profit ?</b></p><br>
                    <center>
                        <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
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
    <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
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
    <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
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

    <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                                      Je veux découvrir aujourd'hui !
                                </button>

</ul>
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
                    <h2 class="section-heading">
                        Nous comprenons. Cela semble trop beau pour être vrai.</h2>
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
                                   <p>Si vous avez déjà vu le film <em><strong>Moneyball</strong></em>, vous savez que l’idée principale était de tirer parti des <strong>statistiques et des données</strong> pour former une équipe gagnante, plutôt que de se baser uniquement sur l'intuition ou l'expérience. Cette approche révolutionnaire dans le monde du sport nous a profondément inspirés chez <strong>Securibet</strong>.</p>

<p>C'est dans cet esprit que <strong>nous avons développé notre IA 3.0</strong>. Nous analysons une immense quantité de données spécifiques, parfois invisibles à l'œil humain, pour prédire les résultats des paris sportifs. Que ce soit des performances d'équipes, des tendances historiques, ou des facteurs contextuels, notre IA s'assure que <strong>chaque pari est calculé avec précision</strong>.</p>

<p>Grâce à cette technologie avancée, nous sommes fiers d'afficher un <strong>taux de réussite de plus de 76%</strong>. Comme dans <em><strong>Moneyball</strong></em>, nous croyons fermement que <strong>les chiffres, bien utilisés, peuvent battre les probabilités</strong>. Avec <strong>Securibet</strong>, vous ne misez plus au hasard, mais sur la science des données.</p>
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

<p>La plupart des utilisateurs ne passent <b>pas plus de 15/20 minutes par jour</b> pour suivre ces recommandations.</p>

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
                                    Non — Nous ne vous promettons pas que vous gagnerez chaque pari, ou chaque jour, ce n'est pas la réalité des paris sportifs.<br>
                                    Même avec notre IA 3.0, il est impossible de prédire parfaitement tous les résultats. <br>
                                    Cependant, sur une période de 30 jours, <b>nous garantissons que vous serez profitable grâce à notre IA 3.0.</b>
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
            <p><strong>Budget conseillé :</strong> Entre 300 € et 400 €</p>
            <ul>
                <li>Pour débuter efficacement et avoir la possibilité de profiter de gains potentiels intéressants, un budget de 300 € à 400 € est fortement recommandé. Cette fourchette permet de parier des montants optimisés sur chaque pari, augmentant ainsi vos chances de générer des retours potentiels attractifs dès le début. Avec ce budget, vous bénéficiez d'une marge suffisante pour gérer les fluctuations et maximiser vos chances de profits à long terme.</li>
            </ul>
            <p><strong>Budget minimum conseillé :</strong> Entre 150 € et 300 €</p>
            <ul>
                <li>Un budget de 150 € à 300 € est le point d'entrée minimum pour observer des résultats potentiellement profitables. Bien que les gains potentiels soient plus modestes, cette somme permet de tester la stratégie tout en prenant des risques limités et en construisant progressivement votre capital.</li>
            </ul>
            <p><strong>Budget optimal conseillé pour commencer :</strong> 500 €</p>
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
            <li><strong>Si votre budget est entre 150 € et 250 €</strong> : nous vous recommanderons spécialement 2 bookmakers offrant les meilleures cotes pour maximiser vos profits.</li>
            <li><strong>Si votre budget est entre 250 € et 500 €</strong> : nous vous conseillerons 3 bookmakers optimisés pour obtenir les meilleures cotes.</li>
            <li><strong>Avec un budget supérieur à 500 €</strong> : nous vous suggérerons également 4 bookmakers sélectionnés pour leurs cotes avantageuses, afin de maximiser vos gains.</li>
         </ul>
         <p>Ainsi, en fonction de votre budget, <b>nous vous guidons vers les plateformes les plus adaptées</b> pour optimiser vos paris.</p>
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
                                    Pas de problème, vous pouvez facilement annuler votre essai si vous n'êtes pas satisfait du produit.<br>
                                    <b>Nous sommes tellement sûrs que vous ne perdrez pas d'argent</b> que si vous n'êtes pas en profit à la fin de votre abonnement mensuel, <b>nous vous remboursons intégralement votre mensualité !</b>





                                </div>
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
                    <h2 class="section-heading">
                        La parole à <span class="text-blue">notre communauté !</span></h2>
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

    <section class="packages-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="section-heading">
                        Débloquez la puissance des pronostics <br> basés sur <span class="text-blue">l’IA 3.0 dès maintenant.</span>
                    </h2>
                    <div class="section-subheading">
                        <p>MENSUEL : 99,99€ 69.99€ par mois (seulement 2.33€ par jour!)</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card package-card"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card package-card"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-section py-5">
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
@endsection
