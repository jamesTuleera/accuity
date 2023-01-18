<template lang="">
    <div>
        <div class="authfy-heading">
            <h3 class="auth-title" style="color: navy">Sign up for free! ...</h3>
        </div>
        <form @submit.prevent="fillData">
            <div class="form-group wrap-input">
                <input
                    type="text"
                    class="form-control"
                    name="fulln"
                    placeholder="Full name"
                />
                <span class="focus-input"></span>
            </div>
            <div class="form-group wrap-input">
                <input
                    type="email"
                    class="form-control"
                    name="em"
                    placeholder="Email address"
                />
            </div>
            <div class="form-group wrap-input">
                <input
                    type="text"
                    class="form-control"
                    name="ph"
                    placeholder="Mobile Number"
                />
            </div>
            <div class="form-group wrap-input">
                <Select name="coun" class="form-control">
                    <option>Select Country</option>
                    <option v-for="country in countries">{{ country }}</option>
                </Select>
            </div>

            <div class="form-group wrap-input">
                <select class="form-control" name="cur">
                    <option selected disabled>Choose Currency</option>
                    <option value="$">US Dollar</option>
                    <option value="€">Euro</option>
                    <option value="£">British Pound Sterling</option>
                </select>
            </div>

            <div class="form-group wrap-input">
                <input
                    type="text"
                    class="form-control"
                    name="occu"
                    placeholder="Occupation"
                />
            </div>

            <div class="form-group wrap-input">
                <input
                    type="text"
                    readonly
                    class="form-control"
                    name="ref"
                    value="No Referral"
                />
            </div>

            <div class="form-group wrap-input">
                <div class="pwdMask">
                    <input
                        type="password"
                        class="form-control"
                        name="pw"
                        placeholder="Password"
                    />
                    <span class="focus-input"></span>
                    <span class="fa fa-eye-slash pwd-toggle"></span>
                </div>
            </div>
            <div class="form-group wrap-input">
                <div class="pwdMask">
                    <input
                        type="password"
                        class="form-control"
                        name="cpw"
                        placeholder="Confirm Password"
                    />
                    <span class="focus-input"></span>
                    <span class="fa fa-eye-slash pwd-toggle"></span>
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox" style="float: left" />
                <p class="term-policy text-muted small">
                    I agree to the
                    <a href="#" style="color: #ff4444">privacy policy</a> and
                    <a href="#" style="color: #ff4444">terms of service</a>.
                </p>
            </div>
            <div class="form-group">
                <button
                    @click="signup()"
                    name="reg"
                    style="background-color: #ff4444; border: none"
                    class="btn btn-lg btn-primary btn-block"
                    type="submit"
                >
                    Sign Up Now
                </button>
            </div>
        </form>
    </div>
</template>
<script>
import { utilitiesMixin } from "../utilities/loading.js"

export default {
    data() {
        return {
            isLoading: false,
            isSuccess: false,
            countries: null,
            isDisabled: false,

            account_number: null,
            bank_id: null,
            errors: null,
            user: [],

        }
    },
    mounted() {
        this.getCountries();
        // console.log('Component mounted. ')
    },

    methods: {
        async getCountries() {

            await axios.get('/countries').then((response) => {
                    // console.log(response.data.message)
                    this.countries = response.data.message

                })


        },

        async signup() {
            await axios.post('/register', {
                name : "James"
            }).then((response)=>{
                console.log(response.data)
            })
        }
    }
}
</script>
<style lang=""></style>
