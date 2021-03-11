
$('.center').slick({
  centerMode: true,
  centerPadding: '300px',
  slidesToShow: 1,
  arrows: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10%',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10%',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

function openSidemenu(){
  document.getElementById("menuside-nonlogin").style.marginLeft = "0";
}

function closeSidemenu(){
  document.getElementById("menuside-nonlogin").style.marginLeft = "-100%";
}

document.querySelector('button').addEventListener('click', () => {
  document.querySelector('svg').classList.remove('animate');
  setTimeout(function() {
    document.querySelector('svg').classList.add('animate');
  }, 10);
});

function openChat(){
  document.getElementById("room-chat").style.marginRight = "0";
  document.getElementById("content").style.display = "none";
}

function back(){
  document.getElementById("room-chat").style.marginRight = "-100%";
  document.getElementById("content").style.display = "block";
}