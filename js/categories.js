const btns = [
  {
    id: 1,
    name: "Electronic Items",
  },
  {
    id: 2,
    name: "Mobile $ Accesories",
  },
  {
    id: 3,
    name: "Sport Items",
  },
  {
    id: 4,
    name: "Cloths",
  },
  {
    id: 5,
    name: "Toy",
  },
];

const filters = [
  ...new Set(
    btns.map((btn) => {
      return btn;
    })
  ),
];

document.getElementById("btns").innerHTML = filters
  .map((btn) => {
    var { name, id } = btn;
    return (
      "<button class='fil-p' onclick='filterItems(" + id + `)'>${name}</button>`
    );
  })
  .join("");

const product = [
  //electronics
  {
    id: 1,
    image: "../images/items/catogories/gg-1.jpg",
    title: "Z Flip Foldable Mobile",
    price: 120,
    category: "mobile",
  },
  {
    id: 1,
    image: "../images/items/catogories/gg-3.jpg",
    title: "Mobile",
    price: 350,
  },
  {
    id: 1,
    image: "../images/items/catogories/gg-2.jpg",
    title: "Foldable Mobile",
    price: 300,
  },
  //2-mobile
  //3-sport
  {
    id: 3,
    image: "../images/items/catogories/ee-3.jpg",
    title: "250D DSLR Camera",
    price: 230,
    category: "cameras",
  },
  {
    id: 3,
    image: "../images/items/catogories/ee-2.jpg",
    title: "DSLR Camera",
    price: 200,
    category: "cameras",
  },
  {
    id: 3,
    image: "../images/items/catogories/ee-1.jpg",
    title: "DSLR Camera",
    price: 130,
    category: "cameras",
  },

  //4-cloths
  {
    id: 4,
    image: "../images/items/catogories/wcloth.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  {
    id: 4,
    image: "../images/items/catogories/wcloth2.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  {
    id: 4,
    image: "../images/items/catogories/wcloth3.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  {
    id: 4,
    image: "../images/items/catogories/wcloth4.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  {
    id: 4,
    image: "../images/items/catogories/wcloth5.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  {
    id: 4,
    image: "../images/items/catogories/wcloth6.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Laptop",
  },
  //5-toy
  {
    id: 5,
    image: "../images/items/catogories/gg-1.jpg",
    title: "Air Pods Pro",
    price: 60,
    category: "airpods",
  },

  {
    id: 5,
    image: "../images/items/catogories/hh-3.jpg",
    title: "Air Pods Pro",
    price: 65,
    category: "airpods",
  },

  {
    id: 5,
    image: "../images/items/catogories/hh-1.jpg",
    title: "Air Pods",
    price: 85,
    category: "airpods",
  },
];

const categories = [
  ...new Set(
    product.map((item) => {
      return item;
    })
  ),
];

const filterItems = (a) => {
  const flterCategories = categories.filter(item);
  function item(value) {
    if (value.id == a) {
      return value.id;
    }
  }
  displayItem(flterCategories);
};

const displayItem = (items) => {
  document.getElementById("root").innerHTML = items
    .map((item) => {
      var { image, title, price } = item;
      return `<div class='box'>
			<h3>${title}</h3>
			<div class='img-box'>
			<img class='images' src=${image}></img>
			</div>
			<div class='bottom'>
			<h2>$ ${price}.00</h2>
			<button>Bid Now!</button>
			</div>
			</div>`;
    })
    .join("");
};
displayItem(categories);
