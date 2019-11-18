import Places from 'places.js'

export default class Placess {

    static init() {
        let inputAddress = document.querySelector('#property_address')
        if (inputAddress !== null) {
            let place = Places({
                container: inputAddress
            })
            place.on('change', e => {
                document.querySelector('#property_city').value = e.suggestion.city
                document.querySelector('#property_postal_code').value = e.suggestion.postcode
                document.querySelector('#property_lat').value = e.suggestion.latlng.lat
                document.querySelector('#property_lng').value = e.suggestion.latlng.lng
            })
        }
        let seachAddress = document.querySelector('#seach_address')
        if (seachAddress !== null) {
            let place = Places({
                container: seachAddress
            })
            place.on('change', e => {
                    document.querySelector('#lat').value = e.suggestion.latlng.lat
                    document.querySelector('#lng').value = e.suggestion.latlng.lng
                })
            }
        }
    }