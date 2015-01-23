if (window.ymaps) {
  ymaps.ready(init);
  var myMap;

  function init(){     
    myMap = new ymaps.Map("map", {
      center: [54.29, 48.22],
      zoom: 7,
      controls: ['searchControl']
    });
    var objects = [[54.29, 48.22],[55.47, 49.06]];
    objects.map(function (item) {
      var myPlacemark = new ymaps.Placemark(item, {
        hintContent: ''
      }, {
        iconLayout: 'default#image',
        iconImageHref: '/assets/images/placeholder.png',
        iconImageSize: [30, 42],
        iconImageOffset: [-3, -42]
      }); 
      myMap.geoObjects.add(myPlacemark);
    })
  }
}
