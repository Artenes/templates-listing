import axios from 'axios';

const urlParts = window.location.pathname.split('/');
const slug = urlParts[urlParts.length - 1];

function renderPayPalButton(template, elementId, style) {

    paypal.Button.render({

        env: 'sandbox',
        //env: 'production',

        locale: 'en_US',

        style: style,

        client: {
            sandbox: 'AW6EpvYk6hhs3_enZoTUIXSJLBkk2I3LD9R6gYq5DzlkyBGFP0lR48wTqxl81EReQR2wlgY-EhkyUaK5'
            //production: 'xxxxxxxxx'
        },

        commit: true,

        payment: function (data, actions) {

            return actions.payment.create({

                payment: {

                    transactions: [

                        {

                            amount: {total: template.price, currency: 'USD'},
                            description: template.title + " (" + template.name + ")"


                        }

                    ],

                    note_to_payer: "Don't forget, it will take up to 2 business days for your product to be sent to your email!.",

                }

            });

        },

        onAuthorize: function (data, actions) {

            return actions.payment.execute().then(function (payment) {

                window.location.href = "/bought/" + template.slug;

            });

        }

    }, elementId);

}

axios.get('/api/templates/' + slug).then(function (response) {

    renderPayPalButton(response.data.template, '#paypal-button-top', {

        size: 'small',
        color: 'black',
        shape: 'rect',
        label: 'buynow',
        tagline: false

    });

    renderPayPalButton(response.data.template, '#paypal-button-bottom', {

        size: 'responsive',
        color: 'black',
        shape: 'rect',
        label: 'buynow',
        tagline: false

    });

    renderPayPalButton(response.data.template, '#paypal-button-middle', {

        size: 'medium',
        color: 'black',
        shape: 'rect',
        label: 'buynow',
        tagline: false

    });

});
