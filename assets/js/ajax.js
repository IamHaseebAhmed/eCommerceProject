
let el = document.getElementById('quantity');
let el1 = document.getElementById('productPrice');
let subTotal=document.getElementById('sub-total')
let Total=document.getElementById('total')

let currPrice = el1.innerHTML;
currPrice = currPrice.replace(',' , '');

el.addEventListener('click', (e) => {
    e.preventDefault();

    let quantity = el.value;

    console.log(parseInt(quantity));
    console.log(parseInt(currPrice));

    el1.innerHTML = quantity * currPrice;
    subTotal.innerHTML=quantity*currPrice
    Total.innerHTML=quantity*currPrice
    
})
subTotal.innerHTML=el1.innerHTML;
Total.innerHTML=el1.innerHTML;


