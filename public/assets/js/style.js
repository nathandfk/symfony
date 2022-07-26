window.addEventListener("DOMContentLoaded", (event) => {
    let calendar = dom('.calendar-inner', true)
    let $step = 0
    width = ""
    $end = ""
    calendar.forEach(element => {
        element.querySelector('.calendar-wrapper').style.transform = 'translateX(0px)'
        $end = element.querySelector('.calendar-wrapper').childElementCount
        $end = 320 * $end
    })

    dom('html, body').addEventListener("click", event => {
        let bodyClosest = event.target.closest('body')
        if (event.target) {
            if (event.target.closest('.product-more-picture')) {
                bodyClosest.querySelector('.product-galery').classList.remove('d-none')
                setTimeout(() => {
                    bodyClosest.querySelector('.product-galery').classList.remove('product-galery-dismiss')
                }, 50);
            } else if(event.target.closest('.close-product-galery')){
                bodyClosest.querySelector('.product-galery').classList.add('product-galery-dismiss')
                setTimeout(() => {
                    bodyClosest.querySelector('.product-galery').classList.add('d-none')
                }, 200);
            } else if(event.target.dataset.checked){
                let checked = event.target.dataset.checked
                let closestDash = event.target.closest('.dashboard-wrapper')
                closestDash.querySelectorAll('[data-selected]').forEach(element => {
                    element.classList.add('d-none')
                });
                closestDash.querySelectorAll('[data-checked]').forEach(element => {
                    element.classList.add('click-c5')
                    element.classList.remove('click-success')
                });
                event.target.classList.add('click-success')
                event.target.classList.remove('click-c5')
                closestDash.querySelector('[data-selected='+checked+']').classList.remove('d-none')
            } else if(event.target.id=="dwelling_pictures"){
                setInterval(() => {
                    let pictures = event.target
                    if (pictures.value != "") {
                        for (var i = 0; i < pictures.files.length; i++) {
                            if (dom('.img')) {
                                dom('.img').src=pictures.files[i]
                            }
                        }
                        clearInterval()
                    }
                }, 4000);
            } else if(event.target.className == "list-location-item"){
                if (event.target.innerHTML != "" && event.target.dataset.checkedLocation != "") {
                    let targetInner = event.target.closest('.location-inner')
                        host = event.target.closest('.host-wrapper')
                    targetInner.querySelector('.seach-location').value = event.target.innerHTML
                    host.querySelector('#dwelling_city').value = event.target.dataset.city
                    host.querySelector('#dwelling_state').value = event.target.dataset.state
                    host.querySelector('#dwelling_longitude').value = event.target.dataset.lon
                    host.querySelector('#dwelling_latitude').value = event.target.dataset.lat
                    targetInner.querySelector('[name=value_location]').value = event.target.dataset.checkedLocation
                    targetInner.querySelector('.location-content').innerHTML = ""
                }
            } else if(event.target.classList.contains("open-responsive-menu")){
                let navbar = event.target.closest('#navbar')
                    navbar.querySelector(".responsive-menu-cover").classList.remove('d-none')
                    setTimeout(() => {
                        navbar.querySelector(".responsive-menu-cover").classList.remove('menu-cover-dismiss')
                        navbar.querySelector(".responsive-menu").classList.remove('responsive-menu-dismiss')
                    }, 200);
            } else if(event.target.classList.contains("close-responsive-menu")){
                let navbar = event.target.closest('#navbar')
                    navbar.querySelector(".responsive-menu-cover").classList.add('menu-cover-dismiss')
                    navbar.querySelector(".responsive-menu").classList.add('responsive-menu-dismiss')
                    setTimeout(() => {
                        navbar.querySelector(".responsive-menu-cover").classList.add('d-none')
                    }, 500);
            }
        }
    })
    if (window.FileList && window.File && window.FileReader) {
    dom('html, body').addEventListener("change", event => {
        let bodyClosest = event.target.closest('body')
        if (event.target) {
            if(event.target.id=="dwelling_pictures"){
                let pictures = event.target
                dom('.img-uploaded').innerHTML = ""
                for (var i = 0; i < pictures.files.length; i++) {
                    let img = document.createElement('img')
                    const reader = new FileReader();
                    reader.addEventListener('load', event => {
                        img.src= event.target.result;
                    });
                    reader.readAsDataURL(pictures.files[i]);
                    dom('.img-uploaded').appendChild(img)
                }
            }
        }
    })
    }
    // dom('html, body').addEventListener("keyup", event => {
    //     if (event.target.className == "seach-location") {
    //         let element = event.target
    //         let targetInner = event.target.closest('.location-inner')
    //         if (element.value.length >= 3){
    //             fetch(element.dataset.link, {headers: {
    //                 'Accept': 'application/json', 'Content-Type': 'application/json; charset=UTF-8'
    //                 }, method: 'POST', body: JSON.stringify({location: element.value}) })
    //             .then(data => data.text())
    //             .then(response => {
    //                 if (response != "" && response != " ") {
    //                     targetInner.querySelector('.location-content').innerHTML = response
    //                 } else {
    //                     targetInner.querySelector('.location-content').innerHTML = ""
    //                 }
    //             })
    //         } else {
    //             targetInner.querySelector('.location-content').innerHTML = ""
    //         }
    //     }
    // })
    if (dom('.alert')) {
        setTimeout(() => {
            dom('.alert').classList.add('alert-not-dismiss')
            setTimeout(() => {
                dom('.alert').classList.remove('alert-not-dismiss')
                setTimeout(() => {
                    dom('.alert').remove()
                }, 500);
            }, 7000);
        }, 300);
    }
})
