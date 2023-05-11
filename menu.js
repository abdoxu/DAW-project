const all = document.getElementById('all');
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const btn4 = document.getElementById('btn4');


/*all.addEventListener('click',()=>{
 
    allmeals.style.display='block'
   

})*/

btn1.addEventListener('click',()=>{
 
    
    ftor.style.display='block'

})

btn2.addEventListener('click',()=>{
 
    allmeals.classlist.remove('all-meals');
   
    trad.style.display='block';
    drinks.style.display='none';
    thlia.style.display='none';
    fast.style.display='none';
    ftor.style.display='none';
   
  

})
btn3.addEventListener('click',()=>{
 
    allmeals.classlist.remove('all-meals');
    drinks.classlist.add('mchroubat');
    

})
btn4.addEventListener('click',()=>{
 
    allmeals.classlist.remove('all-meals');
   
    thlia.classlist.add('desserts');
    

})
btn5.addEventListener('click',()=>{
 
    allmeals.classlist.remove('all-meals');
    
    fast.classlist.add('fast-food');
  
})



/*btn1.addEventListener('click', () => {
  id.classList.add('class');
  section2.classList.remove('active');
});*/


    