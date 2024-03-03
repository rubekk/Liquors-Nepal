const cartBtn=document.querySelector(".cart-btn");
const addBtns=document.querySelectorAll(".add-to-cart-btn");
const totalCartItemsElem=document.querySelector(".total-cart-items");
const cart=document.querySelector(".cart");

let showCart=false;
let cartData;
let totalCartItems;
let totalCartPrice;

const handleShowCart=()=>{
    showCart=!showCart;

    if(showCart) cart.className="cart show-cart";
    else cart.className="cart";
}

const startCartActions=()=>{
    const cartAdds=document.querySelectorAll(".cart-plus");
    const cartMinuses=document.querySelectorAll(".cart-minus");

    cartAdds.forEach((cartAdd,i)=>{
        cartAdd.addEventListener("click", ()=>{
            cartData[i].units+=1;

            localStorage.setItem("cartData", JSON.stringify(cartData));
            populateCart();
        })
    })
    cartMinuses.forEach((cartMinus,i)=>{
        cartMinus.addEventListener("click", ()=>{
            cartData[i].units-=1;

            if(cartData[i].units==0) {
                cartData=cartData.filter(elem=>{
                    return (cartData[i].imgPath!==elem.imgPath && cartData[i].pname!==elem.pname && cartData[i].price!==elem.price)
                })
            }
            
            localStorage.setItem("cartData", JSON.stringify(cartData));
            handleTotalCartNo();
        })
    })

}

const populateCart=()=>{
    cart.innerHTML="";
    totalCartPrice=0;

    if(cartData.length==0) {
        cart.innerHTML="<h3>Oops, the cart is empty!<h3>"
        return;
    }
    cart.innerHTML="<h3>Shopping cart</h3>";

    cartData.forEach(item=>{
        let itemTotalPrice=parseInt(item.price)*item.units;

        const cartItemHTML=`
            <div class="cart-item">
                <div class="cart-img">
                    <img src=${item.imgPath}>
                </div>
                <div class="cart-txt">
                    <div class="cart-inps">
                        <div class="cart-minus"><i class="fa-solid fa-minus"></i></div>
                        <div class="cart-items">${item.units}</div>
                        <div class="cart-plus"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <div class="cart-price">Rs. ${itemTotalPrice}</div>
                </div>
            </div>
        `;
        cart.innerHTML+=cartItemHTML;

        totalCartPrice+=itemTotalPrice;
    })
    cart.innerHTML+=`<div class='cart-total'>Total = Rs. ${totalCartPrice}</div>`;
    cart.innerHTML+=`
        <a href="./checkout.php">
            <button class="checkout-btn">Checkout</button>
        </a>
    `;
    
    startCartActions();
}

const handleTotalCartNo=()=>{
    cartData=JSON.parse(localStorage.getItem("cartData") || "[]");
    totalCartItems=cartData.length;
    totalCartItemsElem.innerText=totalCartItems;

    populateCart();
}
handleTotalCartNo();

cartBtn.addEventListener("click", handleShowCart);
addBtns.forEach(elem=>{
    elem.addEventListener("click", ()=>{
        console.log(elem.parentElement.firstElementChild.nextElementSibling.nextElementSibling);

        let data={
            imgPath: elem.parentElement.firstElementChild.firstElementChild.getAttribute('src'),
            pname: elem.parentElement.firstElementChild.nextElementSibling.nextElementSibling.innerText,
            price: elem.parentElement.firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.firstElementChild.innerText,
            category: elem.parentElement.firstElementChild.nextElementSibling.innerText,
            units: 1
        }

        let i=cartData.findIndex(e=> e.imgPath==data.imgPath && e.pname==data.pname && e.price==data.price && e.category==data.category);
        if(i>=0) return;

        cartData.push(data);
        localStorage.setItem("cartData", JSON.stringify(cartData));
        handleTotalCartNo();
    })
})
