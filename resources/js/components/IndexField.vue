<template>
        <Iframe
            @click.stop
            :link="field.value"
            :containerClass="field.containerClass+' '+field.containerClassIndex"
            :btnClass="field.btnClass"
            :icon="field.icon"
            :faIcon="field.faIcon"
            :preText="field.preText"
            :sufText="field.sufText"
        />
</template>

<script>
import Iframe from './Iframe'

export default {
    props: ['resourceName', 'field'],
    components: {
        Iframe,
    },
    computed: {
        /**
         * Determine if the field has a value other than null.
         */
        hasValue() {
            return this.field.value !== null
        },
    },
}
</script>
