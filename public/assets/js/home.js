dom('html, body').addEventListener("submit", event => {
    if (event.target) {
        if (event.target.id == "newsletter-form") {
            event.preventDefault()
            let formData = new FormData(event.target);
            fetch('/newsletter', {method: 'POST', body:formData })
            .then(data => data.json())
            .then(response => {
                const obj = JSON.parse(response)
                if (obj.response == "success" || obj.response=="error") {
                    notification(obj.message, obj.icon)
                }
            })
        }
    }
})