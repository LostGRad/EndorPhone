//menu для адаптивності
menu.onclick =function myFunction() {
    var x = document.getElementById('myTopnav');
    if(x.className===  "topnav"){
        x.className += " responsive";
    } else {
        x.className="topnav";
    }
}
/// Старт роботи з модальними вікноми
var modal = document.getElementById("modal");
var dayCounter = document.getElementById("day__counter");
var btn = document.getElementById("joinUs");
var close = document.getElementsByClassName("close")[0];
//відкриття та закриття модального вікна
    btn.onclick = function () {
        modal.style.display = "block";
    }
    close.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
///Валідація по нажатію на кнопку
function validate(phoneNumber,email, content)
{
    validatPhoneNumber(phoneNumber);
    validatEmail(email);
    validateContent(content);
    document.getElementsByClassName("inputName")[0].style.borderColor='green';

}
// перевірка на те чи можна відправляти форму
function vaidatForm() {
        if(validatEmail(email)==true && validatPhoneNumber(phoneNumber)==true){
            return true;
        }
        else{
            return false;
        }
}
//провірка е-мейла
function validatEmail(email) {
    ///RFC 2822 офіційний стандарт
    var filter = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    if(email.value.match(filter))
    {
        email.style.borderColor='green';
        return true;
    }
    else
    {
        email.style.borderColor='orange';
        return false;
    }
}
/// проста перевірка на діапазон знаків від 10 до 12
function validatPhoneNumber(number){
    if((number.value.length)>=10 && (number.value.length<12))
    {
        number.style.borderColor='green';
        return true;
    }
    else {
        number.style.borderColor='orange';
        return false;
    }
}
function validateContent(content) {
    if((content.value.length)>2)
    {
        content.style.borderColor='green';
        return true;
    }
    else {
        content.style.borderColor='orange';
        return false;
    }
}
///////////////////////////

//   Google Maps.
var map;
// Функція initMap яка отрисує карту на сторінці
function initMap() {

	// В змінної map створюємо об'єкт карти GoogleMaps і вішаємо цю змінну на <div id="map"></div>
	map = new google.maps.Map(document.getElementById('map'), {
        // При створенні об'єкта карти необхідно вказати його властивості
        // center - визначаємо точку на якій карта буде центруватися
		center: {lat: 48.2716174, lng: 25.943774},
		// zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
		zoom: 18,

		// Добавляємо стилі
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#000000"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
        	});

	// Створюємо маркер
	var marker = new google.maps.Marker({

		// позиція маркера
	    position: {lat: 48.2716174, lng: 25.943774},

	    // Вказуємо на якій карті маркер появиться.
	    map: map,

	    // Назва маркера
	    title: 'Наш маркер: ОЦ "КВАДРАТ"',

	    // адрес до картинки
	    icon: 'img/marker.png'
	});

	// Створюємо інформаційне наповнення
	var contentString = '<div id="content">'+
	      '<div id="siteNotice">'+
	      '</div>'+
	      '<h1 id="firstHeading" class="firstHeading">ОЦ "Квадрат"</h1>'+
	      '<div id="bodyContent">'+
	      '<p>Налаштовував даний скріпт Курик Микола Володимирович' +
	      '</p>'+
	      '<p><b>Веб-сайт:</b> <a href="http://fast-sell.com.ua/">fast-sell.com.ua</a>'+
	      '</p>'+
	      '</div>'+
	      '</div>';

	// Створюємо інформаційне вікно
	var infowindow = new google.maps.InfoWindow({
	   content: contentString,
	   maxWidth: 400
	});

	//  при натисканні на маркер - відкриваємо інфо-вікно infowindow
	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});

}
