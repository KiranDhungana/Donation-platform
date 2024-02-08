function validateCampaign(){
    var title = document.getElementById('post_title').value
    var fname = document.getElementById('floating_first_name').value
    var mname = document.getElementById('middlename').value
    var lname = document.getElementById('lname').value
    var relation = document.getElementById('relation').value
    var phone = document.getElementById('floating_phone').value
    var nameRegex = /^[a-zA-Z-' ]+$/;
    var phoneRegex = /^\d{10}$/;
    if (!nameRegex.test(fname)) {
        alert("First Name Not Defined")
    }
    if (!nameRegex.test(mname)) {
        alert("Middle Name Not Defined")
    }
    if (!nameRegex.test(lname)) {
        alert("Last Name Not Defined")
    }
    if (!nameRegex.test(relation)) {
        alert("Relation Not Defined")
    }
    

    if(title.length > 100){
        alert("Title should have less then 100 words.");
    }

     if(fname.length>50 || mname.length>50 || lname.length>50){
        alert("Names shouldnot contain more than 50 words");
    }

     if(relation.length > 20){
        alert("Undefined relation with needy")
     }

     
     if (!phoneRegex.test(phone)) {
        alert("Incorrect Phone number")
    }

    
}

// document.getElementById('nextBtn').addEventListener('click',validateCampaign())

function isValidEmail(email) {
    // Basic email validation regex
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
