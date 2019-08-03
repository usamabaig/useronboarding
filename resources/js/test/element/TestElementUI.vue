<template>
  <div id="elementRoot">
    <example></example>

    <h2>Here's an example of a modal / dialog without abstracting it into a component:</h2>
    <el-button @click="visible = true">Click to open me</el-button>
    <el-dialog :visible.sync="visible" title="Hello world">
      <p>You Should Try Element (This is in /resources/js/App.vue)</p>
    </el-dialog>
    <slider-example></slider-example>
    <progress-example></progress-example>
    <steps-example></steps-example>
    <notification-example></notification-example>
    <message-box-example></message-box-example>

    <div style="width: 50%">
      <accordion-example></accordion-example>
    </div>
    <div style="width: 50%">
      <timeline-example></timeline-example>
    </div>
    <div style="width: 50%">
      <tooltip-example></tooltip-example>
    </div>
    <div style="width: 50%">
      <dialog-example></dialog-example>
    </div>

  </div>
</template>
<script>
  import Example from './element_component_examples/Example.vue';
  import SliderExample from './element_component_examples/SliderExample.vue';
  import ProgressExample from './element_component_examples/ProgressExample.vue';
  import StepsExample from './element_component_examples/StepsExample.vue';
  import NotificationExample from './element_component_examples/NotificationExample.vue';
  import MessageBoxExample from './element_component_examples/MessageBoxExample.vue';
  import AccordionExample from './element_component_examples/AccordionExample.vue';
  import TimelineExample from './element_component_examples/TimelineExample.vue';
  import TooltipExample from './element_component_examples/TooltipExample.vue';
  import DialogExample from './element_component_examples/DialogExample.vue';

  export default {
    name: 'elementRoot',
    data () {
      return {
        visible: false,
      }
    },
    components: {
      Example,
      SliderExample,
      ProgressExample,
      StepsExample,
      NotificationExample,
      MessageBoxExample,
      AccordionExample,
      TimelineExample,
      TooltipExample,
      DialogExample
    }
  };
</script>
<style scoped>
  /* Add scoped styles */
  #elementRoot {
    padding: 20px;
  }
</style>
