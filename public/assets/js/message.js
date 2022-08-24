window.addEventListener("DOMContentLoaded", (event) => {

    function message(link, data, details = false, send = false) {
        fetch(link, {headers: {
            'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
            }, method: 'POST', body: JSON.stringify(data) })
        .then(data => data.text())
        .then(response => {
            if (dom('.message-selected') && details == false && send == false) {
                    dom('.message-selected').innerHTML = response
                
            } else if(dom('.message-col2') && details == true && send == false){
                dom('.message-col2').innerHTML = response
                
                dom('.message-col2-body').scrollTop = dom('.message-col2-body').scrollHeight
                
            } else if(dom('.message-col2') && details == false && send == true){
                
                
            }
        })
    }
    setInterval(() => {
    message('/mon-compte/message/selected', {id: 'auto'}, false, false)
    }, 500);

    dom('html, body').addEventListener('click', event => {
        if(event.target.id == "send-message") {
            let closestMessage = event.target.closest('.message-col2')
                showMessage = closestMessage.querySelector('#show-message')
                recipientId = closestMessage.querySelector('#id-message').dataset.id
            if (showMessage.value != "") {
                message('/mon-compte/message/send', {id: recipientId, message: showMessage.value}, false, true)
                message('/mon-compte/message/details', {id: recipientId}, true)
                showMessage.value = ""
            } else {
                notification('Votre champ de saisie est vide', 'fas fa-exclamation');
            }
        } else if(event.target.classList.contains('choice-discussion')) {
            let recipientId = event.target.dataset.id
            message('/mon-compte/message/details', {id: recipientId}, true, false)
        }
    })
})