<template>
  <template v-if="isSent">
    <feedback />
  </template>
  <div class="sm:grid sm:grid-cols-6 sm:gap-16 lg:gap-20">
    <div class="sm:col-span-3 bg-white">
      <card-single />
    </div>
    <div class="sm:col-span-3 bg-white">
      <card-group />
    </div>
  </div>
  <form>
    <div v-if="validationErrors.length > 0">
      <validation-errors :validationErrors="validationErrors" />
    </div>
    <div class="flex flex-col gap-y-8 mt-24 xl:mt-32">
      <template v-if="form.member_type == 'Institution'">
        <form-input 
          type="text" 
          v-model="form.institution" 
          placeholder="Institution"
          :error="errors.institution"
          @focus="removeError('institution')">
        </form-input>
      </template>
      <template v-else>
        <form-input 
          type="text" 
          v-model="form.firstname" 
          placeholder="Vorname"
          :error="errors.firstname"
          @focus="removeError('firstname')">
        </form-input>
        <form-input 
          type="text" 
          v-model="form.name" 
          placeholder="Name"
          :error="errors.name"
          @focus="removeError('name')">
        </form-input>
      </template>
      <form-input 
        type="text" 
        v-model="form.street" 
        placeholder="Strasse, Nr."
        :error="errors.street"
        @focus="removeError('street')">
      </form-input>
      <template v-if="form.member_type == 'Institution'">
        <form-input 
          type="text" 
          v-model="form.additional_address" 
          placeholder="Adresszusatz">
        </form-input>
      </template>
      <form-input 
        type="text" 
        v-model="form.location" 
        placeholder="PLZ, Ort"
        :error="errors.location"
        @focus="removeError('location')">
      </form-input>
      <form-input 
        type="email" 
        v-model="form.email" 
        placeholder="E-Mail"
        :error="errors.email"
        @focus="removeError('email')">
      </form-input>
      <form-input 
        type="tel" 
        v-model="form.phone" 
        placeholder="Telefon">
      </form-input>
      <form-input 
        type="text" 
        v-model="form.occputation" 
        placeholder="Beruf / Ausbildung">
      </form-input>
      <form-group class="flex justify-end w-full">
        <button 
          :class="[isLoading ? 'bg-silver pointer-events-none select-none' : '', 'bg-white text-sm xl:text-md text-black py-6 px-10 leading-none inline-flex items-center w-auto text-left']"
          type="button"
          @click.prevent="submit('member')">
          absenden
        </button>
      </form-group>
    </div>
  </form>
</template>
<script>
import FormCheckbox from '@/form/components/form/Checkbox.vue';
import FormGroup from '@/form/components/form/Group.vue';
import FormInput from '@/form/components/form/Input.vue';
import ValidationErrors from '@/form/components/form/ValidationErrors.vue';
import Feedback from '@/form/components/form/Feedback.vue';
import CardSingle from '@/form/components/cards/Single.vue';
import CardGroup from '@/form/components/cards/Group.vue';

export default {

  components: {
    FormGroup,
    FormInput,
    FormCheckbox,
    ValidationErrors,
    Feedback,
    CardSingle,
    CardGroup
  },

  data() {

    return {

      form: {
        member_type: 'Student:in',
        institution: null,
        firstname: null,
        name: null,
        street: null,
        additional_address: null,
        location: null,
        phone: null,
        occputation: null,
        email: null,
      },

      errors: {
        institution: null,
        firstname: null,
        name: null,
        email: null,
        street: null,
        location: null,
        phone: null,
        occputation: null,
      },

      validationErrors: [],

      routes: {
        store: '/api/register'
      },

      isSent: false,
      isLoading: false,
    }
  },

  methods: {

    submit() {
      this.isSent = false;
      this.isLoading = true;
      this.validationErrors = [];
      this.axios.post(this.routes.store, this.form).then(response => {
        this.reset();
        this.isSent = true;
        this.isLoading = false;
      })
      .catch(error => {
        this.isLoading = false;
        this.handleValidationErrors(error.response.data);
      });
    },

    handleValidationErrors(data) {
      let errors = [];
      for (let key in data.errors) {
        this.validationErrors.push(
          data.errors[key][0]
        );
        this.errors[key] = true;
      }
    },

    removeError(field) {
      this.errors[field] = null;
      this.validationErrors = [];
    },

    reset() {
      this.form = {

      };
      this.errors = {};
      this.validationErrors = [];
      this.isSent = false;
    },
  },
}
</script>