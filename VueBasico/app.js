new Vue({
    el: "#app",
    data: {
        name: 'Bitcoin',
        symbol: 'BTC',
        img: 'https://bitcoin.org/img/icons/opengraph.png?1583780769',
        changePercent: 10,

        value: 0,

        color: '#f4f4f4',

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

    computed: {
        title (){
            return `${this.name} - ${this.symbol}`;
        },

        convertedValue (){
            if(!this.value){
                return 0;
            }

            return this.value /this.price;
        }
    },

    watch: {
        showPrices(newVal, oldVal){
            console.log(newVal, oldVal)
        }
    },

    methods: {
        toggleShowPrices(){
            this.showPrices = !this.showPrices;

            this.color = this.color.split('')
            .reverse().join('')
        }
    }
});