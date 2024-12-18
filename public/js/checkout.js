$(document).ready(function () {
    var stripe = Stripe(STRIPE_PUBLISHABLE_KEY);
    var card, cvc, exp;

    var elements = stripe.elements();
    var style = {
        base: {
            lineHeight: '28px',
            fontSize: '14px',
            color: '#fff',
            '::placeholder': {
                color: 'rgba(255,255,255,1)'
            }
        }
    };

    card = elements.create('cardNumber', {
        'placeholder': '0000 0000 0000 0000',
        'style': style
    });
    card.mount('#cardNumber');

    // CVC
    cvc = elements.create('cardCvc', {
        'placeholder': 'CVV',
        'style': style
    });
    cvc.mount('#cvvNumber');

    // Card expiry
    exp = elements.create('cardExpiry', {
        'placeholder': 'MM/YY',
        'style': style
    });
    exp.mount('#expireDate');

    $.ajax({
        type: "GET",
        url: `/stripe/init`,
        success: function (response) {
            $(".complete-registration").data('secret', response.intent.client_secret);
        },
        error: function (jqXHR, status, error) {
            console.log(error);
        }
    });

    $(document).on("click", ".complete-registration", function(e) {
        e.preventDefault();
        let elem = $(this);
        let btnText = elem.html();
        elem.html('Loading...');
        elem.prop('disabled', true);

        const clientSecret = elem.data('secret');
        var cardData = {
            'name': 'Securibet',
        };

        stripe.createPaymentMethod(
            'card', card, {
                billing_details: cardData,
            }
        ).then(function (result) {
            if (result.error && result.error.message) {
                $("#cardNumber").addClass('is-invalid');
                $("#cardNumber").after(`
                    <div class="invalid-feedback">${result.error.message}</div>
                `);
                elem.html(btnText);
                elem.prop('disabled', false);
            } else {
                $("[name='setup_intent']").val(result.paymentMethod.id);
                var checkout = $("#checkoutForm").serialize();
                $.ajax({
                    type: "POST",
                    url: `/register`,
                    data: checkout,
                    success: function (response) {
                        location.href = '/moneybet';
                    },
                    error: function (jqXHR, status, error) {
                        console.log(error);
                        elem.html(btnText);
                        elem.prop('disabled', false);
                    }
                });
            }
        });
    });
});
