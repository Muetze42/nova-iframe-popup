<template>
    <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
        <template #field>
            <Iframe
                @click.stop
                :link="field.value"
                :containerClass="field.containerClass+' '+field.containerClassForm"
                :btnClass="field.btnClass"
                :icon="field.icon"
                :faIcon="field.faIcon"
                :preText="field.preText"
                :sufText="field.sufText"
            />
        </template>
    </DefaultField>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'
import Iframe from "./Iframe";

export default {
    mixins: [FormField, HandlesValidationErrors],
    props: ['resourceName', 'resourceId', 'field'],
    components: {
        Iframe,
    },
    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },
    },
}
</script>
