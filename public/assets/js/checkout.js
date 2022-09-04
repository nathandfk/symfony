dom("html, body").addEventListener('click', event => {
if (event.target.name == 'checking-dispo' && dataProduct()[6] != "") {
  let closestForm = event.target.closest('.product-form-check')
  let dataset = closestForm.querySelector('.nb-traverlers').dataset
  let animals = dataset.animals ? dataset.animals : 'ND';
  let childrens = dataset.childrens ? dataset.childrens : 'ND';
  let adults = dataset.adults ? dataset.adults : 'ND';
  let babies = dataset.babies ? dataset.babies : 'ND';
  arrivalDate = closestForm.querySelector('.single-product-arrival').dataset.period
  departureDate = closestForm.querySelector('.single-product-departure').dataset.period
  travelers = adults+"/"+childrens+"/"+babies+"/"+animals;
  if (arrivalDate && departureDate) {
    setTimeout(() => {
      // This is your test publishable API key.
      const stripe = Stripe("pk_test_51GD6saG2KF2h4mZbyn6xqSgRIZa0dHeLewNSKhwt36bhMJxuIANTP10tNtY7Uf6K8pFEKI1wwDXOAipSnhkNPwvE00MnRwN4W0");

      // The items the customer wants to buy
      const items = [{ id: "xl-tshirt" }];

      let elements;
      
      initialize();
      checkStatus();
      
      document
        .querySelector("#payment-form")
        .addEventListener("submit", handleSubmit);
      
      // Fetches a payment intent and captures the client secret
      async function initialize() {
        const { clientSecret } = await fetch("/checkout/paiement/"+dataProduct()[2]+"/"+dataProduct()[3]+"/"+dataProduct()[4]+"/"+travelers, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ items }),
        }).then((r) => {
          return r.json()});
        elements = stripe.elements({ clientSecret });
        const paymentElement = elements.create("payment");
        paymentElement.mount("#payment-element");
      }
      
      async function handleSubmit(e) {
        e.preventDefault();
        setLoading(true);
      
        const { error } = await stripe.confirmPayment({
          elements,
          confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: dataProduct()[0],
          },
        });
      
        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === "card_error" || error.type === "validation_error") {
          showMessage(error.message);
        } else {
          showMessage("Une erreur inattendue est apparue.");
        }
      
        setLoading(false);
      }
      
      // Fetches the payment intent status after payment submission
      async function checkStatus() {
        const clientSecret = new URLSearchParams(window.location.search).get(
          "payment_intent_client_secret"
        );
      
        if (!clientSecret) {
          return;
        }
      
        const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);
      
        switch (paymentIntent.status) {
          case "succeeded":
            showMessage("Paiement en cours !");
            break;
          case "processing":
            showMessage("Votre paiement est en cours de traitement.");
            break;
          case "requires_payment_method":
            showMessage("Votre paiement n'a pas abouti, veuillez réessayer.");
            break;
          default:
            showMessage("Quelque chose s'est mal passé.");
            break;
        }
      }
      
      // ------- UI helpers -------
      
      function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");
      
        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;
      
        setTimeout(function () {
          messageContainer.classList.add("hidden");
          messageText.textContent = "";
        }, 4000);
      }
      
      // Show a spinner on payment submission
      function setLoading(isLoading) {
        if (isLoading) {
          // Disable the button and show a spinner
          document.querySelector("#submit").disabled = true;
          document.querySelector("#spinner").classList.remove("hidden");
          document.querySelector("#button-text").classList.add("hidden");
        } else {
          document.querySelector("#submit").disabled = false;
          document.querySelector("#spinner").classList.add("hidden");
          document.querySelector("#button-text").classList.remove("hidden");
        }
      }
      
    }, 700);
    }
  }
})