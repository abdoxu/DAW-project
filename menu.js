const all = document.getElementById('all');
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const btn4 = document.getElementById('btn4');


all.addEventListener('click',()=>{
 
    trad.style.display='block';
    drinks.style.display='block';
    thlia.style.display='block';
    fast.style.display='block';
    ftor.style.display='block';
   
   

})

btn1.addEventListener('click',(e)=>{
 
    
    ftor.style.display='block'
    trad.style.display='none';
    drinks.style.display='none';
    thlia.style.display='none';
    fast.style.display='none';
   

})

btn2.addEventListener('click',()=>{
 
   
   
    trad.style.display='block';
    ftor.style.display='none'
    drinks.style.display='none';
    thlia.style.display='none';
    fast.style.display='none';
   
  
   
   
  

})
btn3.addEventListener('click',()=>{
 
   trad.style.display='none';
    ftor.style.display='none'
    drinks.style.display='block';
    thlia.style.display='none';
    fast.style.display='none';

})
btn4.addEventListener('click',()=>{
 
   trad.style.display='none';
    ftor.style.display='none'
    drinks.style.display='none';
    thlia.style.display='block';
    fast.style.display='none';
    

})
btn5.addEventListener('click',()=>{
 
    trad.style.display='none';
    ftor.style.display='none'
    drinks.style.display='none';
    thlia.style.display='none';
    fast.style.display='block';
  
})



/*btn1.addEventListener('click', () => {
  id.classList.add('class');
  section2.classList.remove('active');
});*/


    