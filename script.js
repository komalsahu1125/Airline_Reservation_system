function checkpassword(){
    let password = document.getElementById("password").Value;
    let confrmPassword = d0cument.getElementById("confrm-password").value;
    console.log(password,confrmPassword);
    let message = document.getElementById("message");

    if(password.length != 0){
        if(password == confrmPassword){
            message.textContent = "Passwords match";
            message.style.backgroundColor = "#3ae374";
        }
        else{
            message.textContent = "Password don't match";
            message.style.backgroundColor = "#ff4d4d";
        }
    }
    else{
        alert("password can't be empty!");
        message.textContent="";
        }
}