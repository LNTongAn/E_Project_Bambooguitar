var data = [
    { "id": "p01", "name": "Mitchell  O120CESB Auditorium","pic": "../Images/Acoustic/acoutic1.png","price": 50, "price2": 40, "description": "", "guitar": "acoustic" },

    { "id": "p02", "name": "Rogue RA-090 ", "name1": "", "name2": "", "pic": "../Images/Acoustic/RogueRA-090DreadnoughtAcousticGuitarSunburst.png", "price": 2.69, "description": "", "guitar": "acoustic" },

    { "id": "p03", "name": "TANGLEWOOD TWBB SFCE", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 256.08, "description": "", "guitar": "acoustic" },

    { "id": "p04", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 2.20, "description": "", "guitar": "acoustic" },

    { "id": "p05", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 1.76, "description": "", "guitar": "domestic" },

    { "id": "p06", "name": "Mitchell  O120CESB Auditorium", "name1": "4.5$", "name2": "sale 20%", "pic": "../Images/Acoustic/acoutic1.png", "price": 3.6, "description": "", "guitar": "domestic" },

    { "id": "p07", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 2.73, "description": "", "guitar": "domestic" },

    { "id": "p08", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 2.2, "description": "", "guitar": "domestic" },

    { "id": "p09", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 1.72, "description": "", "guitar": "domestic" },

    { "id": "p10", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p11", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p12", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p13", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p14", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p15", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },

    { "id": "p16", "name": "Mitchell  O120CESB Auditorium", "name1": "", "name2": "", "pic": "../Images/Acoustic/acoutic1.png", "price": 0.97, "description": "", "guitar": "domestic" },
];

function displayImage(items) {
    let s = ``;
    $.each(items, function (k, v) {
        s += `
        <div class="item col-md-3"> 
   <div class="thumbnail" data-id="${v.id}">
   <a href="product_${v.id}.html"><img class="group list-group-image" src="img/${v.pic}" alt="" width="300"></a> 
    <div class="caption"> 
    <a class="group inner list-group-item-heading" href="product_${v.id}.html" style="text-decoration: none;color:black;"><h5>${v.name}</h5></a> 
     <div class="row"> 
      <div class="col-xs-12 col-md-6"> 
      <p>Price: ${v.price}$ </p>
      </div> 
      <div class="col-xs-12 col-md-6"> <a class="" href="">Chi tiết</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> ` ;

    });
    $("#products").html(s);

}
/*<div class="col-sm-4 col-md-4 col-lg-2 divImage">
        <div class="detailImage" data-id="${v.id}">
            <a href="product_${v.id}.html"><img src="img/${v.pic}" alt="" class="guitar"></a>
            <a href="product_${v.id}.html" style="text-decoration: none;"><h5>${v.name}</h5></a>
            <h5>Price: ${v.price}$ </h5>
            <del style="color:Gray;">${v.name1}</del>
            <a style="color:yellow; background-color:red">${v.name2}</a>
   
            <br><a data-name="${v.name}" data-price="${v.price}" class="add-to-cart btn btn-warning">Add to cart</a>
            </div>
        </div>*/

//lap trinh su kien xem chi tiet san pham
$(".detailImage").click(function () {
    alert("detailImage");
    let id = $(this).data('id');
    alert("test + " + id);
    location.href = "product_ " + id + ".html";
});

function showProduct(pid) {
    let products = data.filter(ele => ele.id == pid);
    let product = products[0];
    let x = `
      <div class="row">
          <div class="col-sm-md-7">
              <div><img src="img/${product.pic}" alt="" class="guitar"></div>
          </div>
          <div class="col-md-5">
            <h3><strong>${product.name}</strong></h3>
            <h4>Transport:</h4>
            <h4>Fee:</h4>
            <h4>Price:${product.price}$</h4>
          <a onclick="alert(${product})" data-name="${product.name}" data-price="${product.price}" class="add-to-cart btn btn-warning ">Add to cart</a> <a onclick="alert(${product})" data-name="${product.name}" data-price="${product.price}" class="add-to-cart btn btn-warning ">Buy Now</a>
          
          </div>
      </div>           
      `;
    $("#productDetail").html(x);
}

//call function to show all image
displayImage(data);

//event search
$("#formSearch").submit(function (e) {
    e.preventDefault();

    // lay noi dung cua the input
    let value = $("#search").val();
    let re = new RegExp(value, "ig");
    let subdata = data.filter(item => item.name.search(re) >= 0);
    displayImage(subdata);
})

$("input[type=checkbox]").click(function () {
    let guitars = $(".ck-guitar:checked").map(function () { return $(this).val() }).toArray().toString();

    let subdata = (guitars.length == 0) ? data : data.filter(item => guitars.search(item.guitar) >= 0);

    displayImage(subdata);
})
