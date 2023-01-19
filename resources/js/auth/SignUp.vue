<template lang="">
    <div style="overflow:auto">
        <div class="authfy-heading">
            <h3 class="text-warning">Sign up for free</h3>
        </div>


        <form @submit.prevent="signup()" style="overflow:auto">
            <div class="form-group wrap-input">
                <input

                    type="text"
                    class="form-control"
                    v-model="first_name"
                    placeholder="Full name"
                />
                <span class="focus-input"></span>
            </div>
            <div class="form-group wrap-input">
                <input

                    type="text"
                    class="form-control"
                    v-model="last_name"
                    placeholder="Last name"
                />
            </div>
            <div class="form-group wrap-input">
                <input

                    type="email"
                    class="form-control"
                    v-model="email"
                    placeholder="Email address"
                />
            </div>
            <div class="form-group wrap-input">
                <input

                    type="text"
                    class="form-control"
                    v-model="phone"
                    placeholder="Mobile Number"
                />
            </div>
            <div class="form-group wrap-input">
                <Select v-model="countryName"
                @change="onChange($event)"
                :required="true"
                class="form-control">
                    <option >Select Country</option>
                    <option v-for="country in countries">{{ country }}</option>
                </Select>
            </div>

            <!-- <h2>{{ countryName }}</h2> -->

            <div class="form-group wrap-input">
                <input

                    type="text"
                    class="form-control"
                    v-model="btc_address"
                    placeholder="BTC address"
                />
            </div>

            <div class="form-group wrap-input">
                <input
                    type="text"
                    class="form-control"
                    name="ref"
                    v-model="ref_email"
                    placeholder="Referral email"
                />
            </div>

            <div class="form-group wrap-input">
                    <input

                        type="password"
                        class="form-control"
                        v-model="password"
                        placeholder="Password"
                    />
                    <span class="focus-input"></span>
            </div>

            <div class="form-group wrap-input">
                <div class="">
                    <input
                    v-model="password_confirmation"


                        type="password"
                        class="form-control "
                        placeholder="Confirm Password"
                    />
                    <span class="focus-input"></span>
                </div>
            </div>

            <div v-if="errors" >
                <div v-for="(v, k) in errors" :key="k"
                style="background-color:red; color:white; border-radius:5px; margin: 5px; padding:3"
                 class="mb-4 shadow-lg py-2 px-4 pr-0">
                  <small v-for="error in v" :key="error" class="text-sm" style="color:white">
                    {{ error }}
                  </small>
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox"  style="float: left" />
                <p class="term-policy text-muted small">
                    I agree to the
                    <a href="#" style="color: navy">privacy policy</a> and
                    <a href="#" style="color: navy">terms of service</a>.
                </p>
            </div>
            <div class="form-group">
                <!-- <button
                    style="background-color: navy; border: none"
                    class="btn btn-lg btn-primary btn-block"
                    type="submit"
                >
                    Sign Up Now
                </button> -->

                <button
                style="background-color: navy; border: none"
                :disabled="isDisabled" class="mt-2 btn btn-block btn-lg btn-primary">
                    <div v-if="isLoading" class="spinner-grow spinner-grow-sm text-light"></div>
                    <span> {{ isLoading ? ' Loading...' : 'Sign Up' }}</span>
                </button>
            </div>
        </form>
    </div>
</template>
<script>
// import { utilitiesMixin } from "../utilities/loading.js"

import { getMaxListeners } from 'process'

export default {
    data() {
        return {
            isLoading: false,
            isSuccess: false,
            countries: null,
            isDisabled: false,

            ref_email: null,
            first_name: null,
            last_name: null,
            btc_address: null,
            email: null,
            phone: null,
            countryName: null,
            password: null,
            password_confirmation: null,
            errors: {},

        }
    },
    mounted() {
        this.getCountries();
        // console.log('Component mounted. ')
    },

    methods: {
        async getCountries() {
            await axios.get('/countries').then((response) => {
                this.countries = response.data.message
            })
        },

        onChange(event) {
            this.countryName = event.target.value
            // console.log(event.target.value)
        },

        // getCoun3(val){
        //     console.log(val)
        //     alert('val')
        // },

        signup() {
            this.isDisabled = true
            this.isLoading = true
            this.errors = {};

            console.log(this.countryName)
            console.log(this.first_name)
            // try {
            axios.post('/register', {
                btc_address: this.btc_address,
                country: this.countryName,
                email: this.email,
                first_name: this.first_name,
                last_name: this.last_name,
                password: this.password,
                phone: this.phone,
                ref_email: null,
                password_confirmation: this.password_confirmation
            }).then((response) => {
                // console.log(response.data)
                let res = response.data
                // if (response.data.status == true) {
                //     swal({
                //         title: res.status == true ? 'Successful' : 'Failed',
                //         text: res.message,
                //         icon: res.status === true ? 'success' : 'error'
                //     })
                //     window.location = '/auth-user'
                // }
                window.location = '/home'
            }).catch(({response}) => {
                if (response.status === 422) {
                    this.errors = response.data.errors;
                    // console.log(this.errors + "  " + this.isSuccess)
                }
                if (response.status == 500) {
                    swal({
                        title: 'Failed',
                        text: 'Internal Server Error',
                        icon: 'error'
                    })
                    alert('Internal server error')
                }
                if (response.status == 419) {
                    window.location.reload()
                }
            }).finally(()=>{
                this.isDisabled = false
                this.isLoading = false
            })


            // } catch (error) {
            //     if(error.response.status == 422){
            //         this.errors = error.response.errors;
            //         console.log(this.errors + "  "+ this.isSuccess)
            //     }

            // }

        }
    }
}
</script>
<style lang=""></style>
