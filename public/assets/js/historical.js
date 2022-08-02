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
        if(options == "admin" || options == "client" || options == "host" || options == "action") {
            if (json == false) {
                if (dom('.historical-'+options+'-wrapper')) {
                    dom('.historical-'+options+'-wrapper').innerHTML = response
                }
            } else {
                const obj = JSON.parse(response)
                if (obj.response == 'success') {
                    notification(obj.message, obj.icon)
                    request('/mon-compte/historical/client', JSON.stringify({value:''}), false, 'client')
                    request('/mon-compte/historical/host', JSON.stringify({value:''}), false, 'host')
                } else {
                    notification(obj.message, obj.icon)
                }
            }
        }
    })
}

dom('html, body').addEventListener('click', event =>{
    if (event.target) {
        if (event.target.name == "annuled" || event.target.name == "confirmed" || event.target.name == "annuled_by_host"){
            let closest = event.target.closest('tr')
                if (closest) {
                    $btn = event.target.name
                    $id = closest.dataset.id
                    request('/mon-compte/historical/action', JSON.stringify({btn:$btn, id:$id}), true, 'action')
                }
        } else if (event.target.closest('.paginate-historical-client')) {
            if (event.target.href && event.target.nodeName == "A") {
                event.preventDefault()
                request(event.target.href, JSON.stringify({value:''}), false, 'client')
            }
        } else if (event.target.closest('.paginate-historical-host')) {
            if (event.target.href && event.target.nodeName == "A") {
                event.preventDefault()
                request(event.target.href, JSON.stringify({value:''}), false, 'host')
            }
        }
    }
})
if (dom('.paginate-historical a')) {
    preventDefault()
}



window.addEventListener("DOMContentLoaded", (event) => {
    
    request('/mon-compte/historical/client', JSON.stringify({value:''}), false, 'client')
    request('/mon-compte/historical/host', JSON.stringify({value:''}), false, 'host')


    dom('html, body').addEventListener('keyup', event => {
        if(event.target.id == "search-historical-client"){
            let link = event.target.dataset.link
            fetch(link, {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({value: event.target.value}) })
            .then(data => data.text())
            .then(response => {
                if (response != "" && response != " ") {
                    dom('.users-list').innerHTML = response
                } else {
                    dom('.users-list').innerHTML = ""
                }
            })
            .catch()
        }
    })
    
})