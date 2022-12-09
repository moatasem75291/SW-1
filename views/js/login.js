const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
var body=document.getElementsByTagName("body")[0];
var darkMode=document.getElementById("dark");
var nav=document.getElementById("navbar");
darkMode.onclick=function(){

  body.classList.toggle("night");

}