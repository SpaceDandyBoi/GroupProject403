var form = document.getElementById("myform");
var submit_error = document.getElementById("submit-error");
var fname_error = document.getElementById("fname-error");
var lname_error = document.getElementById("lname-error");
var gender_error = document.getElementById("gender-error");
var email_error = document.getElementById("email-error");
var phone_error = document.getElementById("phone-error");
var country_error = document.getElementById("country-error");
var state_error = document.getElementById("state-error");
var city_error = document.getElementById("city-error");
var address_error = document.getElementById("address-error");
var cat_error = document.getElementById("cat-error"); 
var subject_error = document.getElementById("subject-error");     
var msg_error = document.getElementById("msg-error");      

var flag = true;

form.addEventListener('submit', e =>{
   
    validateInput();

    if(flag == false){
        e.preventDefault();
    }
});

function validateInput()
{   

    flag = true;

    var fname = document.getElementById("first_name");
    if(fname.value === '' || fname.value === null || fname.value === ' '){
        fname_error.innerHTML = "Invalid Input";
        fname.classList.add("is-invalid");
        flag = false;
    }else{
        fname_error.innerHTML = "";
        fname.classList.remove("is-invalid");
    }

    var lname = document.getElementById("last_name");
    if(lname.value === '' || lname.value === null || lname.value === ' '){
        lname_error.innerHTML = "Invalid Input";
        lname.classList.add("is-invalid");
        flag = false;
    }else{
        lname_error.innerHTML = "";
        lname.classList.remove("is-invalid");
    }

    var m = document.getElementById("genderM");
    var f = document.getElementById("genderF");
    if(f.checked == false && m.checked == false){
        gender_error.innerHTML = "Invalid Input";
        flag = false;
    }else{
        gender_error.innerHTML = "";
    }

    var email = document.getElementById("email");
    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
        email_error.innerHTML = "Invalid Input";
        email.classList.add("is-invalid");
        flag = false;
    }else{
        email_error.innerHTML = "";
        email.classList.remove("is-invalid");
    }

    var phone = document.getElementById("phone");
    if(!/^05\d{8}$/.test(phone.value)){
        phone_error.innerHTML = "Invalid Input";
        phone.classList.add("is-invalid");
        flag = false;
    }else{
        phone_error.innerHTML = "";
        phone.classList.remove("is-invalid");
    }

    var country = document.getElementById("country");
    if(country.value === '' || country.value === null || country.value === ' '){
        country_error.innerHTML = "Please select a country";
        country.classList.add("is-invalid");
        flag = false;
    }else{
        country_error.innerHTML = "";
        country.classList.remove("is-invalid");
    }

    var state = document.getElementById("state");
    if(state.value === '' || state.value === null || state.value === ' '){
        state_error.innerHTML = "Invalid Input";
        state.classList.add("is-invalid");
        flag = false;
    }else{
        state_error.innerHTML = "";
        state.classList.remove("is-invalid");
    }

    var city = document.getElementById("city");
    if(city.value === '' || city.value === null || city.value === ' '){
        city_error.innerHTML = "Invalid Input";
        city.classList.add("is-invalid");
        flag = false;
    }else{
        city_error.innerHTML = "";
        city.classList.remove("is-invalid");
    }1

    var address = document.getElementById("address");
    if(address.value === '' || address.value === null || address.value === ' '){
        address_error.innerHTML = "Invalid Input";
        address.classList.add("is-invalid");
        flag = false;
    }else{
       address_error.innerHTML = "";
       address.classList.remove("is-invalid");
    }


    var com = document.getElementById("complaint");
    var sug = document.getElementById("suggestion");
    var supp = document.getElementById("support");
    if(com.checked === false && sug.checked === false && supp.checked === false){
        cat_error.innerHTML = "Please select at least one";
        flag = false;
    }else{
        cat_error.innerHTML = "";
    }

    var subject = document.getElementById("subject");
    if(subject.value === '' || subject.value === null || subject.value === ' '){
        subject_error.innerHTML = "Please add a subject";
        subject.classList.add("is-invalid");
        flag = false;
    }else{
        subject_error.innerHTML = "";
        subject.classList.remove("is-invalid");
    }1

    var msg = document.getElementById("msg");
    if(msg.value === '' || msg.value === null || msg.value === ' '){
        msg_error.innerHTML = "Please add a msg";
        msg.classList.add("is-invalid");
        flag = false;
    }else{
        msg_error.innerHTML = "";
        msg.classList.remove("is-invalid");
    }


    if(flag === false){
        //e.preventDefault();
        submit_error.innerHTML = "Invalid Input";
    }else{
        submit_error.innerHTML = "";
    }
}