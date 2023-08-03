const btns = [
  {
    id: 1,
    name: "Electronic Items",
  },
  {
    id: 2,
    name: "Clothes",
  },
  {
    id: 3,
    name: "Sport Items",
  },
  {
    id: 4,
    name: "Others",
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
    image: "../images/items/catogories/1.jpg",
    title: "Z Flip Foldable Mobile",
    price: 120,
    category: "mobile",
  },
  {
    id: 1,
    image: "../images/items/catogories/2.jpg",
    title: "Mobile",
    price: 350,
  },
  {
    id: 1,
    image: "../images/items/catogories/3.jpg",
    title: "Foldable Mobile",
    price: 300,
  },
  {
    id: 1,
    image: "../images/items/catogories/1.jpg",
    title: "Z Flip Foldable Mobile",
    price: 120,
    category: "mobile",
  },
  {
    id: 1,
    image: "../images/items/catogories/2.jpg",
    title: "Mobile",
    price: 350,
  },
  {
    id: 1,
    image: "../images/items/catogories/3.jpg",
    title: "Air Pods Pro",
    price: 60,
    category: "airpods",
  },

  {
    id: 1,
    image: "../images/items/catogories/6.jpg",
    title: "Air Pods Pro",
    price: 65,
    category: "airpods",
  },

  {
    id: 1,
    image: "../images/items/catogories/hh-2.jpg",
    title: "Air Pods",
    price: 85,
    category: "airpods",
  },
  {
    id: 1,
    image: "../images/items/catogories/3.jpg",
    title: "Foldable Mobile",
    price: 300,
  },
  //2-mobile
  //3-sport
  {
    id: 1,
    image: "../images/items/catogories/4.jpg",
    title: "250D DSLR Camera",
    price: 230,
    category: "cameras",
  },
  {
    id: 1,
    image: "../images/items/catogories/5.jpg",
    title: "DSLR Camera",
    price: 200,
    category: "cameras",
  },

  //2-cloths
  {
    id: 2,
    image: "../images/items/catogories/7.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Clothes",
  },
  {
    id: 2,
    image: "../images/items/catogories/wcloth2.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Clothes",
  },
  {
    id: 2,
    image: "../images/items/catogories/wcloth3.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Clothes",
  },
  {
    id: 2,
    image: "../images/items/catogories/wcloth2.jpg",
    title: "ASOS DESIGN",
    price: 34,
    category: "Others",
  },
  {
    id: 2,
    image: "../images/items/catogories/wcloth4.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Others",
  },
  {
    id: 2,
    image: "../images/items/catogories/wcloth6.jpg",
    title: "ASOS DESIGN",
    price: 100,
    category: "Clothes",
  },
  //3-others
  {
    id: 3,
    image: "../images/items/catogories/8.jpg",
    title: "Basketball Shoes",
    price: 160,
    category: "Sports",
  },

  {
    id: 3,
    image: "../images/items/catogories/11.jpg",
    title: "Golf Shoes",
    price: 65,
    category: "Sports",
  },

  {
    id: 3,
    image: "../images/items/catogories/aa-1.jpg",
    title: "Head-Phones",
    price: 85,
    category: "Sports",
  },
  //4-others
  {
    id: 4,
    image: "../images/items/catogories/13.jpg",
    title: "Moisturizer",
    price: 160,
    category: "Others",
  },

  {
    id: 4,
    image: "../images/items/catogories/12.jpg",
    title: "Skincare Tool",
    price: 65,
    category: "Others",
  },

  {
    id: 4,
    image: "../images/items/catogories/9.jpg",
    title: "Lipstick",
    price: 85,
    category: "Others",
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
            <img class='images' src='${image}'></img>
          </div>
          <div class='bottom'>
            <h2>$ ${price}.00</h2>
            <button>Bid Now!</button>
          </div>
        </div>`;
    })
    .join("");
};
//search items
const searchItems = () => {
  const searchValue = document.querySelector('input[name="search_data"]').value;
  if (searchValue.trim() === "") {
    displayItem(categories);
  } else {
    const filterItems = categories.filter((item) =>
      item.title.toLowerCase().includes(searchValue.toLowerCase())
    );
    displayItem(filterItems);
  }
};
document
  .querySelector('input[name="search_data_product"]')
  .addEventListener("click", searchItems);
