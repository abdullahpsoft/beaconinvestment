$("#addsmsnow").bootstrapValidator({
    fields: {
        cell_no: {
            validators: {
                notEmpty: {
                    message: 'Cell number required'
                }, // notEmpty
                regexp: {
                    // regexp: /^[1-9][0-9]{0,11}$/,
                    regexp: /^\d{11}$/,
                    message: "Invalid Cell Number"
                }
            } // validators
        },  // mobilenum
        message: {
            validators: {
                notEmpty: {
                    message: 'Message is required and cannot be empty'
                },
                    stringLength: {
                        max: 160,
                        message: 'The message must be of max 160 characters long'
                    }
            },
            minlength: 20,
        },
    }
});