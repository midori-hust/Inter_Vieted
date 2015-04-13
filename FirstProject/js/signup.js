$(document).ready(function(){
    var validator = $("#input_form").validate({ 
    rules: { 
        username: {
            required: true,
            minlength: 6,
            maxlength: 25
        }, 
        email: {
            required : true,
            email: true,
        },
        password: {
            required: true,
            minlength: 6,
            maxlength: 25
        },
        cpassword: {
            equalTo : "#password"
        },
        birthday: {
            required: true,
            date : true
        }
    }, 

    messages: { 
        username: {
            required:"Enter yourname !",
            minlength:"Yourname enter least {6} characters.",
            maxlength: "Yourname enter no more than {25} characters."
        },
        email: {
            required:"Enter your email",
            email:"Please enter a valid email address!"
        },
        password: {
            required:" Enter password",
            minlength:" Password enter least {6} characters.",
            maxlength:" Password enter no more than {25} characters."
        },
        cpassword: {
            equalTo: "Confirm password is wrong !"
        },
        birthday: {
            required: "Enter password !",
            date: "Please enter a valid date"
        }
    }
  }); 
});

