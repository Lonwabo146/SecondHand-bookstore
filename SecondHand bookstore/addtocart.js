const product = [
    {
        id: 0,
        image: 'image/Java Programming.jpg',
        title: 'Pro Java Programming',
        price: 500,
    },
    {
        id: 1,
        image: 'image/JAVAscript.jpg',
        title: 'Javascript',
        price: 700,
    },
    {
        id: 2,
        image: 'image/PHP and mysql.jpg',
        title: 'PHP',
        price: 400,
    },
    {
        id: 3,
        image: 'image/Beginnning SQL Server for developers(1).jpg',
        title: 'SQL',
        price: 350,
    },
	{
        id: 4,
        image: 'image/Successful project management.jpg',
        title: 'Successful project management',
        price: 800,
    },
	{
        id: 5,
        image: 'image/Kotlin programming.jpg',
        title: 'Kotlin',
        price: 600,
    },
	{
        id: 6,
        image: 'image/Systems design and analysis.jpg',
        title: 'Systems design and analysis',
        price: 600,
    },
	{
        id: 7,
        image: 'image/Scholarship textbook.jpg',
        title: 'Scholarship',
        price: 600,
    },
	{
        id: 8,
        image: 'image/Beginnning SQL Server for developers(1).jpg',
        title: 'Beginnning SQL Server for developers',
        price: 230,
    },
	{
        id: 9,
        image: 'image/Public relations.jpg',
        title: 'Public relations',
        price: 800,
    },
	{
        id: 10,
        image: 'image/guide to business law.jpg',
        title: 'guide to business law',
        price: 700,
    },
	
	
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "R "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "R "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}