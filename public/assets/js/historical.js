dom('html, body').addEventListener('click', event =>{
    if (event.target) {
        let closestTable = event.target.closest("#historical-table")
        if (closestTable) {
            
            checked = closestTable.querySelectorAll(".historical-checked")
            checkedValue = []
        if (event.target.className == "historical-checked-all") {
            checkedAction = closestTable.querySelector(".historical-checked-all")
            checked.forEach(element => {
                if (checkedAction.checked == true) {
                    element.checked = true
                } else {
                    element.checked = false
                }
            });
        } else if (event.target.name == "btn-refuse" || event.target.name == "btn-cancel" || event.target.name == "btn-valid"){
            checked.forEach(element => {
                if (element.checked == true) {
                    checkedValue.push(element.value)
                }
            });
            if (checkedValue.length < 1) {
                notification('Veuillez sélectionner une réservation', 'fas fa-exclamation')
            } else {
                jsonValue = "";
                checkedValue.forEach(function(element, last, array){
                    add = (last === array.length - 1) ? '' : ",";
                    jsonValue += element+add
                });
                fetch('/mon-compte/historical/action', {
                    headers: {
                    'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
                    }, method: 'POST',
                    body: JSON.stringify({btn_name:event.target.name, value:jsonValue})
                })
                .then(res => res.json())
                .then(response => {
                    console.log(response)
                })
            }
        }
        
        }
    }
})