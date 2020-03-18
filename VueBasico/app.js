Vue.component('CoinDetail', {
    props: ['coin'],

    data(){
        return {
            showPrices: false,
            value: 0,
        }
    },


    created() {
        console.log('created de CoinDetail...')
    },


    mounted() {
        console.log('mounted de CoinDetail...')
    },

    methods: {
        toggleShowPrices() {
            this.showPrices = !this.showPrices;

            this.$emit('change-color', 
                this.showPrices ? 'FF96C8' : '3D3D3D')
        }
    },

    computed: {
        title() {
            return `${this.coin.name} - ${this.coin.symbol}`;
        },

        convertedValue() {
            if (!this.value) {
                return 0;
            }

            return this.value / this.coin.price;
        }
    },
    
    template: `
    <div>
        <img 
            v-on:mouseover="toggleShowPrices" 
            v-on:mouseOut="toggleShowPrices"
            v-bind:src="coin.img" v-bind:alt="coin.name">

        <h1 
            v-bind:class="coin.changePercent > 0 ? 'green' : 'red'">
            {{ title }}
            <span v-if="coin.changePercent > 0"> :) </span>
            <span v-else-if="coin.changePercent < 0"> :( </span>
            <span v-else> :| </span>

            <span v-on:click="toggleShowPrices">
                {{ showPrices? 'Precios': 'Ver precios' }}
            </span>
        </h1>

        <input type="number" v-model="value">
        <span>{{ convertedValue }}</span>

        <slot name="text"></slot>
        <slot name="link"></slot>

        <ul v-show="showPrices">
            <li 
            class="uppercase"
            v-bind:class="{ orange: p.valor == coin.price, red: p.valor < coin.price, green: p.valor > coin.price }"
            v-for="(p, i) in coin.pricesWithDays" 
            v-bind:key="p.day">
                {{ i }} - {{ p.day }} - {{ p.valor }}
            </li>
        </ul>
    </div>
    `   
})

new Vue({
    el: "#app",
    data: {
        btc: {
            name: 'Bitcoin',
            symbol: 'BTC',
            img: 'https://bitcoin.org/img/icons/opengraph.png?1583780769',
            changePercent: 10,
            price: 8400,
            pricesWithDays: [
                { day: 'Lunes', valor: 8400 },
                { day: 'Martes', valor: 7900 },
                { day: 'Miercoles', valor: 8200 },
                { day: 'Jueves', valor: 9000 },
                { day: 'Viernes', valor: 9400 },
                { day: 'Sabado', valor: 10000 },
                { day: 'Domingo', valor: 10200 }
            ],
        },

        color: '#f4f4f4',
    },

    created() {
        console.log('created...')
    },
    

    mounted() {
        console.log('mounted...')
    },

    methods: {
        updateColor(color){
           this.color = color || this.color
           .split('')
           .reverse()
           .join('')
        }
    }
});