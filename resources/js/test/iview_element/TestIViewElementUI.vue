<template>
  <div id="app">

IVIEW UI EXAMPLES
    <div>
      <iview-modal-example></iview-modal-example>
    </div>
    <div>
      <iview-drawer-example></iview-drawer-example>
    </div>
    <div>
      <iview-switch-example></iview-switch-example>
    </div>
    <div>
      <iview-progress-example></iview-progress-example>
    </div>
    <div>
      <iview-select-example></iview-select-example>
    </div>
    <div>
      <iview-slider-example></iview-slider-example>
    </div>

ELEMENT UI EXAMPLES
    <element-example></element-example>

    <h2>Here's an example of a modal / dialog without abstracting it into a component:</h2>
    <el-button @click="visible = true">Click to open me</el-button>
    <el-dialog :visible.sync="visible" title="Hello world">
      <p>You Should Try Element (This is in /resources/js/App.vue)</p>
    </el-dialog>
    <element-slider-example></element-slider-example>
    <element-progress-example></element-progress-example>
    <element-steps-example></element-steps-example>
    <element-notification-example></element-notification-example>
    <element-message-box-example></element-message-box-example>

    <div style="width: 50%">
      <element-accordion-example></element-accordion-example>
    </div>
    <div style="width: 50%">
      <element-timeline-example></element-timeline-example>
    </div>
    <div style="width: 50%">
      <element-tooltip-example></element-tooltip-example>
    </div>
    <div style="width: 50%">
      <element-dialog-example></element-dialog-example>
    </div>

  </div>
</template>
<script>
  import IviewModalExample from './iview_element_component_examples/IViewModalExample.vue';
  import IviewDrawerExample from './iview_element_component_examples/IViewDrawerExample.vue';
  import IviewProgressExample from './iview_element_component_examples/IViewProgressExample.vue';
  import IviewSwitchExample from './iview_element_component_examples/IViewSwitchExample.vue';
  import IviewSelectExample from './iview_element_component_examples/IViewSelectExample.vue';
  import IviewSliderExample from './iview_element_component_examples/IViewSliderExample.vue';


  import ElementExample from './iview_element_component_examples/ElementExample.vue';
  import ElementSliderExample from './iview_element_component_examples/ElementSliderExample.vue';
  import ElementProgressExample from './iview_element_component_examples/ElementProgressExample.vue';
  import ElementStepsExample from './iview_element_component_examples/ElementStepsExample.vue';
  import ElementNotificationExample from './iview_element_component_examples/ElementNotificationExample.vue';
  import ElementMessageBoxExample from './iview_element_component_examples/ElementMessageBoxExample.vue';
  import ElementAccordionExample from './iview_element_component_examples/ElementAccordionExample.vue';
  import ElementTimelineExample from './iview_element_component_examples/ElementTimelineExample.vue';
  import ElementTooltipExample from './iview_element_component_examples/ElementTooltipExample.vue';
  import ElementDialogExample from './iview_element_component_examples/ElementDialogExample.vue';

  export default {
    name: 'app',
    data () {
      return {
        visible: false,
      }
    },
    components: {
      // iView UI
      IviewModalExample,
      IviewDrawerExample,
      IviewProgressExample,
      IviewSwitchExample,
      IviewSelectExample,
      IviewSliderExample,

      // Element UI
      ElementExample,
      ElementSliderExample,
      ElementProgressExample,
      ElementStepsExample,
      ElementNotificationExample,
      ElementMessageBoxExample,
      ElementAccordionExample,
      ElementTimelineExample,
      ElementTooltipExample,
      ElementDialogExample,
    }
  };
</script>
<style scoped>
  /* Add scoped styles */
  #app {
    padding: 20px;
  }
</style>
