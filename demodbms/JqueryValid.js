$(function(){
    $.validator.addMethod("customPassword", function(value, element) {
        return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
    }, "Password must contain at least one lowercase letter, one uppercase letter, one special character, and have a minimum length of 8 characters");

    $("#forms").validate({
        rules:{
            Fullname:{
                required: true,
                minlength: 4
            },
            Phone:{
                required: true,
                minlength: 10,
                maxlength: 10
            },
            Username:{
                required: true,
                minlength: 2
            },
            Password:{
                required: true,
                minlength: 8,
                customPassword: true
            },
            Confirm_password:{
                required: true,
                equalTo: '#pass1'
            },
            Email:{
                required: true,
                email: true
            },
            agree:{
                required: true
            }
        },
        messages:{
            Fullname:{
                required: 'Please enter your full name',
                minlength: 'Full name must be at least 4 characters long'
            },
            Phone:{
                required: 'Please enter your phone number',
                minlength: 'Phone number must be 10 digits long',
                maxlength: 'Phone number must be 10 digits long'
            },
            Username:{
                required: 'Please enter a username',
                minlength: 'Username must be at least 2 characters long'
            },
            Password:{
                required: 'Please enter a password',
                minlength: 'Password must be at least 8 characters long'
            },
            Confirm_password:{
                required: 'Please enter the password again',
                minlength: 'Password must be at least 8 characters long',
                equalTo: 'Please enter the same password'
            },
            Email:{
                required: 'Please enter an email address',
                email: 'Please enter a valid email address'
            },
            agree:{
                required: 'Please agree to our terms and conditions'
            }
        },
        submitHandler: function(form) {
            // If the form is valid, you can perform actions here, like AJAX submission
            alert('Form submitted');
        }
    });
});
