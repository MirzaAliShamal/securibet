@extends('layouts.front', ['footer' => 'pages-footer'])

@section('content')
    <section class="checkout-section py-5 right-glow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12 mb-4">
                    <form action="">
                        @csrf
                        <div class="register-details mb-4">
                            <div class="d-flex justify-content-between mb-4">
                                <h2 class="fw-bolder mb-3">Créez votre compte</h2>
                                <div class="d-flex gap-1 align-items-center gap-2">
                                    <a href="">Vous avez déjà un compte ?</a>
                                    <a href="" class="btn btn-primary">S'identifier</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Prénom*</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nom de famille*</label>
                                        <input type="text" class="form-control" name="surname" placeholder="Nom de famille">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Adresse e-mail*</label>
                                        <input type="email" class="form-control" name="email" placeholder="Adresse e-mail">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Numéro de téléphone*</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="payment-methods mb-4">
                            <h2 class="fw-bolder mb-3">Modes de paiement</h2>
                            <img src="{{ asset('images/payment-icons.png') }}" width="240px" alt="">
                        </div>

                        <div class="card-details mb-4">
                            <h2 class="fw-bolder mb-3">Détails de la carte</h2>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nom du titulaire de la carte*</label>
                                        <input type="text" class="form-control" name="cardholder_name" placeholder="Vu sur votre carte">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Numéro de carte*</label>
                                        <input type="text" class="form-control" name="card_number" placeholder="Vu sur votre carte">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Expiration*</label>
                                        <input type="text" class="form-control" name="expiry" placeholder="MM/YY">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">CVV*</label>
                                        <input type="text" class="form-control" name="cvv" placeholder="654">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" value="">
                                    <label class="form-check-label" for="terms">J'accepte les Conditions d'utilisation</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1 w-100">
                                    Soumettre
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12 mb-4">
                    <div class="card shadow-box">
                        <h2 class="fw-bolder mb-3">Argent</h2>
                        <p>
                            Des recommandations lucratives qui vous permettent de générer des revenus supplémentaires en un minimum de temps. Grâce à notre IA 3.0, vous maximisez vos profits avec certitude et en libérant du temps pour d'autres activités.
                        </p>
                        <ul>
                            <li>Si vous n’êtes pas en profit au premier mois nous vous remboursons votre mensualité.</li>
                            <li>Obtenez les meilleures recommandations de paris avant les matchs pour les tops bookmakers compatible avec notre technologie encore inconnue Money Bets</li>
                            <li>Une liste de Money Bet  qui se renouvelle tous les jours</li>
                            <li>Accès aux meilleurs bonus pour les tops bookmakers accessibles aux Français</li>
                        </ul>
                        <hr>
                        <p>
                            En fournissant les informations de votre carte, vous autorisez Securibet à débiter votre carte pour les paiements futurs conformément à ses conditions. Vous pouvez consulter des informations importantes sur Securibet dans les pages des Conditions d'utilisation et de la Politique de confidentialité.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
