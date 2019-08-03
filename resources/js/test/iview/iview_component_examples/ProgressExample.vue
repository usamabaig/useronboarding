<template>
    <div>
        <Progress :percent="25" />
        <Progress :percent="45" status="active" />
        <Progress :percent="65" status="wrong" />
        <Progress :percent="100" />
        <Progress :percent="25" hide-info />

        <Progress :percent="percent" />
        <ButtonGroup size="large">
            <Button icon="ios-add" @click="add"></Button>
            <Button icon="ios-remove" @click="minus"></Button>
        </ButtonGroup>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                percent: 0
            }
        },
        methods: {
            add () {
                if (this.percent >= 100) {
                    return false;
                }
                this.percent += 10;
            },
            minus () {
                if (this.percent <= 0) {
                    return false;
                }
                this.percent -= 10;
            }
        }
    }
</script>
