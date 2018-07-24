/**
 * Created by Enric on 24/07/2018.
 */
const app = new Vue({
    el: '#content',
    // our data
    data: {
        date: '13-10-2018',
        spanishDay: '',
        catalanDay: '',
        isLeap: '',
        errorMessage: 'Write a date as format dd-mm-YYYY.',
        isError: false
    },

    methods: {
        processForm: function () {
            axios.post('/getDay', {
                date: this.date
            }).then(function (response) {


                if (response.data.success) {
                    app.spanishDay = response.data.stringDayES;
                    app.catalanDay = response.data.stringDayCAT;
                    app.isLeap = response.data.isLeap;
                    app.errorMessage = 'Write a date as format dd-mm-YYYY.';
                    app.isError = false;
                } else {
                    app.spanishDay = '';
                    app.catalanDay = '';
                    app.isLeap = '';
                    app.isError = true;
                    app.errorMessage = 'The date could not be read, check that it is well written.';
                }
                console.log(response.data)

            }).catch(error => {
                console.log(error)
            });
        }
    }
});



