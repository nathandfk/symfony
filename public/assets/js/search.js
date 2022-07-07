window.addEventListener("DOMContentLoaded", (loadedEvent) => {
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
        if (dom('.calendar-wrapper')) {
        let bodyClosest = event.target.closest('body')
        let targetDateClosest = event.target.closest('.target-data')
        let searchClosest = event.target.closest('.module-search-wrapper')
        let input = document.createElement('input')
        let width = 320
        let int = dom('.calendar-wrapper').childElementCount
        let $end = width * int
        
        if (event.target) {
            /* Reset */
            let dataSearch = dom('.target-data', true)
                dataSearch.forEach(element => {
                    if (element.querySelector('.superpose')) {
                        if (event.target.querySelector('.superpose')) {
                            if (!element.querySelector('.superpose').classList.contains('d-none') && element.querySelector('.superpose').classList.contains('superpose-active')) {
                                element.querySelector('.superpose').classList.remove('superpose-active')
                                setTimeout(() => {
                                    if (!element.querySelector('.superpose').classList.contains('d-none')) {
                                        element.querySelector('.superpose').classList.add('d-none')   
                                    }
                                }, 200);
                            }
                        }
                    }
                });
                let search = bodyClosest.querySelector('.search-place > label')
                if (search.querySelector('input')) {
                    if (search.querySelector('input').value == "" || search.querySelector('input').value == " ") {
                        search.innerHTML = ''
                    } else if (search.querySelector('input').value != "" || search.querySelector('input').value != " ") {
                        search.innerHTML = search.querySelector('input').value
                    }
                }
            /* End Reset */

            if (event.target.classList.contains('popup-open-search')) {
                bodyClosest.querySelector('.popup-search').classList.add('popup-search-active')
            } else if (event.target.classList.contains('popup-closed-search')) {
                bodyClosest.querySelector('.popup-search').classList.remove('popup-search-active')
            } else if (event.target.classList.contains('search-place')) {
                input.type = "text"
                input.value = event.target.querySelector('label').innerHTML
                event.target.querySelector('label').innerHTML = ""
                input.classList.add("search-place-input")
                input.placeholder = "Où allez-vous"
                event.target.querySelector('label').appendChild(input)
                input.focus()
            } else if (event.target.classList.contains('search-place-input')) {
                event.target.focus()
            } else if(event.target.classList.contains('target-data')){
                let dispoClosest = event.target.closest('.atypikhouse-search-dispo')
                let target = event.target.closest('.target-data').querySelector('.superpose')
                
                if (event.target.closest(".target-data").classList.contains("search-arrival-date")) {
                    if (dispoClosest.querySelector(".search-arrival-date > label").dataset.period) {
                        dispoClosest.querySelector(".search-departure-date > label").dataset.period = ""
                        dispoClosest.querySelector(".search-departure-date > label").classList.contains("single-product-departure") ? dispoClosest.querySelector(".search-departure-date > label").innerHTML = "_ _ / _ _ / _ _ _ _" : dispoClosest.querySelector(".search-departure-date > label").innerHTML = ""
                        dispoClosest.querySelector(".date-departure-selected") ? dispoClosest.querySelector(".date-departure-selected").classList.remove("date-departure-selected") : "";
                        let generalCalendar = dispoClosest.querySelector(".search-departure-date .general-calendar").innerHTML 
                        dispoClosest.querySelector(".search-arrival-date .general-calendar").innerHTML = generalCalendar
                    }
                }

                if (target.innerHTML != "") {
                    if (!target.classList.contains('d-none')) {
                        setTimeout(() => {
                            target.classList.remove('superpose-active')
                        }, 200);
                    } else {
                        target.classList.remove('d-none')
                        setTimeout(() => {
                            target.classList.add('superpose-active')
                        }, 50);
                    }
                }
            } else if(event.target.closest('.calendar-navigate-left')) {
                if ($step >= width) {
                    $step -= 320
                }
                event.target.closest('.calendar-inner').querySelector('.calendar-wrapper').style.transform = 'translateX(-'+$step+'px)'
            } else if(event.target.closest('.calendar-navigate-right')) {
                if ($step < $end - width * 2) {
                    $step += 320
                }
                event.target.closest('.calendar-inner').querySelector('.calendar-wrapper').style.transform = 'translateX(-'+$step+'px)'
            } else if(event.target.classList.contains('date-is-disponible')){

                let date = event.target.dataset.period
                let dateShow = event.target.dataset.show
                let dispoClosest = event.target.closest('.atypikhouse-search-dispo')

                if (event.target.closest(".search-departure-date")) {
                    let dateArrival = dispoClosest.querySelector(".search-arrival-date>label").dataset.period
                    let dates = []
                    let $response = []
                    let theDate = new Date(dateArrival)
                    while (theDate < new Date(date)) {
                        dates.push(theDate.setDate(theDate.getDate() + 1))
                    }
                    dates.forEach(element => {
                        $year = new Date(element).getFullYear()
                        $month = new Date(element).getMonth() + 1
                        $day = new Date(element).getDate()
                        $month < 10 ? $month = "0"+$month : "";
                        $day < 10 ? $day = "0"+$day : "";
                        var finalDate = $year+"-"+$month+"-"+$day
                        if (dispoClosest.querySelector('[data-period="'+finalDate+'"]').classList.contains("date-isnot-disponible")) {
                            $response = [true]
                        }
                    })
                    if (new Date(dateArrival) > new Date(date) || dateArrival == date || $response.length > 0) {
                        return
                    }
                }


                selected = event.target.closest('.target-data').classList.contains("search-arrival-date") ? "date-arrival-selected" : 'date-departure-selected';
                search = event.target.closest('.target-data').classList.contains("search-arrival-date") ? "search-arrival-date" : 'search-departure-date';
                reverse = event.target.closest('.target-data').classList.contains("search-arrival-date") ? 'search-departure-date' : "search-arrival-date";

                dispoClosest.querySelectorAll("."+search+" .date-is-disponible", true).forEach(element => {
                    element.classList.remove(selected)
                });

                event.target.closest('.date-is-disponible').classList.toggle(selected)

                dispoClosest.querySelector("."+search+' .calendar').classList.remove('superpose-active')
                setTimeout(() => {
                    dispoClosest.querySelector("."+search+' .calendar').classList.add('d-none')
                }, 200);

                targetDateClosest.querySelector('label').innerHTML = dateShow
                targetDateClosest.querySelector('label').dataset.period = date

                let generalCalendar = dispoClosest.querySelector("."+search+" .general-calendar").innerHTML 
                dispoClosest.querySelector("."+reverse+" .general-calendar").innerHTML = generalCalendar
                dispoClosest.querySelector(".search-arrival-date .general-calendar").innerHTML = ""
                dispoClosest.querySelector(".search-arrival-date .general-calendar").classList.contains("d-none") ? "" : dom(".search-arrival-date .general-calendar").classList.add("d-none");

                if (search == "search-arrival-date") {
                    target = dispoClosest.querySelector("."+reverse).querySelector('.superpose')
                    target.classList.remove('d-none')
                    setTimeout(() => {
                        target.classList.add('superpose-active')
                    }, 50);
                }

            } else if(event.target.closest('.travelers input')){
                let travelers = event.target.closest('.nb-travelers')
                    adult = travelers.querySelector('#traveler-adult').value
                    children = travelers.querySelector('#traveler-children').value
                    baby = travelers.querySelector('#traveler-baby').value
                    animal = travelers.querySelector('#traveler-animal').value
                total = parseInt(adult) + parseInt(children) + parseInt(baby) + parseInt(animal)
                let tr = "voyageurs";
                (total > 1) ? tr = "voyageurs" : tr = "voyageur";
                travelers.querySelector('label').innerHTML = total+' '+tr
            } else if(event.target.classList.contains('btn-search')){
                let form = event.target.closest('.module-search-wrapper')
                    adult = form.querySelector('#traveler-adult').value
                    children = form.querySelector('#traveler-children').value
                    baby = form.querySelector('#traveler-baby').value
                    animal = form.querySelector('#traveler-animal').value
                    arrival = form.querySelector('.search-arrival-date>label').dataset.period
                    departure = form.querySelector('.search-departure-date>label').dataset.period
                    arrival ? arrival = arrival : arrival = '';
                    departure ? departure = departure : departure = '';
                    form.querySelector('.search-place').querySelector('label') != "" ? place = form.querySelector('.search-place').querySelector('label') .innerHTML : place = form.querySelector('.search-place').querySelector('label') .innerHTML;
                    form.querySelector('.search-place-input') ? place = form.querySelector('.search-place-input').value : place = form.querySelector('.search-place').querySelector('label').innerHTML;
                    
                window.location.href= '/search?place='+place+'&arrival='+arrival+'&departure='+departure+'&adult='+adult+'&children='+children+'&baby='+baby+'&animal='+animal
            } else if(event.target.classList.contains('edit-reservation-date')){
                let elClosest = event.target.closest('.product-form-checkout')
                let form = dom('.product-form-check')
                form.classList.remove('d-none')
                elClosest.classList.add('d-none')
            } else if(event.target.classList.contains("list-location-item")){
                let closest = event.target.closest(".search-place")
                closest.querySelector('label').innerHTML = event.target.innerHTML
                closest.querySelector('ul').remove()
            }
        }
    }
    })




    dom('html, body').addEventListener("mousemove", event => {
        let targetCalendar = event.target.closest('.atypikhouse-search-dispo')
        if (targetCalendar) {
            if(!targetCalendar.querySelector('.date-arrival-selected')){
               return 
            } 


            if (event.target.closest('.date-is-disponible')) {
                let startDate = targetCalendar.querySelector('.date-arrival-selected').dataset.period
                let endDate = event.target.closest('.date-is-disponible').dataset.period
                if (startDate) {
                    let dates = []
                    let theDate = new Date(startDate)
                    while (theDate < new Date(endDate)) {
                        dates.push(theDate.setDate(theDate.getDate() + 1))
                    }
                    let dismissBg = targetCalendar.querySelectorAll('.date-is-disponible')
                    dismissBg.forEach(element => {
                        if (element.classList.contains('bg-c5')) {
                            element.classList.remove('bg-c5')
                        }
                    });
                    dates.forEach(element => {
                        $year = new Date(element).getFullYear()
                        $month = new Date(element).getMonth() + 1
                        $day = new Date(element).getDate()
                        $month < 10 ? $month = "0"+$month : "";
                        $day < 10 ? $day = "0"+$day : "";
                        var finalDate = $year+"-"+$month+"-"+$day
                        if (targetCalendar.querySelector('[data-period="'+finalDate+'"]').classList.contains("date-is-disponible")) {
                            targetCalendar.querySelector('[data-period="'+finalDate+'"]').classList.add("bg-c5")
                        }
                        
                    })
                }
            }

        }
    })

    dom('html, body').addEventListener('keyup', event => {
        if (event.target) {
              if (event.target.className == "search-place-input" || event.target.className == "seach-location") {
                text = event.target.value
                let closestHost = event.target.closest(".host-wrapper")
                if (dom(".search-place > ul")) {
                    dom(".search-place > ul").remove()
                }
                var requestOptions = {
                    method: 'GET',
                  };   
                if (event.target.value.length >= 3) {         
                fetch("https://api.geoapify.com/v1/geocode/autocomplete?text="+text+"&lang=fr&limit=10&apiKey=a62343cecdbe4c1d8576e33086719fa7", requestOptions)
                .then(response => response.json())
                .then(result => {
                    if (dom(".search-place>ul")) {
                        let ul = dom(".search-place>ul")
                    } else {
                        let search = dom(".search-place")
                            ul = document.createElement('ul')
                            ul.setAttribute('class', 'list-location search-location')
                            search.appendChild(ul)
                    }
                    result.features.forEach(feature => {
                        if (feature.properties.city && feature.properties.state) {
                            li = document.createElement('li')
                            li.setAttribute('class', 'list-location-item')
                            if (event.target.className == "seach-location") {
                                let closestForm = event.target.closest(".form-row")
                                    country = closestForm.querySelector('#dwelling_country')
                                if (country && country.value!="") {
                                    let value = country.value
                                    if (feature.properties.country == country.querySelector('[value="'+value+'"]').innerHTML) {
                                        html = feature.properties.city + ', ' + feature.properties.state + ', ' + feature.properties.country
                                        li.setAttribute('data-city', feature.properties.city)
                                        li.setAttribute('data-state', feature.properties.state)
                                        li.setAttribute('data-lon', feature.properties.lon)
                                        li.setAttribute('data-lat', feature.properties.lat)
                                        li.innerHTML = html
                                        ul.appendChild(li)
                                    }
                                }
                            } else {
                                html = feature.properties.city + ', ' + feature.properties.state + ', ' + feature.properties.country
                                li.innerHTML = html
                                ul.appendChild(li)
                            }
                        }
                    });
                    console.log(result)
                })
                .catch(error => console.log('error', error));
                } else {
                    if (dom(".search-place > ul")) {
                        dom(".search-place > ul").remove()
                    }
                }
              }
        }
    })
})