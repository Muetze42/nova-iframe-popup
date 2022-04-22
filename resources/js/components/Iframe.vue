<template>
    <div class="iframe-popup" :class="containerClass">
        <button @click="show" type="button" :class="btnClass">
            {{ preText }}
            <Icon v-if="icon && !faIcon" :type="icon"/>
            <i v-if="faIcon" :class="faIcon"></i>
            {{ sufText }}
        </button>
        <div class="iframe-popup-wrapper" @click="hide" v-if="open">
            <iframe class="iframe-popup" :src="link"></iframe>
        </div>
    </div>
</template>

<script>
export default {
    name: "Iframe",
    props: [
        'link',
        'icon',
        'faIcon',
        'containerClass',
        'btnClass',
        'preText',
        'sufText',
    ],
    data() {
        return {
            open: false
        };
    },
    methods: {
        show() {
            this.open = true
            this.setBodyOverflow()
        },
        hide() {
            this.open = false
            this.setBodyOverflow()
        },
        setBodyOverflow() {
            let body = document.querySelector('body')
            body.style.overflow = this.open ? 'hidden' : 'visible'
        },
    }
}
</script>

<style scoped>

</style>
