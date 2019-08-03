<template>
<div>
    <i-switch v-model="switch1" @on-change="change" />
    <i-switch size="large" @on-change="changeSwitchValue">
        <span slot="open">ON</span>
        <span slot="close">OFF</span>
    </i-switch>

    <i-switch :disabled="disabled" />
    <Button type="primary" @click="disabled = !disabled">Toggle Disabled</Button>

</div>
</template>
<script>
    export default {
        data () {
            return {
                switch1: false,
                disabled: true,
            }
        },
        methods: {
            change (status) {
                this.$Message.info('Status：' + status);
            },
            changeSwitchValue (status) {
                console.log(status);
            },
        }
    }
</script>
