/*****  The time on the nav bar code ******/
function doDate() {
  var str = ''
  var now = new Date()
  str = now.toDateString() + ' ' + now.toLocaleTimeString()
  document.getElementById('todaysDate').innerHTML = str
}
setInterval(doDate, 1000)

/*****  The time on the nav bar codes ends ********/

/*****  The table filter begins ********/

$(document).ready(function () {
  $('#myInput').on('keyup', function () {
    var value = $(this).val().toLowerCase()
    $('.desc1').filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    })
  })
})

/*****  The table filter ends   ********/

/*****  The multi step form begins ********/

/*****  3 steps begins ********/

const slidePage = document.querySelector('.slidepage')

const firstNextButton = document.querySelector('.next-1')

const secondNextButton = document.querySelector('.next-2')

const secondPrevButton = document.querySelector('.prev-2')

const thirdPrevButton = document.querySelector('.prev-3')

const thirdNextButton = document.querySelector('.next-3')

const fourthPrevButton = document.querySelector('.prev-4')

const fourthNextButton = document.querySelector('.next-4')

const fifthPrevButton = document.querySelector('.prev-5')

const progressText = document.querySelectorAll('.step p')

const progressBar = document.querySelectorAll('.step')

const progressCheck = document.querySelectorAll('.step .check')

const bullet = document.querySelectorAll('.step span')

let max = 3
let barCurrent = 1
let bulletCurrent = 2
let bulletTextCurrent = 1
let check = 1

/**************** Add Listener function  ******************/
if (firstNextButton != null) {
  
firstNextButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-18%'
  bullet[bulletCurrent - 1].classList.add('activeBullet')
  bulletCurrent += 1
  bullet[bulletTextCurrent - 1].classList.add('disableBullet')
  progressCheck[bulletTextCurrent - 1].classList.add('checked')
  bulletTextCurrent += 1
  progressBar[barCurrent - 1].classList.add('activeStep')
  barCurrent += 1
})
}

if (secondNextButton != null) {
secondNextButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-40%'
  bullet[bulletCurrent - 1].classList.add('activeBullet')
  bulletCurrent += 1
  bullet[bulletTextCurrent - 1].classList.add('disableBullet')
  progressCheck[bulletTextCurrent - 1].classList.add('checked')
  bulletTextCurrent += 1
  progressBar[barCurrent - 1].classList.add('activeStep')
  barCurrent += 1
})
}

if (secondPrevButton != null) {
secondPrevButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '3%'
  bullet[bulletCurrent - 2].classList.remove('activeBullet')
  bulletCurrent -= 1
  bullet[bulletTextCurrent - 2].classList.remove('disableBullet')
  progressCheck[bulletTextCurrent - 2].classList.remove('checked')
  bulletTextCurrent -= 1
  progressBar[barCurrent - 2].classList.remove('activeStep')
  barCurrent -= 1
})
}

if (thirdPrevButton != null) {
thirdPrevButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-18%'
  bullet[bulletCurrent - 2].classList.remove('activeBullet')
  bulletCurrent -= 1
  bullet[bulletTextCurrent - 2].classList.remove('disableBullet')
  progressCheck[bulletTextCurrent - 2].classList.remove('checked')
  bulletTextCurrent -= 1
  progressBar[barCurrent - 2].classList.remove('activeStep')
  barCurrent -= 1
})
}

if (thirdNextButton != null) {
thirdNextButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-61%'
  bullet[bulletCurrent - 1].classList.add('activeBullet')
  bulletCurrent += 1
  bullet[bulletTextCurrent - 1].classList.add('disableBullet')
  progressCheck[bulletTextCurrent - 1].classList.add('checked')
  bulletTextCurrent += 1
  progressBar[barCurrent - 1].classList.add('activeStep')
  barCurrent += 1
})
}
if (fourthPrevButton != null) {
fourthPrevButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-40%'
  bullet[bulletCurrent - 2].classList.remove('activeBullet')
  bulletCurrent -= 1
  bullet[bulletTextCurrent - 2].classList.remove('disableBullet')
  progressCheck[bulletTextCurrent - 2].classList.remove('checked')
  bulletTextCurrent -= 1
  progressBar[barCurrent - 2].classList.remove('activeStep')
  barCurrent -= 1
})
}
if (fourthNextButton != null) {
fourthNextButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-83%'
  bullet[bulletCurrent - 1].classList.add('activeBullet')
  bulletCurrent += 1
  bullet[bulletTextCurrent - 1].classList.add('disableBullet')
  progressCheck[bulletTextCurrent - 1].classList.add('checked')
  bulletTextCurrent += 1
  progressBar[barCurrent - 1].classList.add('activeStep')
  barCurrent += 1
})
}

if (fifthPrevButton != null) {
fifthPrevButton.addEventListener('click', function () {
  slidePage.style.marginLeft = '-61%'
  bullet[bulletCurrent - 2].classList.remove('activeBullet')
  bulletCurrent -= 1
  bullet[bulletTextCurrent - 2].classList.remove('disableBullet')
  progressCheck[bulletTextCurrent - 2].classList.remove('checked')
  bulletTextCurrent -= 1
  progressBar[barCurrent - 2].classList.remove('activeStep')
  barCurrent -= 1
})
}
/**************** Add Listener function closes ******************/

/*****  The multi step form ends ********/

/*****  The Cards redirect @ dashboard ********/

/*****  The Cards redirect @ dashboard closes ********/

/*****  The forgotten password handler ********/

/*****  The forgotten password handler closes ********/

// const forgotPasswordVar = document.querySelector("#forgotPassword");
// forgotPasswordVar..addEventListener("click", () => alert("Contact The Developer"));
/*****  The finger print handler ********/

const storePrint2LocalVar = document.querySelector('#storePrint')

const verifierHandle = document.querySelector('#printVerifier')

function store2LocalStorage() {
  // alert("print store");
}

function fpDbVerification() {
  // alert("criminal record do not exist");
}
if (storePrint2LocalVar != null) {
  
storePrint2LocalVar.addEventListener('click', () => store2LocalStorage())

}

if (verifierHandle != null) {
  
verifierHandle.addEventListener('click', function () {
  // store2LocalStorage();
  // fpDbVerification();
})
}

/*****  The finger print handler closes ********/

let crimeChart = document.querySelector(".crimeChart");
let criminalAgeChart = document.querySelector(".criminalAgeChart").getContext('2d');



if (crimeChart != null) {
  
let crimeChart = crimeChart.getContext('2d');
// .getContext('2d');
Chart.defaults.global.defaultFontFamily = 'Poppins';
let analyticsCharts = new Chart(crimeChart, {

  type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea.
  data:{
    labels:['Murder', 'Civil Unrest', 'Robbery'],
    datasets:[{
      label: 'Crimes',
      data:[2, 1, 3],
      
    backgroundColor: [
      'rgba(255, 99, 132, 0.6)',
      'rgba(54, 162, 235, 0.6)',
      'rgba(255, 206, 86, 0.6)',
      'rgba(75, 192, 192, 0.6)',
      'rgba(153, 102, 255, 0.6)',
      'rgba(255, 159, 64, 0.6)',
      'rgba(255, 99, 132, 0.6)',
      'rgba(54, 162, 235, 0.6)',
      'rgba(255, 206, 86, 0.6)',
    ],
    borderWidth: 4,
    borderColor: '#777'
    }],

  },
  options: {
    title: {
      display: true,
      text: "Crimes by Type in the city in Lagos" 

    },
    legend: {
      display: false
    }
  }
});

}
if (criminalAgeChart != null) {
  
let ageAnalyticsCharts = new Chart(criminalAgeChart, {

  type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea.
  data:{
    labels:['Detective Isokeh', 'Sergeant Ifeoluwa',],
    datasets:[{
      data:[1, 3],
      
    backgroundColor: [
      'rgba(255, 99, 132, 0.6)',
      'rgba(54, 162, 235, 0.6)',
      'rgba(255, 206, 86, 0.6)',
      'rgba(75, 192, 192, 0.6)',
      'rgba(153, 102, 255, 0.6)',
      'rgba(255, 159, 64, 0.6)',
      'rgba(255, 99, 132, 0.6)',
      'rgba(54, 162, 235, 0.6)',
      'rgba(255, 206, 86, 0.6)',
    ],
    borderWidth: 4,
    borderColor: '#777'
    }],

  },
  options: {
    title: {
      display: true,
      text: "Number of Arrest Made by Detective in the city in Lagos" 

    },
    legend: {
      display: false
    }
  }
});

}
/***************  The Charts   *********************************/

console.log("it is working");