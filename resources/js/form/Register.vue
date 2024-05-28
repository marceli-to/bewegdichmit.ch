<template>
  <template v-if="isSent">
    <feedback />
  </template>
  <div class="flex flex-col sm:grid sm:grid-cols-6 gap-16 lg:gap-20">
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
    <div class="mt-20 lg:mt-30">
      <div class="sm:grid sm:grid-cols-12 sm:gap-x-16 lg:gap-x-20 sm:gap-y-16 lg:gap-y-20">
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="category" :error="errors.category">Kategorie*</form-label>
          <form-select 
            id="category"
            v-model="form.category" 
            :options="categories" 
            :error="errors.category"
            @focus="removeError('category')">
          </form-select>
        </div>
        <div class="hidden sm:block sm:col-span-6"></div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="entry_fee" :error="errors.entry_fee">
            <template v-if="form.category == 'single' && hasEntryFeeError">
              <span class="text-red-600">Startgebühr für Einzelläufer:innen beträgt minimum 25.–</span>
            </template>
            <template v-else-if="form.category == 'group' && hasEntryFeeError">
              <span class="text-red-600">Startgebühr für Gruppen/Familien beträgt minimum 50.–</span>
            </template>
            <template v-else>
              Startgebühr*
            </template>
          </form-label>
          <form-input 
            id="entry_fee"
            type="number" 
            v-model="form.entry_fee" 
            :error="errors.entry_fee"
            @focus="removeError('entry_fee')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0" v-if="isFetched">
          <form-label id="start_time" :error="errors.start_time">Startzeit*</form-label>
          <form-select 
            id="start_time"
            v-model="form.start_time" 
            :options="start_time" 
            :error="errors.start_time"
            @focus="removeError('start_time')">
          </form-select>
        </div>
        <template v-if="form.category == 'group'">
          <div class="sm:col-span-6 mb-20 sm:mb-0">
            <form-label id="group_name" :error="errors.group_name">Gruppenname*</form-label>
            <form-input 
              id="group_name"
              type="text" 
              v-model="form.group_name" 
              :error="errors.group_name"
              @focus="removeError('group_name')">
            </form-input>
          </div>
          <div class="sm:col-span-6 mb-20 sm:mb-0">
            <form-label id="number_of_members" :error="errors.number_of_members">Anzahl Personen* (max. 6)</form-label>
            <form-input 
              id="number_of_members"
              type="number" 
              min="1"
              max="6"
              v-model="form.number_of_members" 
              :error="errors.number_of_members"
              @blur="validateLength()"
              @focus="removeError('number_of_members')">
            </form-input>
          </div>
        </template>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="firstname" :error="errors.firstname">Vorname*</form-label>
          <form-input 
            id="firstname"
            type="text" 
            v-model="form.firstname" 
            :error="errors.firstname"
            @focus="removeError('firstname')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="name" :error="errors.name">Name*</form-label>
          <form-input 
            id="name"
            type="text" 
            v-model="form.name" 
            :error="errors.name"
            @focus="removeError('name')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="street" :error="errors.street">Strasse, Nr*</form-label>
          <form-input 
            id="street"
            type="text" 
            v-model="form.street" 
            :error="errors.street"
            @focus="removeError('street')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="location" :error="errors.location">PLZ, Ort*</form-label>
          <form-input 
            id="location"
            type="text" 
            v-model="form.location" 
            :error="errors.location"
            @focus="removeError('location')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="email" :error="errors.email">E-Mail*</form-label>
          <form-input
            id="email" 
            type="email" 
            v-model="form.email" 
            :error="errors.email"
            @focus="removeError('email')">
          </form-input>
        </div>
        <div class="sm:col-span-6 mb-20 sm:mb-0">
          <form-label id="phone">Telefon</form-label>
          <form-input 
            id="phone"
            type="tel" 
            v-model="form.phone">
          </form-input>
        </div>
        <div class="sm:col-span-full mb-20 sm:mb-0">
          <form-label id="remarks">Bemerkungen</form-label>
          <form-textarea v-model="form.remarks" id="remarks">
          </form-textarea>
        </div>
        <template v-if="form.category == 'single'">
          <div class="sm:col-span-full mb-20 sm:mb-0 max-w-3xl">
            <form-group>
              <form-checkbox id="buddy" :selected="form.buddy" v-model="form.buddy">
                <template v-slot:label>
                  Ich freue mich, als «Rolling Buddy» am Wagi-Lauf eine Bewohnerin oder einen Bewohner unterstützend zu begleiten.
                </template>
              </form-checkbox>
            </form-group>
          </div>
        </template>
        <div class="sm:col-span-full mb-20 sm:mb-0">
          <form-group>
            <form-checkbox id="conditions" :selected="form.conditions" v-model="form.conditions" :error="errors.conditions">
              <template v-slot:label>
                Ich akzeptiere die <a href="/teilnahmebedingungen" target="_blank" class="underline hover:no-underline underline-offset-4 decoration-1">Teilnahmebedingungen</a>.
              </template>
            </form-checkbox>
          </form-group>
        </div>
        <div class="sm:col-span-full mt-10 lg:mt-15">
          <form-group>
            <button 
              :class="[isLoading || hasEntryFeeError ? 'opacity-70 text-gray-600 pointer-events-none select-none' : '', 'font-basetica-bold inline-flex leading-none uppercase transition-all duration-200 px-15 py-15 bg-white hover:bg-black text-black hover:text-sunshine']"
              type="button"
              @click.prevent="submit()">
              Absenden
            </button>
          </form-group>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
import FormCheckbox from '@/form/components/form/Checkbox.vue';
import FormGroup from '@/form/components/form/Group.vue';
import FormLabel from '@/form/components/form/Label.vue';
import FormInput from '@/form/components/form/Input.vue';
import FormTextarea from '@/form/components/form/Textarea.vue';
import FormSelect from '@/form/components/form/Select.vue';
import ValidationErrors from '@/form/components/form/ValidationErrors.vue';
import Feedback from '@/form/components/form/Feedback.vue';
import CardSingle from '@/form/components/cards/Single.vue';
import CardGroup from '@/form/components/cards/Group.vue';

export default {

  components: {
    FormLabel,
    FormGroup,
    FormSelect,
    FormInput,
    FormTextarea,
    FormCheckbox,
    ValidationErrors,
    Feedback,
    CardSingle,
    CardGroup
  },

  data() {

    return {

      form: {
        entry_fee: null,
        category: 'null',
        start_time: 'null',
        group_name: null,
        number_of_members: null,
        firstname: null,
        name: null,
        street: null,
        location: null,
        phone: null,
        email: null,
        remarks: null,
        conditions: false,
        buddy: false,
      },

      errors: {
        entry_fee: false,
        category: false,
        start_time: false,
        group_name: false,
        number_of_members: false,
        firstname: false,
        name: false,
        email: false,
        street: false,
        location: false,
        phone: false,
        conditions: false,
        buddy: false,
      },

      categories: [
        { value: 'null', label: 'Kategorie wählen...'},
        { value: 'single', label: 'Einzelläufer:in' },
        { value: 'group', label: 'Gruppen/Familien' },
      ],

      start_time: [
        { value: 'null', label: 'Startzeit wählen...'},
      ],

      validationErrors: [],

      routes: {
        store: '/api/register',
        slots: '/api/slots',
      },

      isSent: false,
      isLoading: false,
      isFetched: false,
      hasEntryFeeError: false,
    }
  },

  mounted() {
    this.slots();
  },

  methods: {

    slots() {
      this.axios.get('/api/slots').then(response => {
        response.data.forEach(slot => {
          if (slot != '11.15'){
            this.start_time.push({
              value: slot,
              label: slot + ' Uhr'
            });
          }
        });
        this.isFetched = true;
      });
    },

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
        entry_fee: null,
        category: 'null',
        start_time: 'null',
        group_name: null,
        number_of_members: null,
        firstname: null,
        name: null,
        street: null,
        location: null,
        phone: null,
        email: null,
        remarks: null,
        conditions: false,
        buddy: false,
      };
      this.errors = {};
      this.validationErrors = [];
      this.isSent = false;
    },

    validateLength() {
      if (this.form.number_of_members > 6) {
        this.form.number_of_members = 6;
      }
    }
  },

  watch: {
    // watch entry fee: must be at least 25 if category is single, 50 if category is group
    'form.entry_fee': function(value) {

      if (this.form.category == 'null' && value < 25) {
        this.errors.entry_fee = true;
        this.hasEntryFeeError = true;
      }
      else if (this.form.category == 'single' && value < 25) {
        this.errors.entry_fee = true;
        this.hasEntryFeeError = true;
      } 
      else if (this.form.category == 'group' && value < 50) {
        this.errors.entry_fee = true;
        this.hasEntryFeeError = true;
      } 
      else {
        this.errors.entry_fee = null;
        this.hasEntryFeeError = false;
      }
    },

    'form.category': function(value) {

      if (value == 'single') {
        this.form.entry_fee = 25;
      } 
      else if (value == 'group') {
        this.form.entry_fee = 50;
      }


      if (value == 'single' && this.form.entry_fee < 25) {
        this.errors.entry_fee = true;
        this.hasEntryFeeError = true;
      } 
      else if (value == 'group' && this.form.entry_fee < 50) {
        this.errors.entry_fee = true;
        this.hasEntryFeeError = true;
      } 
      else {
        this.errors.entry_fee = null;
        this.hasEntryFeeError = false;
      }
    },

    'form.conditions': function(value) {
      this.errors.conditions = null;
    },

  },
}
</script>