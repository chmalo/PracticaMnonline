new Vue({
    el: "#app",
    data: {
        name: 'Bitcoin',
        img: 'https://bitcoin.org/img/icons/opengraph.png?1583780769',
        changePercent: 10,

        price: 8400,

        pricesWithDays:[
            {day: 'Lunes', valor: 8400},
            {day: 'Martes', valor: 7900},
            {day: 'Miercoles', valor: 8200},
            {day: 'Jueves', valor: 9000},
            {day: 'Viernes', valor: 9400},
            {day: 'Sabado', valor: 10000},
            {day: 'Domingo', valor: 10200}
        ],

        showPrices: false
    },

    methods: {
        toggleShowPrices(){
            this.showPrices = !this.showPrices;
        }
    }
});