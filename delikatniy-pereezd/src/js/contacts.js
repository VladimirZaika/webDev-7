import './modules/customselect'
import './modules/tel-mask'
import './modules/contacts-form'

let mapPetersburg = document.getElementById('map-petersburg');

ymaps.ready(function () {
    var newMapPetersburg = new ymaps.Map('map-petersburg', {
            center: [59.894671, 30.314763],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        }),

        delMovOffice = new ymaps.Placemark([59.894671, 30.314763], {
            hintContent: 'Офис',
			balloonContent: 'Офис'
        }, {
            iconLayout: 'default#image',
			iconImageHref: 'http://tech.3.serverdev.ru/wp-content/uploads/2021/05/office-icon.png',
            iconImageSize: [38, 48],
            iconImageOffset: [-17, -70]
        }),

        delMovWarehouse = new ymaps.Placemark([59.843842, 30.122012], {
            hintContent: 'Склад',
			balloonContent: 'Склад'
        }, {
            iconLayout: 'default#image',
			iconImageHref: 'http://tech.3.serverdev.ru/wp-content/uploads/2021/05/warehouse-icon.png',
            iconImageSize: [38, 48],
            iconImageOffset: [-17, -70]
        });

		newMapPetersburg.geoObjects
        .add(delMovOffice)
        .add(delMovWarehouse)
});