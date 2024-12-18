@extends('layouts.front', ['footer' => 'pages-footer'])

@section('content')
    <section class="checkout-section py-5 right-glow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12 mb-4">
                    <form action="" id="checkoutForm">
                        @csrf
                        <input type="hidden" name="setup_intent">
                        <input type="hidden" name="plan" value="{{ isset($request->plan) ? $request->plan : 'basic' }}">
                        <input type="hidden" name="type" value="{{ isset($request->type) ? $request->type : 'monthly' }}">
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
                                        <input type="text" class="form-control" name="first_name" placeholder="Prénom" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nom de famille*</label>
                                        <input type="text" class="form-control" name="surname" placeholder="Nom de famille" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Adresse e-mail*</label>
                                        <input type="email" class="form-control" name="email" placeholder="Adresse e-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Numéro de téléphone*</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Mot de passe*</label>
                                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Confirmation du mot de passe*</label>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation du mot de passe" required>
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
                                <div class="col-12 mb-3">
                                    <table class="table checkout-table">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th style="text-align: right;">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Subscription Fee</td>
                                                <td style="text-align: right;">${{ $amount }}</td>
                                            </tr>
                                            <tr>
                                                <td>Service Fee</td>
                                                <td style="text-align: right;">$0.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Grand Total</th>
                                                <th style="text-align: right;">${{ $amount }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nom du titulaire de la carte*</label>
                                        <input type="text" class="form-control" name="cardholder_name" placeholder="Vu sur votre carte" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Numéro de carte*</label>
                                        <span class="form-control" id="cardNumber" ></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Expiration*</label>
                                        <span class="form-control" id="expireDate" ></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">CVV*</label>
                                        <span class="form-control" id="cvvNumber" ></span>
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
                                <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center gap-1 w-100 complete-registration">
                                    Soumettre
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12 mb-4">
                    @if ($request->plan == 'basic')
                        <div class="card package-card">
                        <div class="package-header">
                            <button type="button" class="btn btn-primary">{{ setting('basic_plan_name') }}</button>
                            @if ($request->type == 'monthly')
                                <div class="package-price monthly">
                                    <span class="amount">{{ setting('basic_plan_monthly') }}€</span>/<span class="duration">month</span>
                                </div>
                            @else
                                <div class="package-price yearly">
                                    <span class="amount">{{ setting('basic_plan_yearly') }}€</span>/<span class="duration">year</span>
                                </div>
                            @endif
                        </div>

                        <div class="package-points mb-5">
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
                        </div>
                    </div>
                    @else
                        <div class="card package-card">
                        <div class="package-header">
                            <button type="button" class="btn btn-primary">{{ setting('pro_plan_name') }}</button>
                            @if ($request->type == 'monthly')
                                <div class="package-price monthly">
                                    <span class="amount">{{ setting('pro_plan_monthly') }}€</span>/<span class="duration">month</span>
                                </div>
                            @else
                                <div class="package-price yearly">
                                    <span class="amount">{{ setting('pro_plan_yearly') }}€</span>/<span class="duration">year</span>
                                </div>
                            @endif
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
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://js.stripe.com/v3/"></script>
    <script>let STRIPE_PUBLISHABLE_KEY = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";</script>
    <script src="{{ asset('js/checkout.js?v='.rand()) }}"></script>
@endsection
