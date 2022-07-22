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
                if (dom('.habitation-list')) {
                    dom('.habitation-list').innerHTML = response
                }
            } else if (options == "action") {
                const obj = JSON.parse(response)
                if (obj.response == "success" || obj.response == "error") {
                    notification(obj.message, obj.icon)
                    request("/dwelling/list", JSON.stringify({value:""}), false, "show")
                }
            } else if (options == "delete") {
                const obj = JSON.parse(response)
                if (obj.response == "success" || obj.response == "error") {
                    notification(obj.message, obj.icon)
                }
            }
        })
    }
    request("/dwelling/list", JSON.stringify({value:""}), false, "show")
    dom('html, body').addEventListener("keyup", (event) => {
        if (event.target) {
            if (event.target.id == "host-search-dwelling") {
                let input = event.target
                    if (input.value != '' && input.value != " ") {
                        request("/dwelling/list", JSON.stringify({value:input.value}), false, "show")
                    } else {
                        request("/dwelling/list", JSON.stringify({value:""}), false, "show")
                    }
            }
        }
    })

    dom('html, body').addEventListener("click", (event) => {
        if (event.target) {
            if (event.target.id == "dwelling-activate") {
                let closest = event.target.closest('tr')
                    request("/dwelling/activate", JSON.stringify({id:closest.dataset.id}), true, "action")
                
            } else if (event.target.id == "dwelling-delete"){
                let closest = event.target.closest('tr')
                    request("/dwelling/delete", JSON.stringify({id:closest.dataset.id}), true, "action")

            } else if (event.target.closest('.paginate-dwelling-list')) {
                if (event.target.href && event.target.nodeName == "A") {
                    event.preventDefault()
                    request(event.target.href, JSON.stringify({value:''}), false, 'show')
                }
            } else if (event.target.id == 'add-favorite') {
                let id = event.target.dataset.id
                let link = event.target.dataset.link
                    event.preventDefault()
                    request(link, JSON.stringify({id:id}), true, 'action')
            } else if (event.target.id == 'add-signal') {
                let id = event.target.dataset.id
                let link = event.target.dataset.link
                    event.preventDefault()
                    request(link, JSON.stringify({id:id}), true, 'action')
            }
        }
    })
})