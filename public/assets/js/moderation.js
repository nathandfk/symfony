function moderation(links, data, json) {
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
        if (json == false) {
            dom('.moderation-comments').innerHTML = response
        } else {
            const obj = JSON.parse(response)
            if (obj.response == 'success' || obj.response == 'error') {
                notification(obj.message, obj.icon)
                moderation('/admin/moderation-comments', JSON.stringify({value:''}), false)
            }
        }
    })
}

window.addEventListener("DOMContentLoaded", (event) => {
    
    moderation('/admin/moderation-comments', JSON.stringify({value:''}), false)

    dom('html, body').addEventListener('click', event => {
        if (event.target) {
            if (event.target.closest(".paginate-moderation-comment")) {
                if (event.target.href && event.target.nodeName == "A") {
                    event.preventDefault()
                    moderation(event.target.href, JSON.stringify({value:''}), false)
                }
            } else if (event.target.name="manage_comment"){
                let closest = event.target.closest('tr')
                    $id = closest.dataset.id
                    if (closest) {
                        moderation('/admin/manage-comments', JSON.stringify({id:$id}), true)
                    }
            }
        }
    })
})