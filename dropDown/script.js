let serviceOptionEl = document.getElementById('serviceOption');
let sellerDetailsEl = document.getElementById('sellerDetails');
let budgetEl = document.getElementById('budget');
let delevryTimeEl = document.getElementById('delevryTime');

let container4El = document.getElementById('container4');
let container3El = document.getElementById('container3');
let container2El = document.getElementById('container2');
let container1El = document.getElementById('container1');

let dropdown1 = document.getElementById('dropdown1')
let arrowup1 = document.getElementById('arrowup1')

let dropdown2 = document.getElementById('dropdown2')
let arrowup2 = document.getElementById('arrowup2')

let dropdown3 = document.getElementById('dropdown3')
let arrowup3 = document.getElementById('arrowup3')

let dropdown4 = document.getElementById('dropdown4')
let arrowup4 = document.getElementById('arrowup4')




serviceOptionEl.onclick = function() {
    container1El.style.display = "flex"
    container2El.style.display = "none"
    container3El.style.display = "none"
    container4El.style.display = "none"
    dropdown1.style.display = "flex"
    arrowup1.style.display = "none"
    dropdown2.style.display = "none"
    arrowup2.style.display = "flex"
    dropdown3.style.display = "none"
    arrowup3.style.display = "flex"
    dropdown4.style.display = "none"
    arrowup4.style.display = "flex"
}

sellerDetailsEl.onclick = function() {
    container1El.style.display = "none"
    container2El.style.display = "flex"
    container3El.style.display = "none"
    container4El.style.display = "none"
    dropdown2.style.display = "flex"
    arrowup2.style.display = "none"
    arrowup1.style.display = "flex"
    dropdown1.style.display = "none"
    dropdown3.style.display = "none"
    arrowup3.style.display = "flex"
    dropdown4.style.display = "none"
    arrowup4.style.display = "flex"

}


budgetEl.onclick = function() {
    container1El.style.display = "none"
    container2El.style.display = "none"
    container3El.style.display = "flex"
    container4El.style.display = "none"
    dropdown3.style.display = "flex"
    arrowup3.style.display = "none"
    arrowup1.style.display = "flex"
    dropdown1.style.display = "none"
    dropdown2.style.display = "none"
    arrowup2.style.display = "flex"
    dropdown4.style.display = "none"
    arrowup4.style.display = "flex"
}


delevryTimeEl.onclick = function() {
    container1El.style.display = "none"
    container2El.style.display = "none"
    container3El.style.display = "none"
    container4El.style.display = "flex"
    dropdown4.style.display = "flex"
    arrowup4.style.display = "none"
    arrowup1.style.display = "flex"
    dropdown1.style.display = "none"
    dropdown2.style.display = "none"
    arrowup2.style.display = "flex"
    dropdown3.style.display = "none"
    arrowup3.style.display = "flex"
}

let deleveryTime = ''

let hours24El = document.getElementById('hours24');
let anyTimeEl = document.getElementById('anyTime');
let day3El = document.getElementById('day3');
let day7El = document.getElementById('day7')

anyTimeEl.addEventListener('click', () => {
    deleveryTime = anyTimeEl.value;
  });

hours24El.addEventListener('click', () => {
    deleveryTime =hours24El.value;
  });

day3El.addEventListener('click',() => {
    deleveryTime =day3El.value;
});

day7El.addEventListener('click',() => {
    deleveryTime = day7El.value;
})

