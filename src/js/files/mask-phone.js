let element = document.querySelectorAll('.phone');
    let maskOptions = {
        mask: '+{0}(000)000-00-00'
    };
    for (let i = 0; i < element.length; i++){
        let mask = IMask(element[i], maskOptions);
    }

    let sendForm = function(formId, url) {
        let form = document.getElementById(formId);
        let long = form.querySelector('.phone').value; // Ищем в родителе формы поле с классом phone и получаем его значение
        if (long.length > 15){
            console.log('Поле полностью заполнено');
        } else {
            console.log('Поле заполнено не полностью');
        }
        
        let formData = new FormData(form);

        let xhr = new XMLHttpRequest();

        xhr.open("POST", url, true);
        xhr.send(formData);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    alert("Worked!");
                } else {
                    alert(xhr.status + ': ' + xhr.statusText + 'Error');
                }
            }
        };
    };