
let newURL = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search

dom('html, body').addEventListener("mouseup", event =>{
    if(event.target){
        if (event.target.id == 'price_range') {
            let closest = event.target.closest('.filter_range')
            closest.querySelector('label').innerHTML = event.target.value
            var url = new URL(newURL);
            if (url.searchParams.get('price')) {
                url.searchParams.set('price', event.target.value)
            } else {
                url.searchParams.append('price', event.target.value)
            }
            window.location.href = url
        }
    }
})

dom('html, body').addEventListener("click", event =>{
    if(event.target){
        if (event.target.id == 'open_filter') {
            let closest = event.target.closest('.filter-wrapper')
                form = closest.querySelector('.card')
                form.classList.remove('d-none')
                setTimeout(() => {
                    form.classList.remove('card-dismiss')
                }, 100);
        } else if (event.target.id == 'close_filter') {
            let closest = event.target.closest('.filter-wrapper')
                form = closest.querySelector('.card')
                form.classList.add('card-dismiss')
                setTimeout(() => {
                    form.classList.remove('d-none')
                }, 100);
        } else if (event.target.id == 'filter_apply') {
            let closest = event.target.closest('.filter-wrapper')
                order = closest.querySelector('[name=order]').value
                type = closest.querySelector('[name=type]').value
            var url = new URL(newURL);
            if (url.searchParams.get('order')) {
                url.searchParams.set('order', order)
            } else{
                url.searchParams.append('order', order)
            } 
            if (url.searchParams.get('type')) {
                url.searchParams.set('type', type)
            } else {
                url.searchParams.append('type', type)
            }
            window.location.href = url
        }
    }
})

