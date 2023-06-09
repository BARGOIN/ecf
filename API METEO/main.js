
// console.log('test');


// recupere la ville (evenment au clic)
let btn = addEventListener('click', function(e){
    event.preventDefault();
//    let town = document.querySelector('ville')
   let town = document.getElementById('ville').value;
   console.log(town);
})

// 







let url='https://www.prevision-meteo.ch/services/json/' + town + tmp;

fetch(url)
    .then(res=>res.json())
    



