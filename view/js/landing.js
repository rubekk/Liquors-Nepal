const landingImg= document.querySelector(".landing");
const slogan= document.querySelector(".slogan-bg");
const lines= document.querySelectorAll(".line");

lines.forEach((line,i)=>{
    line.addEventListener("click", ()=>{
        if(i==0){
            landingImg.style.backgroundImage="url('./imgs/poster-1.jpg')";
            line.className="line active-line";
            lines[1].className="line";
        }
        else if(i==1){
            landingImg.style.backgroundImage="url('./imgs/poster-2.jpg')";
            line.className="line active-line";
            lines[0].className="line";
        }
    })
})

setTimeout(()=>{
    slogan.style.transform= "rotate(5deg)";
}, 5000)