// let searchBtn = document.querySelector('#searchicon');
// let searchBar= document.querySelector('.searchbarcontainer');
// window.onscroll = () =>{
//     searchBtn.classList.remove('fa-times');
//     searchBar.classList.remove('active');
//     menuBar.classList.remove('fa-times')

// }
// searchBtn.addEventListener('click', () =>{
//     searchBtn.classList.toggle('fa-times');
//     searchBar.classList.toggle('active');
// });


window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
  
    loader.classList.add("loader--hidden");
  
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
  

