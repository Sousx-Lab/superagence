import Leaflet from 'leaflet'
import 'leaflet/dist/leaflet.css'

export default class Map {

    static init(){
        let map = document.querySelector('#map')
        if(map === null){
            return
        }
        let icon = L.icon({
            iconUrl: '/img/marker-icon.png',
        })
        let center = [map.dataset.lat, map.dataset.lng]
        map = L.map('map').setView([map.dataset.lat, map.dataset.lng], 13)
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{
            maxZoom: 18,
            minZoom: 12,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map)
        L.marker(center, {icon: icon}).addTo(map)
    }
}