
//Signin Form
document.getElementById("signin").addEventListener("click", function(){
    document.querySelector(".signin-container").style.display = "flex";
    document.querySelector(".signup-container").style.display = "none";
    document.querySelector(".company").style.display = "none";
    document.querySelector(".error").style.display = "none";
})
document.querySelector(".closex").addEventListener("click",function(){
    document.querySelector(".signin-container").style.display = "none";
    document.querySelector(".company").style.display = "flex";
})


//Signup Form
document.getElementById("signup").addEventListener("click", function(){
    document.querySelector(".signup-container").style.display = "flex";
    document.querySelector(".signin-container").style.display = "none";
    document.querySelector(".company").style.display = "none";
    document.querySelector(".error").style.display = "none";
})
document.querySelector(".closey").addEventListener("click",function(){
    document.querySelector(".signup-container").style.display = "none";
    document.querySelector(".company").style.display = "flex";
})

//Links
const sign_up_link = document.querySelector('#signup-link');
const sign_in_link  =document.querySelector('#signin-link');

const container = document.querySelector('.container');

sign_up_link.addEventListener("click", () =>{
	document.querySelector(".signup-container").style.display ="flex";
	document.querySelector(".signin-container").style.display = "none";
})

sign_in_link.addEventListener("click", () =>{
	document.querySelector(".signin-container").style.display ="flex";
	document.querySelector(".signup-container").style.display = "none";
})




