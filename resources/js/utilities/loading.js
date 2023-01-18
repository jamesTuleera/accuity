
export const utilitiesMixin = {
    data() {
        return {
            errorMessage: '',
            errorBag: [],
            loading: false,
            spinClass: {
                fa: true,
                "fa-check-circle-o": true,
                "fa-spin": false,
                "fa-spinner": false
            },
            sliderOptions: SLIDER_OPTIONS,
        };
    },

    methods: {
        startLoading() {
            console.log('starting loading')
            this.errorMessage = '';
            this.errorBag.splice(0, this.errorBag.length);
            this.loading = true;
            this.spinClass['fa-spinner'] = true;
            this.spinClass['fa-spin'] = true;
            this.spinClass['fa-check-circle-o'] = false;
        },

        stopLoading() {
            console.log('stopping loading')
            this.loading = false;
            this.spinClass['fa-spinner'] = false;
            this.spinClass['fa-spin'] = false;
            this.spinClass['fa-check-circle-o'] = true;
        },



    }
};
