<template>
  <div class="option-container">
    <h1>{{ msg }}</h1>
    <el-radio class="radio" v-model="radio" label="1">Sex (Option 1)</el-radio>
    <el-radio class="radio" v-model="radio" label="2">Lies (Option 2)</el-radio>
    <el-radio class="radio" v-model="radio" label="3">Videotape (Option 3)</el-radio>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        msg: 'Welcome to "resources/js/components/Example.vue"',
        radio: '1'
      }
    }
  }
</script>
<style scoped>
  .option-container {
    padding: 20px 0px;
  }
</style>
