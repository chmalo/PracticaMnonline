<template>
    <span :class="cssClases" aria-hidden="true"></span>
</template>

<script>
export default {
    props: ['img'],

    computed: {
        cssClases(){
            return 'glyphicon glyphicon-' + this.img;
        }
    },
}
</script>
