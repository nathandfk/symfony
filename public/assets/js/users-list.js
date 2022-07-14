window.addEventListener("DOMContentLoaded", (event) => {
    const templates = `
        <div class="user-view-cover"></div>
        <form id="form-user-view" name="form-user-view" class="form-user-view" method="POST">
            <div class="user-view-header">
                <h2>
                    Détails de l'utilisateur
                </h2>
                <span class="click click-brown fas fa-times size24 close-user-view">
                </span>
            </div>
            <div class="user-view-body">
                <div>
                    <h4>Profile</h4>
                    <div class="d-flex gap-1 ai-center">
                        <span>Prénom: </span> <b>{{firstName}}</b>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <span>Nom: </span> <b>{{lastName}}</b>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <span>Email: </span> <b>{{email}}</b>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <span>Numéro de téléphone: </span> <b>{{number}}</b>
                    </div>
                </div>
                <div>
                    <h4>Rôles</h4>
                    <div class="d-flex gap-1 ai-center">
                        <input type="checkbox" name="moderator_role" id="moderator_role" class="w-max-content" {{moderator_role}}> <label for="moderator_role">Rôle modérateur</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <input type="checkbox" name="host_role" id="host_role" class="w-max-content" {{host_role}}> <label id="host_role">Rôle hôte</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <input type="checkbox" name="admin_role" id="admin_role" class="w-max-content" {{admin_role}}> <label id="admin_role">Rôle admin</label>
                    </div>
                    <input type="hidden" value="{{user-id}}" id="user_id" name="user_id">
                </div>
                <div>
                    <h4>Hôte</h4>
                    <div>
                        <label for="host_statut">Statut de l'utilisateur hôte</label>
                        <select name="host_statut" id="host_statut">
                            <option value="PRIVATE" {{private}}>Désactiver les habitats associés</option>
                            <option value="PUBLIC" {{public}}>Activer les habitats associés</option>
                            <option value="BLOCKED" {{blocked}}>Bannir l'utilisateiur</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h4>Statut du compte</h4>
                    <div class="d-flex gap-1 ai-center">
                        <input type="radio" name="account_status" value="locked" id="account_locked" class="w-max-content" {{account_locked}}> <label for="account_locked">Bloquer</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                        <input type="radio" name="account_status" value="unlocked" id="account_unlocked" class="w-max-content" {{account_unlocked}}> <label for="account_unlocked">Débloquer</label>
                    </div>
                </div>
            </div>
            <div class="user-view-footer">
                <input type="submit" class="click click-success" id="update-user" value="Modifier">
            </div>
        </form>`
    function list() {
        if (dom('.users-list')) {
            empty = ''
            fetch('/admin/users-list', {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({value: empty}) })
            .then(data => data.text())
            .then(response => {
                if (response != "" && response != " ") {
                    dom('.users-list').innerHTML = response
                } else {
                    dom('.users-list').innerHTML = ""
                }
            })
        }
    }
    list()

    dom('html, body').addEventListener('keyup', event => {
        if(event.target.id == "search-users"){
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
    dom('html, body').addEventListener('click', event => {
        if(event.target.name == "btn-see-user") {
            let dataId = event.target.closest('tr').dataset.id
            if (dataId != "" && dataId != " " && !dom('.user-view-wrapper')) {
            let dataLink = event.target.dataset.link
            let dashBoardClosest = event.target.closest('.dashboard-wrapper')
                createElement = document.createElement('div')
                createElement.setAttribute('class', 'user-view-wrapper')
            
            fetch(dataLink, {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({id: dataId}) })
            .then(data => data.json())
            .then(response => {
                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    result = templates
                    .replace('{{firstName}}', obj.first_name)
                    .replace('{{lastName}}', obj.last_name)
                    .replace('{{email}}', obj.email)
                    .replace('{{number}}', obj.number)
                    .replace('{{moderator_role}}', obj.moderator_role)
                    .replace('{{admin_role}}', obj.admin)
                    .replace('{{host_role}}', obj.host)
                    .replace('{{private}}', obj.private_host)
                    .replace('{{public}}', obj.public_host)
                    .replace('{{blocked}}', obj.blocked_host)
                    .replace('{{user-id}}', obj.user_id)
                    .replace('{{account_locked}}', obj.account_locked)
                    .replace('{{account_unlocked}}', obj.account_unlocked)
                    
                    dashBoardClosest.appendChild(createElement)
                    createElement.innerHTML = result
                    dashBoardClosest.querySelector('.user-view-cover').classList.add('cover-not-dismiss')
                    setTimeout(() => {
                        dashBoardClosest.querySelector('.form-user-view').classList.add('user-view-not-dismiss')
                    }, 300);
                } else {
                    notification("Une erreur s'est produite, veuillez actualiser votre page et recommencer", "fas fa-exclamation")
                }
                
            })

            }

            
        
        } else if(event.target.classList.contains('close-user-view')){
            let wrapperClosest = event.target.closest('.user-view-wrapper')
            wrapperClosest.querySelector('.user-view-cover').classList.remove('cover-not-dismiss')
            wrapperClosest.querySelector('.form-user-view').classList.remove('user-view-not-dismiss')
            setTimeout(() => {
                wrapperClosest.remove()  
            }, 1000);
        }
    })
    dom('html, body').addEventListener('submit', event => {
        
        if (event.target) {
            if (event.target.id == "form-user-view") {
                event.preventDefault()
                let input = event.srcElement
                let element = []
                // var myForm = document.getElementById('form-user-view');
                // formData = new FormData(myForm);
                var formData = new FormData(event.target);
                 var object = {};
                formData.forEach((value, key) => object[key] = value);
                var json = JSON.stringify(object);
                fetch("/admin/user-edit", {headers: {
                    'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                    }, method: 'POST', body: json })
                .then(data => data.json())
                .then(response => {
                    const obj = JSON.parse(response)
                    if (obj.response == "success") {
                        notification(obj.message, obj.icon)
                        list()
                    }
                    
                })
                
            }
            
        }
    })
})