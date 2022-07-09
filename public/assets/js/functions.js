
function dom($value, $all = false, $bool = false){
    if ($all == false) {
        return document.querySelector($value)
    } else if ($all == true) {
        return document.querySelectorAll($value)
    }
}



function notification(msg, icon) {
    localStorage.setItem('notification-msg', msg)
    localStorage.setItem('notification-icon', icon)
    setTimeout(() => {
        let notMsg = localStorage.getItem('notification-msg')
        let notIcon = localStorage.getItem('notification-icon')
        const str = notIcon.split(' ')
        if (notMsg && notIcon) {
            dom('.notification-icon').classList.add(str[0])
            dom('.notification-icon').classList.add(str[1])
            dom('.notification-msg').innerHTML = notMsg
            setTimeout(() => {
                dom('.notification-card').classList.add('notification-card-active')
            }, 100);
            setTimeout(() => {
                dom('.notification-card').classList.remove('notification-card-active')
                setTimeout(() => {
                    localStorage.removeItem('notification-msg')
                    localStorage.removeItem('notification-icon')
                    dom('.notification-icon').classList.remove(str[0])
                    dom('.notification-icon').classList.remove(str[1])
                    dom('.notification-msg').innerHTML = ""
                }, 1000);
            }, 6000);
        }
        clearTimeout
    }, 500);
}
