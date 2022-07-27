const productContainers =[...document.querySelectorAll('.product-container1')];
const nxtbtn = [...document.querySelectorAll('.nxt-btn1')];
const prebtn = [...document.querySelectorAll('.pre-btn1')];
productContainers.forEach((item,i)=>{
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth=containerDimensions.width;
nxtbtn[i].addEventListener('click',()=>{
    item.scrollLeft += containerWidth;
})
prebtn[i].addEventListener('click',()=>{
    item.scrollLeft -= containerWidth;
})
})