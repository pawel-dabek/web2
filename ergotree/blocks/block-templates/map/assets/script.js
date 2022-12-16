/* eslint-disable no-shadow */
/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

const mapStyle = [
  {
    featureType: 'water',
    elementType: 'geometry',
    stylers: [
      {
        color: '#e9e9e9',
      },
      {
        lightness: 17,
      },
    ],
  },
  {
    featureType: 'landscape',
    elementType: 'geometry',
    stylers: [
      {
        color: '#f5f5f5',
      },
      {
        lightness: 20,
      },
    ],
  },
  {
    featureType: 'road.highway',
    elementType: 'geometry.fill',
    stylers: [
      {
        color: '#ffffff',
      },
      {
        lightness: 17,
      },
    ],
  },
  {
    featureType: 'road.highway',
    elementType: 'geometry.stroke',
    stylers: [
      {
        color: '#ffffff',
      },
      {
        lightness: 29,
      },
      {
        weight: 0.2,
      },
    ],
  },
  {
    featureType: 'road.arterial',
    elementType: 'geometry',
    stylers: [
      {
        color: '#ffffff',
      },
      {
        lightness: 18,
      },
    ],
  },
  {
    featureType: 'road.local',
    elementType: 'geometry',
    stylers: [
      {
        color: '#ffffff',
      },
      {
        lightness: 16,
      },
    ],
  },
  {
    featureType: 'poi',
    elementType: 'geometry',
    stylers: [
      {
        color: '#f5f5f5',
      },
      {
        lightness: 21,
      },
    ],
  },
  {
    featureType: 'poi.park',
    elementType: 'geometry',
    stylers: [
      {
        color: '#dedede',
      },
      {
        lightness: 21,
      },
    ],
  },
  {
    elementType: 'labels.text.stroke',
    stylers: [
      {
        visibility: 'on',
      },
      {
        color: '#ffffff',
      },
      {
        lightness: 16,
      },
    ],
  },
  {
    elementType: 'labels.text.fill',
    stylers: [
      {
        saturation: 36,
      },
      {
        color: '#333333',
      },
      {
        lightness: 40,
      },
    ],
  },
  {
    elementType: 'labels.icon',
    stylers: [
      {
        visibility: 'off',
      },
    ],
  },
  {
    featureType: 'transit',
    elementType: 'geometry',
    stylers: [
      {
        color: '#f2f2f2',
      },
      {
        lightness: 19,
      },
    ],
  },
  {
    featureType: 'administrative',
    elementType: 'geometry.fill',
    stylers: [
      {
        color: '#fefefe',
      },
      {
        lightness: 20,
      },
    ],
  },
  {
    featureType: 'administrative',
    elementType: 'geometry.stroke',
    stylers: [
      {
        color: '#fefefe',
      },
      {
        lightness: 17,
      },
      {
        weight: 1.2,
      },
    ],
  },
];

function DCGMapInit(element = document) {
  const mapElement = element.querySelector('.map-wrapper');
  const locationXXX = { lat: 31.09635, lng: 12.02504 };
  const mapOptions = {
    zoom: 13.5,
    center: locationXXX,
    styles: mapStyle,
    disableDefaultUI: true,
  };
  const map = new google.maps.Map(mapElement, mapOptions);

  const marker = new google.maps.Marker({
    position: locationXXX,
    map,
    url: 'https://g.page/',
    icon: '/wp-content/themes/ergotree/assets/img/pin.svg',
    title: 'XXX - Centrum Medyczne',
  });

  google.maps.event.addListener(marker, 'click', () => {
    window.open(marker.url);
  });
}

function init_map(element = document) {
  function addScript() {
    const mapScript = document.createElement('script');
    document.head.appendChild(mapScript);
    mapScript.id = 'maps-script';
    mapScript.setAttribute(
      'src',
      'https://maps.googleapis.com/maps/api/js?key=xxx&callback=DCGMapInit'
    );

    ['mouseover', 'click', 'keydown', 'touchmove', 'scroll'].forEach((evt) =>
      window.removeEventListener(evt, addScript)
    );
  }

  ['mouseover', 'click', 'keydown', 'touchmove', 'scroll'].forEach((evt) =>
    window.addEventListener(evt, addScript, { once: true })
  );
}

document.addEventListener('DOMContentLoaded', () => {
  init_map();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=map', (el) => {
    if (
      !!el[0].querySelector('.map') &&
      !el[0].querySelector('.map').classList.contains('block-js-added')
    ) {
      if (document.querySelector('#maps-script')) {
        DCGMapInit(el[0]);
      }
      el[0].querySelector('.map').classList.add('block-js-added');
    }
  });
}
/* -- Admin JS END -- */
