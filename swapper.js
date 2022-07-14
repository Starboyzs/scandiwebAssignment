var title = document.getElementById("addTitle");
// form block variables
var bookInput = document.getElementById("BookInputs");
var furnituresInput = document.getElementById("FurnituresInputs");
var dvdInput = document.getElementById("DvdInputs");
//Form field variables
var save = document.getElementById("save");
var sku = document.getElementById("sku");
var name = document.getElementById("name");
var price = document.getElementById("price");
var type = document.getElementById("productType");
//Furniture variables
var length = document.getElementById("length");
var width = document.getElementById("width");
var height = document.getElementById("height");
//Book variables
var weight = document.getElementById("weight");
//DVD variables
var size = document.getElementById("size");

//Swap out the Form depending on type
function switchFormBlock(selecter) {
  switch (selecter.value) {
    //case Furniture
    case "0":
      // console.log("clicked Furniture");
      bookInput.style.display = "none";
      furnituresInput.style.display = "block";
      dvdInput.style.display = "none";
      title.innerHTML = "Add a piece of furniture";
      break;
    //case Book
    case "1":
      // console.log("clicked books");
      bookInput.style.display = "block";
      furnituresInput.style.display = "none";
      dvdInput.style.display = "none";
      title.innerHTML = "Add a book";
      break;
    //case DVD
    case "2":
      // console.log("clicked dvds");
      bookInput.style.display = "none";
      furnituresInput.style.display = "none";
      dvdInput.style.display = "block";
      title.innerHTML = "Add a movie";
      break;
  }
}
