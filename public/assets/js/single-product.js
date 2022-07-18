
dom("html, body").addEventListener('click', event => {
    function isValidDate(dateString) {
        var regEx = /^\d{4}-\d{2}-\d{2}$/;
        if(!dateString.match(regEx)) return false;
        var d = new Date(dateString);
        var dNum = d.getTime();
        if(!dNum && dNum !== 0) return false;
        return d.toISOString().slice(0,10) === dateString;
    }
    let template = `
    <form id="payment-form">
        <table class="text-left">
            <thead>
                <th>Récapitulatif</th>
            </thead>

            <tbody>
                <tr>
                    <td>Période du</td>
                    <td><span class="reservation-arrival-date c2 size18"></span> - <span class="reservation-departure-date c2 size18"></span></td>
                </tr>
                <tr>
                    <td>Voyageurs</td>
                    <td><span class="reservation-travelers c2 size18"></span></td>
                </tr>
                <tr>
                    <td>Prix unitaire</td>
                    <td><span class="reservation-price c1 ff-m size18"></span> <span class="c1 ff-m size18">€</span></td>
                </tr>
                <tr>
                    <td>Nombre de nuit</td>
                    <td><span class="reservation-count-day c2 ff-m size18"></span></td>
                </tr>
                <tr>
                    <td>Sous-total</td>
                    <td><span class="reservation-sub-total c1 ff-m size18"></span> <span class="c1 ff-m size18">€</span></td>
                </tr>
                <tr>
                    <td>Frais de service</td>
                    <td><span class="reservation-tax-service c1 ff-m size18"></span> <span class="c1 ff-m size18">€</span></td>
                </tr>
                <tr>
                    <th>Total à Payer</th>
                    <td><span class="reservation-total-price c1 ff-m size24"></span> <span class="c1 ff-m size24">€</span></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div id="payment-element">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <div class="d-flex gap-1 jc-space-between">
            <div class="edit-reservation-date click click-brown">Modifier mes dates</div>
            <button id="submit" class="click click-success">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Payer maintenant</span>
            </button>
        </div>
        <div id="payment-message" class="hidden"></div>
    </form>`

    if (event.target) {
        if(event.target.name == 'checking-dispo') {

                let user = `<div>
                <table class="text-left">
                    <thead>
                        <th>Récapitulatif</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Période du</td>
                            <td><span class="reservation-arrival-date c2 size18"></span> - <span class="reservation-departure-date c2 size18"></span></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="c1">Les dates que vous venez de vérifier sont disponibles.</h4>
                <div class="d-flex gap-1">
                <div class="edit-reservation-date click click-brown">Modifier mes dates</div>
                <a href='`+dataProduct()[7]+`' class="click click-success">Je me connecte</a>
                </div>
            </div>`

            let closestForm = event.target.closest('.product-form-check')
                arrivalDate = closestForm.querySelector('.single-product-arrival').dataset.period
                arrivalShow = closestForm.querySelector('.single-product-arrival').innerHTML
                departureDate = closestForm.querySelector('.single-product-departure').dataset.period
                departureShow = closestForm.querySelector('.single-product-departure').innerHTML
                let dataset = closestForm.querySelector('.nb-traverlers').dataset
                let animals = dataset.animals ? dataset.animals : '';
                let childrens = dataset.childrens ? dataset.childrens + ' enfant(s) ' : '';
                let adults = dataset.adults ? dataset.adults + ' adulte(s) ' : '';
                let babies = dataset.babies ? dataset.babies + ' bébé(s) ' : '';
                nameAnimals = "";
                if (animals != "") {
                    nameAnimals = animals > 1 ? ' animaux ' :  ' animal ' 
                }
                let travelers = animals + nameAnimals + childrens + adults + babies
                
                if (arrivalDate && departureDate) {
                    if (isValidDate(arrivalDate) && isValidDate(departureDate)){
                        fetch(dataProduct()[1], 
                        {headers: {
                        'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                        }, method: 'POST', body: JSON.stringify({arrival: arrivalDate, departure: departureDate, dwelling:dataProduct()[2]}) })
                        .then(res => res.json())
                        .then(response => {
                            const obj = JSON.parse(response);
                            if(obj.response == "success") { 
                                closestForm.classList.add("d-none")
                                if (!dataProduct()[6]) {
                                    document.querySelector('.product-form-checkout').classList.remove("d-none")
                                    document.querySelector('.product-form-checkout').innerHTML = user
                                    document.querySelector('.reservation-arrival-date').innerHTML = arrivalShow
                                    document.querySelector('.reservation-departure-date').innerHTML = departureShow
                                } else {
                                    document.querySelector('.product-form-checkout').classList.remove("d-none")
                                    document.querySelector('.product-form-checkout').innerHTML = template
                                    document.querySelector('.reservation-arrival-date').innerHTML = arrivalShow
                                    document.querySelector('.reservation-departure-date').innerHTML = departureShow
                                    document.querySelector('.reservation-total-price').innerHTML = obj.total_price
                                    document.querySelector('.reservation-count-day').innerHTML = obj.nb_day
                                    document.querySelector('.reservation-price').innerHTML = obj.price
                                    document.querySelector('.reservation-sub-total').innerHTML = obj.sub_total_price
                                    document.querySelector('.reservation-tax-service').innerHTML = obj.tax_service
                                    document.querySelector('.reservation-travelers').innerHTML = travelers
                                }
                            } else if (obj.response == "error") {
                                notification("Une erreur inattendue s'est produite, veuillez recommencer", "fas fa-exclamation")
                            }
                        })
                        .catch(error => console.log('error'));
                    }
                } else {
                    notification("Veuillez renseigner vos dates", "fas fa-exclamation")
                }
            setTimeout(() => {
                let payment = document.querySelector('#payment-element')
                if (payment && payment.childElementCount < 1) {
                    notification("Une erreur inattendue s'est produite, veuillez recommencer", "fas fa-exclamation")
                }
            }, 1000);
        }
    }
});

dom("html, body").addEventListener('mousedown', event => {
    if(event.target.closest('.choice-travelers [type=number]')){
        let wrapperClosest = event.target.closest('.choice-travelers')
        let limit = wrapperClosest.querySelector('.people-limit').value
        if (limit > 0) {
            let allNumber = wrapperClosest.querySelectorAll('[type=number]')
                total = 0
            allNumber.forEach(element => {
                total += parseInt(element.value)

            });
            if (total >= limit) {
                allNumber.forEach(element => {
                    element.max = element.value
                    
                });
            } else {
                allNumber.forEach(element => {
                    element.max = ""
                });
            }
        }
}
})
dom("html, body").addEventListener('mouseup', event => {
    if(event.target.closest('.choice-travelers [type=number]')){
    let innerClosest = event.target.closest('.single-product-travelers')
    let allNumber = innerClosest.querySelectorAll('[type=number]')
    let adults = childrens = babies = animals = "0"
    let name = "animal"
    animalsText = adultsText = childrensText = babiesText = ""
    let data = innerClosest.querySelector(".nb-traverlers").dataset
    allNumber.forEach(element => {
        switch (element.id) {
            case "product-traveler-animal":
                if (element.value > 1) {
                    name = "animaux"
                }
                animals = element.value
                animalsText = animals + " "+name+" "
                data.animals = animals
                break;

            case "product-traveler-adult":
                adults = element.value
                adultsText = adults + " adulte(s) "
                data.adults = adults
                break;    
                
            case "product-traveler-children":
                childrens = element.value
                childrensText = childrens + " enfant(s) "
                data.childrens = childrens
                break;  
                
            case "product-traveler-baby":
                babies = element.value
                babiesText = babies + " bébé(s) "
                data.babies = babies
                break;  
        
        }
    });
    text = adultsText + childrensText + babiesText + animalsText
    innerClosest.querySelector(".nb-traverlers").innerHTML = text
    }
})
dom("html, body").addEventListener('click', event => {
    if (event.target.classList.contains('criteria-star')) {
        let closest = event.target.closest('.criteria')
            span = closest.querySelector('span')
            count = closest.querySelector('span').childElementCount


        let index = null;
        for (let i = 0; i < count; i++) {
            if (span.children[i].classList.contains("c1")) {
                span.children[i].classList.remove("c1")
            }
            if (event.target == span.children[i]) {
                index = i
            } 
        }
        if (index!=null) {
            for (let i = 0; i <= index; i++) {
                span.children[i].classList.add("c1")
            } 
        }       
    } else if (event.target.name == "note-unavailable"){
        let closest = event.target.closest('.product-form-check')
            $arrival = closest.querySelector('.single-product-arrival').dataset.period
            $departure = closest.querySelector('.single-product-departure').dataset.period

        if (!$arrival || !$departure ) {
            notification('Veuillez renseigner les dates', "fas fa-exclamation")
        } else {
            if ($arrival == "" && $departure == "") {
                notification('Veuillez renseigner les dates', "fas fa-exclamation")
            } else {
                let path = closest.dataset.path
                fetch(path, 
                {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({arrival:$arrival, departure:$departure, dwelling:closest.dataset.dwelling}) })
                .then(res => res.json())
                .then(response => {
                    const obj = JSON.parse(response);
                    if(obj.response == "success") { 
                        notification(obj.message, obj.icon)
                    } else if (obj.response == "error") {
                        notification(obj.message, obj.icon)
                    }
                })
                .catch(error => console.log('error'));
            }
        }
    }
})

let data = {_dwelling: "", _cleanliness:"", _precision: "",
_communication:"", _location:"", 
_arrival:"", _value_for_money:""}
dom("html, body").addEventListener('submit', event => {
    if (event.target) {
        if (event.target.id == "user-like") {
            event.preventDefault()
            var formData = new FormData(event.target);
            var object = {};
                formData.forEach((value, key) => object[key] = value);
            var json = JSON.stringify(object);
                check = JSON.parse(json)

            data._cleanliness = check._cleanliness ? check._cleanliness : data._cleanliness
            data._precision = check._precision ? check._precision : data._precision
            data._communication = check._communication ? check._communication : data._communication
            data._location = check._location ? check._location : data._location
            data._arrival = check._arrival ? check._arrival : data._arrival
            data._value_for_money = check._value_for_money ? check._value_for_money : data._value_for_money
            data._dwelling = check.btn_like ? event.target.dataset.dwelling : data._dwelling;
            
            if (check.btn_like) {
                fetch("/product/likes", 
                    {headers: {
                    'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                    }, method: 'POST', body: JSON.stringify(data) })
                    .then(res => res.json())
                    .then(response => {
                        const obj = JSON.parse(response);
                        if(obj.response == "success") {
                            notification(obj.message, obj.icon)
                            event.target.closest('form').remove()
                        } else {
                            notification(obj.message, obj.icon)
                        }
                    })
            }
            
            
        } else if (event.target.id == "user-comment"){
            event.preventDefault()
            var formData = new FormData(event.target);
            var object = {};
                formData.forEach((value, key) => object[key] = value);
            var json = JSON.stringify(object);
            console.log(json)
                fetch("/product/comments", 
                    {headers: {
                    'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                    }, method: 'POST', body: json })
                    .then(res => res.json())
                    .then(response => {
                        const obj = JSON.parse(response);
                        if(obj.response == "success") {
                            notification(obj.message, obj.icon)
                            event.target.closest('form').remove()
                        } else {
                            notification(obj.message, obj.icon)
                        }
                })
            
        }
    }
})