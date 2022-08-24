dom('html, body').addEventListener('click', event => {
    if (event.target) {
        if (event.target.id == "delete-pic-dwelling") {
            let closest = event.target.closest('.card-pic-dwelling')
                closest.remove()
            $data = ""
            dom('.inner-pic img', true)
            .forEach((element, index, count) => {
                $add = ","
                if (index == count.length -1) {
                    $add = ""
                }
                $data += element.dataset.picName+$add
            });
            dom('[name="stock_pic"]').value = $data
        }
    }
})