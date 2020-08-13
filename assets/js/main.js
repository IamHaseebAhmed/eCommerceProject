
   // FOR SIGN UP PAGE
const ele1 = document.getElementById('su_submit_btn')

if (ele1) {
    ele1.addEventListener('click', function (e) {
        e.preventDefault();

        const fname = document.getElementById('su_fname');
        const lname = document.getElementById('su_lname');
        const email = document.getElementById('su_email');
        const password = document.getElementById('su_password');
        const confirm_password = document.getElementById('su_confirm_password');
        const checkbox = document.getElementById('su_checkbox');
        let submission_message = document.getElementById('sign-up-message');
        const email_submission = document.getElementById('email_submission_message')
        const pass_submission_message = document.getElementById('pass_submission_message')
        const confirmPass_submission_message = document.getElementById('confirmPass_submission_message')

        submission_message.innerHTML=""
        email_submission.innerHTML=""
        pass_submission_message.innerHTML=""
        confirmPass_submission_message.innerHTML=""

        email.style.backgroundColor = 'white'
        password.style.backgroundColor = 'white'
        confirm_password.style.backgroundColor = 'white'
        fname.style.backgroundColor = 'white'
        lname.style.backgroundColor = 'white'

        if (fname.value && lname.value && checkbox.checked && validateEmail(email.value)
            && (validPass(password)) && validPass(confirm_password) &&
            (password.value === confirm_password.value)) {
            console.log('Submitted')

            submission_message.innerHTML = 'Signed up Successfully!'
            //Enter code here to send sign up form to db

            //This is to clear all fields after submission
            fname.value = ""
            lname.value = ""
            email.value = ""
            password.value = ""
            confirm_password.value = ""
            checkbox.checked = false
        }
        else {
            submission_message.innerHTML = 'Please fill all the above field!'
            if (password.value && !validPass(password)) {
                pass_submission_message.innerHTML = 'Password must be of 6 to 20 characters which must contains digits, uppercase and lowercase characters.'
            }
            if (!email.value) {
                email.style.backgroundColor = "#ffcccb"
            }
            if (email.value && !validateEmail(email.value)) {
                email.style.backgroundColor = "#ffcccb"
                email_submission.innerHTML = 'Please enter valid email'
            }
            if (!password.value) {
                password.style.backgroundColor = "#ffcccb"
            }
            if (!confirm_password.value) {
                confirm_password.style.backgroundColor = "#ffcccb"
            }
            if (!(password.value === confirm_password.value)) {
                if (validPass(password))
                    confirmPass_submission_message.innerHTML = 'Both the password must be same'
            }
            if (!fname.value) {
                fname.style.backgroundColor = "#ffcccb"
            }
            if (!lname.value) {
                lname.style.backgroundColor = "#ffcccb"
            }
            if (!checkbox.checked && fname.value && lname.value && email.value && password.value) {
                submission_message.innerHTML = 'Please click the checkBox to sign up'
            }
        }
    })
}

// FOR EMAIL VALIDATION
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


// FOR PASSWORD VALIDATION
function validPass(password) {
    var password_pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if (password.value.match(password_pattern)) {
        return true
    }
    else {
        return false
    }
}

//For phone num validation
function validTelNumber(num){
    var numPattern=/^\d{10}$/
    return (num.value.match(numPattern))
}


// FOR SIGN IN PAGE
const ele2 = document.getElementById('si_submit_btn')

if (ele2) {
    ele2.addEventListener('click', function (e) {
        e.preventDefault()

        const username = document.getElementById('si_username').value;
        const password = document.getElementById('si_password').value;
        const res_message = document.getElementById('sign-in-message');
        // Search the user with username and password from db
        if (username !== "" && password !== "") {



            // If username/password doesn't fount/match
            
            //res_message.innerHTML = "Either username or password is incorrect."

        }
        else{
            res_message.innerHTML = "Please enter valid username and password!"
        }
    })
}


// FOR FEEDBACK PAGE
const ele3 = document.getElementById('fb_submit_btn')

if (ele3) {
    ele3.addEventListener('click', function (e) {
        e.preventDefault();

        let fb_query = document.getElementById('fb_enquiry');
        let query_type = fb_query.options[fb_query.selectedIndex];
        let organizationName = document.getElementById('fb_org_name');
        let username = document.getElementById('fb_username');
        let mobile = document.getElementById('fb_mobile');
        let email = document.getElementById('fb_email');
        let feebackMessage = document.getElementById('fb_message');

        fb_query.style.backgroundColor = "#E8F0F3";
        username.style.backgroundColor = "#E8F0F3";
        organizationName.style.backgroundColor= "#E8F0F3";
        mobile.style.backgroundColor = "#E8F0F3";
        email.style.backgroundColor = "#E8F0F3";
        feebackMessage.style.backgroundColor = "#E8F0F3";

        document.getElementById('fb-type-validation').innerHTML = ""
        document.getElementById('fb-user-validation').innerHTML = ""
        document.getElementById('fb-mobile-validation').innerHTML = ""
        document.getElementById('fb-email-validation').innerHTML = ""
        document.getElementById('fb-msg-validation').innerHTML = ""

        if(query_type.value && username.value && mobile.value && validTelNumber(mobile)
             && validateEmail(email.value) && feebackMessage.value){
            // Now, Send the feedback to database
            query_type.value=""
            organizationName.value=""
            username.value=""
            mobile.value=""
            email.value=""
            feebackMessage.value=""
            document.getElementById('fb-msg-validation').style.color="black"
            document.getElementById('fb-msg-validation').innerHTML="Submitted successfully!"
        }
        else{

            // Field Validations
            if (!query_type.value) {
                fb_query.style.backgroundColor = "#ffcccb";
                document.getElementById('fb-type-validation').innerHTML = "Select any Query Type."
            }
            if (!username.value) {
                document.getElementById('fb_username').style.backgroundColor = "#ffcccb";
                document.getElementById('fb-user-validation').innerHTML = "Please enter your username."
            }
            if (!mobile.value) {
                document.getElementById('fb_mobile').style.backgroundColor = "#ffcccb";
                document.getElementById('fb-mobile-validation').innerHTML = "Phone Number is required!"    
            }
            else{
                if(!validTelNumber(mobile)){
                    document.getElementById('fb-mobile-validation').innerHTML = "Please enter a valid mobile number!" 
                }
            }
            if (!email.value) {
                document.getElementById('fb_email').style.backgroundColor = "#ffcccb";
                document.getElementById('fb-email-validation').innerHTML = "Email is required!"
            }
            if (!feebackMessage.value) {
                document.getElementById('fb_message').style.backgroundColor = "#ffcccb";
                document.getElementById('fb-msg-validation').innerHTML = "Please, Enter your query message!"
            }
            if (!validateEmail(email.value)) {
                    document.getElementById('fb-email-validation').innerHTML = "Please enter a valid email."
                    
            }

    }

        
    })
}


// FOR CONTACT US PAGE
const ele4 = document.getElementById('cu_submit_btn')

if (ele4) {
    ele4.addEventListener('click', function(e) {
        e.preventDefault();

        const username = document.getElementById('cu_name')
        const email = document.getElementById('cu_email')
        const message = document.getElementById('cu_message')

        username.style.backgroundColor="#E8F0F3";
        email.style.backgroundColor="#E8F0F3";
        message.style.backgroundColor="#E8F0F3";

        document.getElementById('cu-name-validation').innerHTML = "";
        document.getElementById('cu-email-validation').innerHTML = "";
        document.getElementById('cu-msg-validation').innerHTML = "";

        if(username.value && message.value && validateEmail(email.value))
        {
            // Now, Send Information to DB


            email.value=""
            username.value=""
            message.value=""
            document.getElementById('cu-msg-validation').style.color='black'
            document.getElementById('cu-msg-validation').innerHTML='Submitted successfully!'
        }
        else{

            if (!username.value) {
                username.style.backgroundColor="#ffcccb";
                document.getElementById('cu-name-validation').innerHTML = "Enter your full name";
            }
            if (!email.value) {
                email.style.backgroundColor="#ffcccb";
                document.getElementById('cu-email-validation').innerHTML = "Enter your valid email";
            }
            if (!message.value) {
                message.style.backgroundColor="#ffcccb";
                document.getElementById('cu-msg-validation').innerHTML = "Enter your query/message for us.";
            }

            if (!validateEmail(email.value) && email.value) {

                email.style.backgroundColor="#ffcccb";
                document.getElementById('cu-email-validation').innerHTML = "Please enter a valid email."
            }
        }
        
        
    })
}


// VALIDATION OF PRODUCTS & CATEGORIES IN SEARCH BAR (TOP)

const searchProduct = document.getElementById('btn-search-catg')
if (searchProduct) {

    searchProduct.addEventListener('click', (e) => {
        e.preventDefault()

        let Product = document.getElementById('search-input')
        let catg = document.getElementById('search-catg')
        Product.style.backgroundColor = "white"

        if (Product.value && catg.value !== 'Categories') {
            console.log('searching!!!!')
            //Enter code of searched product here

        }
        else if (!Product.value && catg.value == 'Categories') {
            Product.placeholder = 'Enter Product here'
            Product.style.backgroundColor = "#ffcccb"
            catg.style.border = "1.5px inset red"
        }
        else if (!Product.value) {
            Product.placeholder = 'Enter Product here'
            Product.style.backgroundColor = "#ffcccb"
        }
        else {
            catg.style.border = "1.5px inset red"
            alert('Please choose a category')
        }
    })
}


// VALIDATION OF PRODUCT REVIEW FORM
const product_review = document.getElementById('product-review-submit')

if (product_review) {
    product_review.addEventListener('click', (e) => {
        e.preventDefault()

        const reviewer_name = document.getElementById('product-review-name')
        const reviewer_email = document.getElementById('product-review-email')
        const review_title = document.getElementById('product-review-title')
        const review_message = document.getElementById('product-review-message')
        let review_submission_text = document.getElementById('review_submission_text')
        let recommend_friend = document.querySelector('input[name = "recommendFriend"]:checked')

        reviewer_name.style.background = "white"
        reviewer_email.style.background = "white"
        review_title.style.background = "white"
        review_message.style.background = "white"

        if (reviewer_name.value && reviewer_email.value && review_title.value &&
            review_message.value && recommend_friend && validateEmail(reviewer_email.value)) {
            review_submission_text.innerHTML = 'Submitted successfully!'
            reviewer_name.value = ""
            reviewer_email.value = ""
            review_title.value = ""
            review_message.value = ""
            document.getElementById("product-recommend-yes").checked = false;
            document.getElementById("product-recommend-no").checked = false;
            console.log('Submitted successfully!')
            //Enter code here to send review to db
        }
        else {
            review_submission_text.innerHTML = 'Please fill all the above fields!'
            if (!reviewer_name.value) {
                reviewer_name.style.background = "#ffcccb"
            }
            if (!reviewer_email.value) {
                reviewer_email.style.background = "#ffcccb"
            }
            if (!review_title.value) {
                review_title.style.background = "#ffcccb"
            }
            if (!review_message.value) {
                review_message.style.background = "#ffcccb"
            }
            if(reviewer_email.value){
                if (!validateEmail(reviewer_email.value)) {
                    reviewer_email.style.background = "#ffcccb"
                    review_submission_text.innerHTML = 'Please enter a valid email'
                }
            }
            
        }
    })
}


//for newsletter validation
const newsletter_submit = document.getElementById('btn_newsletter')

if (newsletter_submit) {
    newsletter_submit.addEventListener('click', (e) => {
        e.preventDefault()

        const newsletter_name = document.getElementById('newsletter_name')
        const newsletter_email = document.getElementById('newsletter_email')
        newsletter_name.style.backgroundColor = 'white'
        newsletter_email.style.backgroundColor = 'white'

        if (newsletter_name.value && validateEmail(newsletter_email.value)) {
            //Enter code here to send to db


            newsletter_email.value = ""
            newsletter_name.value = ""
            document.getElementById('subscription_sucess').innerHTML = ' Subscription Success!'
        }
        else {
            if (!newsletter_name.value) {
                newsletter_name.style.backgroundColor = '#ffcccb'
            }
            if (!newsletter_name.value && validateEmail(newsletter_email.value)) {
                newsletter_name.placeholder = 'Please enter your name'
            }
            if (!validateEmail(newsletter_email.value)) {
                newsletter_email.style.backgroundColor = '#ffcccb'
                alert('please enter a valid email')
            }
        }
    })
}


