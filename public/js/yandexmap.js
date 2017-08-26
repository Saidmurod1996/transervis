function init() {
        var address = new ymaps.Map("map", {
            center: [41.345517, 69.282607],
            zoom: 14,
            controls: []
        });
        address.geoObjects.add(new ymaps.Placemark([41.345517, 69.282607], {
            balloonContent: 'Наш Офис'
        }, {
            preset: 'islands#redHomeIcon',
            iconColor: '#F44336'
        }));
}

ymaps.ready(init);
