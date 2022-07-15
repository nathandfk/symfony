window.addEventListener("DOMContentLoaded", (event) => {
    function request(links, data, json, options) {
        fetch(links, {headers: {
            'Accept': 'application/json', 
            'Content-Type': 'application/json; charset=UTF-8'
            }, method: 'POST', body: data })
        .then(data => {
            return json == true ?
            data.json()
            : data.text();
        })
        .then(response => {
            if (options == "show") {
                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    dom('#message_setting').innerHTML = obj.welcome
                    dom('#tax_setting').value = obj.tax
                    dom('#home_title_setting').value = obj.title
                    dom('#email_admin_setting').value = obj.email
                }
            } else if(options == "search") {
                dom('.settings-result').innerHTML = response
            } else if (options == "settings"){

                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    dom('.reset-value', true)
                    .forEach(element => {
                        element.value = ""
                    });
                    notification(obj.message, obj.icon)
                    request("/account/settings/search", JSON.stringify({value:""}), false, "search")
                } else {
                    notification(obj.message, obj.icon)
                }
            } else if (options == "update") {
                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    notification(obj.message, obj.icon)
                }
            } else if (options == "delete") {
                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    notification(obj.message, obj.icon)
                    request("/account/settings/search", JSON.stringify({value:""}), false, "search")
                }
            }
        })
    }
    request("/account/settings/show", JSON.stringify({id:""}), true, "show")

    request("/account/settings/search", JSON.stringify({value:""}), false, "search")

    dom('html, body').addEventListener('keyup', event => {
        if (event.target) {
            if (event.target.id == "settings-search") {
                let $value = event.target.value
                request("/account/settings/search", JSON.stringify({value:$value}), false, "search")
            }
        }
    })
    dom('html, body').addEventListener('submit', event => {
        if (event.target) {
            if (event.target.id == "settings-wrapper") {
                event.preventDefault()
                var formData = new FormData(event.target);
                var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                    check = JSON.parse(json)
                if (check.message_setting == "" || check.tax_setting == "" 
                || check.message_setting == " " || check.tax_setting == " " 
                || check.home_title_setting == "" || check.home_title_setting == " "
                || check.email_admin_setting == "" || check.email_admin_setting == " ") {
                    
                    notification('Un ou plusieurs champs obligatoires sont vides', 'fas fa-exclamation')
                } else {
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(check.email_admin_setting))
                    {
                        request("/account/settings", json, true, "settings")
                        request("/account/settings/search", JSON.stringify({value:""}), false, "search")  
                    } else {
                        notification("L'adresse mail saisie est incorrect", 'fas fa-exclamation')
                    }              
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
        } else if (event.target.name == "btn-update-params") {
            let closest = event.target.closest('tr')
            if (event.target.classList.contains('fa-pen')) {
                event.target.classList.remove('fa-pen')
                event.target.classList.add('fa-check')
                    input = document.createElement('INPUT')
                    
                    td = closest.querySelector('.settings_data_value')
                    if (!td.querySelector('input')) {
                        valueTd = td.innerHTML
                        td.innerHTML = ""
                        td.appendChild(input)
                        input.value = valueTd
                    }
                
            } else if (event.target.classList.contains('fa-check')){
                let td = closest.querySelector('.settings_data_value')
                if (td.querySelector('input')) {
                    event.target.classList.add('fa-pen')
                    event.target.classList.remove('fa-check')
                    input = td.querySelector('input')
                    td.innerHTML = input.value
                    $id = closest.dataset.id
                    $value = td.innerHTML
                    request("/account/settings/update", JSON.stringify({id: $id, value: $value}), true, "update")
                }
            }
        } else if (event.target.name == "btn-delete-params") {
            let closest = event.target.closest('tr')
                $id = closest.dataset.id

            if (event.target.classList.contains('fa-times')) {
                event.target.classList.remove('fa-times')
                event.target.classList.add('fa-undo')
                request("/account/settings/delete", JSON.stringify({id: $id}), true, "delete")
                
            } else if (event.target.classList.contains('fa-undo')){
                event.target.classList.add('fa-times')
                event.target.classList.remove('fa-undo')
                request("/account/settings/delete", JSON.stringify({id: $id}), true, "delete")
            }
        }
    })
})