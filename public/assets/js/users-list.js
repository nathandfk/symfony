window.addEventListener("DOMContentLoaded", (event) => {
    const templates = `
        <div class="user-view-wrapper">
        <div class="user-view-cover"></div>
        <form data-id="{{user-id}}" id="form-user-view" class="form-user-view">
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
                        <input type="checkbox" class="w-max-content"> <label>Rôle user</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                    <input type="checkbox" class="w-max-content"> <label>Rôle hôte</label>
                    </div>
                    <div class="d-flex gap-1 ai-center">
                    <input type="checkbox" class="w-max-content"> <label>Rôle admin</label>
                    </div>
                </div>
                <div>
                    <h4>Hôte</h4>
                    <div>
                        <label>Statut de l'utilisateur hôte</label>
                        <select name="statut">
                            <option value="PRIVATE" {{private}}>Désactiver les habitats associés</option>
                            <option value="PUBLIC" {{public}}>Activer les habitats associés</option>
                            <option value="BLOCKED" {{blocked}}>Bannir l'utilisateiur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="user-view-footer">
                <input type="submit" class="click click-success" value="Modifier">
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
        }
    })
    dom('html, body').addEventListener('click', event => {
        if(event.target.name == "btn-see-user"){
            let dashBoardClosest = event.target.closest('.dashboard-wrapper')
            let createElement = document.createElement('div')

            let dataId = event.target.dataset.id
            let dataLink = event.target.dataset.link
            
            fetch(dataLink, {headers: {
                'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                }, method: 'POST', body: JSON.stringify({id: dataId}) })
            .then(data => data.json())
            .then(response => {
                const obj = JSON.parse(response)
                if (obj.statut == "success") {
                    result = templates
                    .replace('{{firstName}}', obj.first_name)
                    .replace('{{lastName}}', obj.last_name)
                } else {
                    notification("Une erreur s'est produite, veuillez actualiser votre page et recommencer", "fas fa-exclamation")
                }
            })

            console.log(first_name)

            dashBoardClosest.appendChild(createElement)
            createElement.innerHTML = result


            dashBoardClosest.querySelector('.user-view-cover').classList.add('cover-not-dismiss')
            setTimeout(() => {
                dashBoardClosest.querySelector('.form-user-view').classList.add('user-view-not-dismiss')
            }, 300);
        
        } else if(event.target.classList.contains('close-user-view')){
            let dashBoardClosest = event.target.closest('.dashboard-wrapper')
            dashBoardClosest.querySelector('.user-view-cover').classList.remove('cover-not-dismiss')
            dashBoardClosest.querySelector('.form-user-view').classList.remove('user-view-not-dismiss')
            setTimeout(() => {
                dashBoardClosest.querySelector('.user-view-wrapper').remove()
            }, 1000);
        }
    })
})