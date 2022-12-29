const creamTab=document.querySelector("#cream");
const vaccineTab=document.querySelector("#vaccine");
const syrupTab=document.querySelector("#syrup");
const supplementTab=document.querySelector("#supplements");
const otherTab=document.querySelector("#other");
const tabletTab=document.querySelector("#tablet");

const inner_creamTab=document.querySelector("#inner-cream");
const inner_vaccineTab=document.querySelector("#inner-vaccine");
const inner_syrupTab=document.querySelector("#inner-syrup");
const inner_supplementTab=document.querySelector("#inner-supplement");
const inner_otherTab=document.querySelector("#inner-other");
const inner_tabletTab=document.querySelector("#inner-tablet");
let currentTab="cream";
let stopper=0;
let temp="";
const changeTab=(tab,ctab)=>{
    console.log("im called for hiding current tab");
    switch(ctab)
    {
        case "tablet":
            {
                inner_tabletTab.classList.toggle("hidden");
                break;
            }
        case "cream":
            {
                inner_creamTab.classList.toggle("hidden");
                break;
            }
        case "vaccine":
            {
                inner_vaccineTab.classList.toggle("hidden");
                break;
            }
        case "other":
           {
            inner_otherTab.classList.toggle("hidden");
            break;
            }
        case "supplement":
            {
                inner_supplementTab.classList.toggle("hidden");

                break;
            }
        case "syrup":
            {
                inner_syrupTab.classList.toggle("hidden");

                break;
            }    
    }
    console.log("im called for diclosing a new tab");
    currentTab=tab;
    switch(tab)
    {
        case "tablet":
            {
                inner_tabletTab.classList.toggle("hidden");
                break;
            }
        case "cream":
            {
                inner_creamTab.classList.toggle("hidden");
                break;
            }
        case "vaccine":
            {
                inner_vaccineTab.classList.toggle("hidden");
                break;
            }
        case "other":
           {
            inner_otherTab.classList.toggle("hidden");
            break;
            }
        case "supplement":
            {
                inner_supplementTab.classList.toggle("hidden");

                break;
            }
        case "syrup":
            {
                inner_syrupTab.classList.toggle("hidden");

                break;
            }    
    }
}



creamTab.addEventListener("click",()=>changeTab("cream",currentTab));
vaccineTab.addEventListener("click",()=>changeTab("vaccine",currentTab));
otherTab.addEventListener("click",()=>changeTab("other",currentTab));
syrupTab.addEventListener("click",()=>changeTab("syrup",currentTab));
tabletTab.addEventListener("click",()=>changeTab("tablet",currentTab));
supplementTab.addEventListener("click",()=>changeTab("supplement",currentTab));
