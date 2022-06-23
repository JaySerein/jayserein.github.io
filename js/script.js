let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

document.querySelector('#login-btn').onclick = () => {
  document.querySelector('.login-form-container').classList.toggle('active');
}

document.querySelector('#close-login-form').onclick = () => {
  document.querySelector('.login-form-container').classList.remove('active');
}

const MenuCar = document.querySelector(".click-menu")
const MenuShow = document.querySelector(".sub-menu")
MenuCar.addEventListener("click", function () {
  if (MenuShow.style.display == "none") {
    document.querySelector(".sub-menu").style.display = 'block'
  }
  else {
    document.querySelector(".sub-menu").style.display = 'none'
  }
})
window.onscroll = () => {

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add('active');
  } else {
    document.querySelector('.header').classList.remove('active');
  };

};

document.querySelector('.home').onmousemove = (e) => {

  document.querySelectorAll('.home-parallax').forEach(elm => {

    let speed = elm.getAttribute('data-speed');

    let x = (window.innerWidth - e.pageX * speed) / 90;
    let y = (window.innerHeight - e.pageY * speed) / 90;

    elm.style.transform = `translateX(${y}px) translateY(${x}px)`;

  });

};


document.querySelector('.home').onmouseleave = (e) => {

  document.querySelectorAll('.home-parallax').forEach(elm => {

    elm.style.transform = `translateX(0px) translateY(0px)`;

  });

};

var swiper = new Swiper(".vehicles-slider", {
  grabCursor: true,
  centeredSlides: true,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  grabCursor: true,
  centeredSlides: true,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".review-slider", {
  grabCursor: true,
  centeredSlides: true,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});


const InfoCar = document.querySelector(".car-info-container")
const InfoBox = document.querySelectorAll(".car-info")
const InfoBtn = document.querySelectorAll(".info-btn")

InfoBtn.forEach(btn => {
  btn.onclick = (event) => {
    InfoCar.style.display = 'flex';
    var BoxItem = event.target
    var name = BoxItem.parentElement.parentElement
    var IDCar = name.getAttribute('data-name')
    InfoBox.forEach(info => {
      let target = info.getAttribute('data-target');
      if (IDCar == target) {
        info.classList.add('active');
      }
    });
  };
});

InfoCar.querySelector('#close-info').onclick = () => {
  InfoCar.style.display = 'none';
  InfoBox.forEach(close => {
    close.classList.remove('active');
  });
};
const OrderBtn = document.querySelectorAll('.order-btn')
const OrderBox = document.querySelector('.order-container')

OrderBtn.forEach(btn => {
  btn.onclick = (event) => {
    var ordercard = event.target
    var product = ordercard.parentElement
    var productName = product.querySelector("h3").innerText
    addName(productName)
    OrderBox.classList.add('active');

  };
});
function addName(productName) {
  var addtr = document.createElement("tr")
  var carItem = document.querySelectorAll("tbody tr")
  var trcontent = '<tr><td> ' + productName + ' </td> <td> Năm:<select name="Năm Sản Xuất" id="year"><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2022">2021</option></select></td><td>Màu Xe:<select name="Màu sắc" id="color"><option value="red">Red</option><option value="yellow">Yellow</option><option value="blue">Blue</option><option value="green">Green</option><option value="white">White</option><option value="black">Black</option></select> </td> <td> Nhận Xe: <select name="Nhận Xe" id="shiping"> <option value="1">Cửa Hàng</option> <option value="2">Tại Nhà</option> <option value="3">Vận Chuyển</option> </select> </td> </tr>'
  addtr.innerHTML = trcontent
  var carTable = document.querySelector("tbody")
  var carTableA = document.querySelector("tbody tr")
  clear(carTableA)
  carTable.append(addtr)


}
function clear(carTableA) {
  var ItemA = carTableA
  ItemA.remove()
}
document.querySelector('#close-order').onclick = (event) => {
  OrderBox.classList.remove('active');
}
document.querySelector('.submit-btn').onclick = () => {
  document.querySelector(".order-notify").style.display = "flex"
}