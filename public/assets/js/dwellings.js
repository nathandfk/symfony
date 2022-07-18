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
                console.log(response)
                if (dom('.habitation-list')) {
                    dom('.habitation-list').innerHTML = response
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
})