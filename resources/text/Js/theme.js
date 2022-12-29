const changer=document.getElementById("theme");
let curTheme=localStorage.getItem("Theme");

changer.addEventListener("click",()=>{
    console.log('hi im called');
    if(curTheme=="l"){
        curTheme="d";
        root.style.setProperty("--light-color0","black");
        root.style.setProperty("--dark-color0","white");
        root.style.setProperty("--light-color1"," rgb(49, 49, 49)");
        root.style.setProperty("--dark-color1","rgb(14, 79, 0)");
        root.style.setProperty("--light-color2","rgb(42, 51, 40)");
        root.style.setProperty("--dark-color2","rgb(14, 79, 0)");
        root.style.setProperty("--lime","rgb(0, 116, 58)");
        root.style.setProperty("--main-heading","rgb(3, 102, 3)");
        localStorage.setItem("Theme","d");
    }
    else{
        curTheme="l";
        root.style.setProperty("--light-color0","white");
        root.style.setProperty("--dark-color0","black");
        root.style.setProperty("--dark-color1"," rgb(61, 214, 94)");
        root.style.setProperty("--light-color1","rgb(14, 79, 0)");
        root.style.setProperty("--dark-color2","rgb(42, 51, 40)");
        root.style.setProperty("--light-color2","rgb(0, 116, 58)");
        root.style.setProperty("--main-heading","rgb(62, 177, 62)");
        root.style.setProperty("--main-heading","rgb(62, 177, 62)");
        localStorage.setItem("Theme","l");
    }
});

const starterTheme=()=>{
    console.log("started");
        console.log("called");
    if(localStorage.getItem("Theme")==null)
    {
        localStorage.setItem("Theme","l");
    }
    else if(localStorage.getItem("Theme")=="d")
    {
        setTheme("d");
    }
    else if(localStorage.getItem("Theme")=="l")
    {
        setTheme("l");
    }
};

starterTheme();

