import Placess from './modules/Placess'
import Map from './modules/Map'
import 'slick-carousel'
import 'slick-carousel/slick/slick.css'
import 'slick-carousel/slick/slick-theme.css'

Map.init()
Placess.init()

global.$ = global.jQuery = $;
require('../css/app.css');
require('select2')

$('select').select2()
var $contactButton = $('#contactButton')
$contactButton.click(e => {
    e.preventDefault()
    $('#contactForm').slideDown();
    $contactButton.slideUp();
})

$('[data-slider]').slick()
//Suppression des images

document.querySelectorAll('[data-delete]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault()
        fetch(a.getAttribute('href'), {
            method: 'DELETE',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({'_token': a.dataset.token})
        }).then(response => response.json())
          .then(data => {
              if(data.success){
                a.parentNode.parentNode.removeChild(a.parentNode)
              }else {
                  alert(data.error)
              }
          })
          .catch(e => alert(e))
    })
})

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
