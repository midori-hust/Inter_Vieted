  $(document).ready(function(){
        $("#check").click(function(event){
            var name = $("#name").val();
            var nameInfo = "";
            var email = $("#email").val();
            var emailInfo = "";
            var birthday =$("#birthday").val();
            var birthdayInfo ="";
            var password = $("#password").val();
            var passwordInfo = "";
            var pwconfirm = $("#pwconfirm").val();
            var error = false;

            if ( name == "") {
                $("#name_input").html("<li>"+" Miss name "+"</li>");
                error = true;
            }
            else{
                if (!checkName(name)) {
                    nameInfo = "<li>"+" Name is wrong "+"</li>";
                    error = true;
                };
                if (name.length < 4) {
                    nameInfo = nameInfo + "<li>"+" Name is very short "+"</li>";
                    error = true;
                };
                $("#name_input").html(nameInfo);
            }

            if (email == "") {
                emailInfo = "<li>"+" Miss email "+"</li>";
                error = true;
            }
            else{
                if (!checkEmail(email)) {
                    emailInfo = emailInfo +"<li>"+" Email is wrong "+"</li>";
                    error = true;
                }
            };
            $("#email_input").html(emailInfo);


            if (!checkDate(birthday)) {
                birthdayInfo = "<li>"+" Birthday is wrong !"+"</li>";
                error =true;
            };
            $("#birthday_input").html(birthdayInfo)


            if (password == "") {
               passwordInfo = "<li>"+ "Miss password"+ "</li>";
               error =true;
            }
            else{
                if (!checkPassword(password)) {
                    passwordInfo ="<li>"+" Password are only letters and number"+ "</li>";
                    error = true; 
                };
                if (password.length <6) {
                    passwordInfo = passwordInfo + "<li>" + " Password is very short" +"</li>";
                    error = true;
                };

            }
            $("#password_input").html(passwordInfo);


            if (pwconfirm != password ) {
                $("#pwconfirm_input").html("<li>"+ "Password confirm is wrong"+"</li>");
                error = true;
            };

            if(error)
                event.preventDefault();
        });
    });
     
    function checkValue(str1, str2){
        return str1.match(str2);
    }

    function checkName(name){
        var letters= /^[A-Za-z]+$/;
        return checkValue(name, letters);
    }

    function checkEmail(email){
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return checkValue(email, mailformat);
    }

    function checkDate(birthday){
        var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
        var date;
        var dd;
        var mm;
        var yy;
        var listofDays=[31,28,31,30,31,30,31,31,30,31,30,31];

        if (!checkValue(birthday,dateformat)) return false;
        
        date = birthday.split('/');
        dd = parseInt(date[0]);
        mm = parseInt(date[1]);
        yy = parseInt(date[2]);

        if (yy<1900) {
            return false;
        }
        listofDays[1] = dateOfFebruary(yy);
        if (dd>listofDays[mm-1]) return false;
        return true;
    }

    function checkPassword(password){
        var passwordformat = /^[0-9A-Za-z]+$/;
        return checkValue(password, passwordformat);
    }

    function dateOfFebruary(year){
        if (year%4 == 0) {
            if ((year%100 == 0) && (year%400 != 0))  {
                return 28;
            };
            return 29;
        };
        return 28;
    }