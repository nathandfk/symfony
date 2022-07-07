window.addEventListener("DOMContentLoaded", (event) => {
    const templates = `
        <div class="user-view-wrapper">
        <div class="user-view-cover"></div>
        <form data-id="{{user-id}}" id="form-user-view" name="form-user-view" class="form-user-view" method="POST">
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
                        <input type="checkbox" name="user_role" id="user_role" class="w-max-content" {{user_role}}> <label for="user_role">Rôle user</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                    <input type="checkbox" name="host_role" id="host_role" class="w-max-content" {{host_role}}> <label id="host_role">Rôle hôte</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                    <input type="checkbox" name="admin_role" id="admin_role" class="w-max-content" {{admin_role}}> <label id="admin_role">Rôle admin</label>
                    </div>
                </div>
                <div>
                    <h4>Hôte</h4>
                    <div>
                        <label for="host_level">Statut de l'utilisateur hôte</label>
                        <select name="host_level" id="host_level">
                            <option value="PRIVATE" {{private}}>Désactiver les habitats associés</option>
                            <option value="PUBLIC" {{public}}>Activer les habitats associés</option>
                            <option value="BLOCKED" {{blocked}}>Bannir l'utilisateiur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="user-view-footer">
                <input type="submit" class="click click-success" id="update-user" value="Modifier">
            </div>
        </form>
        </div>
    `
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

            let dataId = event.target.dataset.id
            let dataLink = event.target.dataset.link
            
            fetch(dataLink, {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({id: dataId}) })
            .then(data => data.json())
            .then(response => {
                const obj = JSON.parse(response)
                if (obj.response == "success") {
                    let dashBoardClosest = event.target.closest('.dashboard-wrapper')
                    let createElement = document.createElement('div')

                    result = templates
                    .replace('{{firstName}}', obj.first_name)
                    .replace('{{lastName}}', obj.last_name)
                    .replace('{{email}}', obj.email)
                    .replace('{{number}}', obj.number)
                    .replace('{{user_role}}', obj.user)
                    .replace('{{admin_role}}', obj.admin)
                    .replace('{{private}}', obj.private_host)
                    .replace('{{public}}', obj.public_host)
                    .replace('{{blocked}}', obj.blocked_host)

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


            
        
        } else if(event.target.classList.contains('close-user-view')){
            let dashBoardClosest = event.target.closest('.dashboard-wrapper')
            dashBoardClosest.querySelector('.user-view-cover').classList.remove('cover-not-dismiss')
            dashBoardClosest.querySelector('.form-user-view').classList.remove('user-view-not-dismiss')
            setTimeout(() => {
                dashBoardClosest.querySelector('.user-view-wrapper').remove()
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
                    }, method: 'POST', body: JSON.stringify(json) })
                .then(data => data.json())
                .then(response => {
                    console.log(response)
                })
                console.log(json)
                // for (let i = 0; i < 4; i++) {
                    
                    
                // }
                
            }
            
        }
    })
})