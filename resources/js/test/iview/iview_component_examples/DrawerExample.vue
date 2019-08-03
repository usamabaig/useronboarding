<template>
    <div>
        <Button @click="drawerVisible = true" type="primary">Drawer Open</Button>
        <Drawer title="Basic Drawer" :closable="false" v-model="drawerVisible">
            <p>Some contents...</p>
            <p>Some contents...</p>
            <p>Some contents...</p>
        </Drawer>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                drawerVisible: false
            }
        }
    }
</script>
