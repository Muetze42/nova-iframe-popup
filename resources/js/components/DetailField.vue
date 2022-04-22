<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <Iframe
                @click.stop
                :link="field.value"
                :containerClass="field.containerClass+' '+field.containerClassDetail"
                :btnClass="field.btnClass"
                :icon="field.icon"
                :faIcon="field.faIcon"
                :preText="field.preText"
                :sufText="field.sufText"
            />
        </template>
    </PanelItem>
</template>

<script>
import Iframe from './Iframe'

export default {
    props: ['resourceName', 'field'],
    components: {
        Iframe,
    },
}
</script>
