
function adyen_payment(){
// Set your X-API-KEY with the API key from the Customer Area.
const {Client, Config, CheckoutAPI} = require('@adyen/api-library');
const config = new Config();
// Set your X-API-KEY with the API key from the Customer Area.
config.apiKey = 'AQEjhmfuXNWTK0Qc+iSWk3Y1peuUQyM5OS7KuBlWKBYxpBOcRlsQwV1bDb7kfNy1WIxIIkxgBw==-Q8B/zNDm46YPcIajyMgj37yh804zc72UuiqB+BuIa1Y=-_XEZf;#N?mc}7CQg';
config.merchantAccount = 'FarmbookECOM';
const client = new Client({ config });
client.setEnvironment("TEST");
const checkout = new CheckoutAPI(client);
checkout.payments({
    amount: { currency: "PHP", value: 10 },
    paymentMethod: {
        type: 'gcash'
    },
    reference: "YOUR_ORDER_NUMBER",
    merchantAccount: config.merchantAccount,
    returnUrl: "https://your-company.com/checkout?shopperOrder=12xy.."
}).then(res => res).catch(res => console.log(res));

}

adyen_payment();