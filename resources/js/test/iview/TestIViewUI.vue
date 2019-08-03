<template>
  <div id="app">
    <div>
      <modal-example></modal-example>
    </div>
    <div>
      <drawer-example></drawer-example>
    </div>
    <div>
      <switch-example></switch-example>
    </div>
    <div>
      <progress-example></progress-example>
    </div>
    <div>
      <select-example></select-example>
    </div>
    <div>
      <slider-example></slider-example>
    </div>

  </div>
</template>
<script>
  import ModalExample from './iview_component_examples/ModalExample.vue';
  import DrawerExample from './iview_component_examples/DrawerExample.vue';
  import ProgressExample from './iview_component_examples/ProgressExample.vue';
  import SwitchExample from './iview_component_examples/SwitchExample.vue';
  import SelectExample from './iview_component_examples/SelectExample.vue';
  import SliderExample from './iview_component_examples/SliderExample.vue';

  export default {
    name: 'app',
    data () {
      return {
      }
    },
    components: {
      ModalExample,
      DrawerExample,
      ProgressExample,
      SwitchExample,
      SelectExample,
      SliderExample,
    }
  };
</script>
<style scoped>
  /* Add scoped styles */
  #app {
    padding: 20px;
  }
</style>
