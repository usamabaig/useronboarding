<template>
    <div>
        <Slider v-model="value1"></Slider>
        <Slider v-model="value2" range></Slider>
        <Slider v-model="value3" range disabled></Slider>
        <Slider v-model="value6" :step="10" show-stops></Slider>
        <Slider v-model="value7" :step="10" show-stops range></Slider>
        <Slider v-model="value8" show-input></Slider>
        <Slider v-model="value9" :tip-format="format"></Slider>
        <Slider v-model="value10" :tip-format="hideFormat"></Slider>

    </div>
</template>
<script>
    export default {
        data () {
            return {
                value1: 25,
                value2: [20, 50],
                value3: [20, 50],
                value6: 30,
                value7: [20, 50],
                value8: 25,
                value9: 25,
                value10: 25,            }
        },
        methods: {
            format (val) {
                return 'Progress: ' + val + '%';
            },
            hideFormat () {
                return null;
            }
        }
    }
</script>
