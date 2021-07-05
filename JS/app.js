//Navbar sticky on scroll

window.addEventListener("scroll",function(){
  const header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 0)
});


// Menu burger
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.documentElement.style.overflow = 'hidden';
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.documentElement.style.overflow = 'visible';
};


// Page Faq dropdown 

function AddNewClass(i){
    if(document.getElementById(i).style.display == 'block')
    {
  document.getElementById(i).style.display = 'none';
    }else{
  document.getElementById(i).style.display = 'block';
  }
  
};

function chevron(x){
  var arrow= document.getElementById(x);
    if(arrow.className== "fas fa-chevron-up"){
      
      arrow.className="fas fa-chevron-down"

    }
    else{
      arrow.className="fas fa-chevron-up"
    }
  };


  // Télephone appear disappear
  
  function telephoneAppear(){
    var x = document.getElementById("telephone");
    if(x.className === ""){
      x.className +="telephone";
    }
  }
  function telephoneDisappear(){
    var x = document.getElementById("telephone");
    if(x.className === "telephone"){
      x.className ="";
    }
  }
  //
  
  







