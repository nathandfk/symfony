window.addEventListener("DOMContentLoaded", (event) => {
    dom('html, body').addEventListener('submit', event => {
        if (event.target) {
            if (event.target.id == "settings-wrapper") {
                event.preventDefault()
                var formData = new FormData(event.target);
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                    check = JSON.parse(json)
                if (check.message_setting == "" || check.tax_setting == "" || check.message_setting == " " || check.tax_setting == " ") {
                    notification('Un ou plusieurs champs obligatoires sont vides', 'fas fa-exclamation')
                } else {
                    fetch("/account/settings", {headers: {
                        'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                        }, method: 'POST', body: json })
                    .then(data => data.json())
                    .then(response => {
                        console.log(response)
                        // const obj = JSON.parse(response)
                        // if (obj.response == "success") {
                        //     notification(obj.message, obj.icon)
                        // }
                    })
                }
            }
        }
    })

    dom('html, body').addEventListener('click', event => {

        if (event.target.id == "btn-delete-account") {
            let closest = event.target.closest('#delete-account')
                closest.querySelector('.card').classList.remove('d-none')
                setTimeout(() => {
                    closest.querySelector('.card').classList.remove('card-dismiss')
                }, 400);
        } else if (event.target.id == "btn-delete-cancel") {
            let closest = event.target.closest('#delete-account')
                closest.querySelector('.card').classList.add('card-dismiss')
                setTimeout(() => {
                    closest.querySelector('.card').classList.add('d-none')
                }, 400);
        } else if (event.target.id == "btn-delete-confirm") {
            fetch("/account/delete", {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({id: ""}) })
            .then(data => data.json())
            .then(response => {
                const obj = JSON.parse(response)
                console.log(obj)
                if (obj.response == "success") {
                    notification(obj.message, obj.icon)
                    if (obj.redirect != "") {
                        setTimeout(() => {
                            location.href = obj.redirect
                        }, 10000);
                    }
                } else {
                    notification(obj.message, obj.icon)
                }
                
            })
        }
    })
})