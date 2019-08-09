<template>

<div class="tw-container bg-blue-500">
    <div class="tw-min-h-screen tw-flex tw-mb-4">
        <div class="tw-w-full md:tw-w-3/5">
            <div class="tw-mb-8">
                <h2 class="tw-font-bold tw-text-5xl">Contact Us</h2>
            </div>
            <div class="tw-text-dig bg-blue-500">
                <div class="tw-w-full">

                    <form @submit.prevent="submit" class="tw-max-w-md tw-mb-4 form-input">
                        <div class="form-group tw-mb-4">
                            <label class="tw-block tw-text-gray-600 tw-text-sm tw-font-bold tw-mb-2" for="name">Name</label>
                            <div v-if="errors && errors.name" class="tw-bg-red-200">{{ errors.name[0] }}</div>
                            <input type="text" class="tw-shadow appearance-none tw-border tw-rounded tw-w-full tw-h-12 tw-py-2 tw-px-3 tw-text-gray-600 tw-leading-tight focus:outline-none focus:tw-shadow-outline form-control" name="name" id="name" placeholder="your name" v-model="fields.name" />
                        </div>

                        <div class="form-group tw-mb-4">
                            <label class="tw-block tw-text-gray-600 tw-text-sm tw-font-bold tw-mb-2" for="email">Email</label>
                            <div v-if="errors && errors.email" class="tw-bg-red-200">{{ errors.email[0] }}</div>
                            <input type="text" class="tw-shadow appearance-none tw-border tw-rounded tw-h-12 tw-w-full tw-py-2 tw-px-3 tw-text-gray-600 tw-mb-3 tw-leading-tight focus:outline-none focus:tw-shadow-outline form-control" name="email" id="email" placeholder="your email" v-model="fields.email" />
                        </div>

                        <div class="form-group tw-mb-4">
                            <label class="tw-block tw-text-gray-600 tw-text-sm tw-font-bold tw-mb-2" for="message">Message</label>
                            <div v-if="errors && errors.message" class="tw-bg-red-200">{{ errors.message[0] }}</div>
                            <textarea class="tw-shadow appearance-none tw-border tw-rounded tw-h-48 tw-w-full tw-py-2 tw-px-3 tw-text-gray-600 tw-mb-3 tw-leading-tight focus:outline-none focus:tw-shadow-outline form-control" name="message" id="message" placeholder="your message" type="text" rows="5" v-model="fields.message"></textarea>
                        </div>

                        <div v-if="success" class="tw-text-2xl tw-font-bold tw-my-4 alert alert-success">Message sent! We'll get back to you shortly.</div>
                        <div class="tw-flex tw-items-center tw-justify-between">
                            <button type="submit" class="tw-bg-blue-500 hover:tw-bg-blue-400 tw-text-white tw-font-bold tw-w-full tw-h-12 tw-py-2 tw-px-4 tw-rounded focus:outline-none focus:tw-shadow-outline">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
import ContactFormMixin from './ContactFormMixin';
import Router from '../../router';
export default {
  mixins: [ ContactFormMixin ],
  data() {
    return {
      'action': '/contactFormSubmit',
    }
  }
}
</script>
