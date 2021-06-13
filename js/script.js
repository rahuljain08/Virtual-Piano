var slideIndex = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}

function showNotes(){

	var btn = document.getElementById("showHideNotes");
	btn.innerText = "Hide Notes";
	btn.onclick = hideNotes;

	$(".A").text("A");
	$(".B").text("B");
	$(".C").text("C");
	$(".D").text("D");
	$(".E").text("E");
	$(".F").text("F");
	$(".G").text("G");

	$(".As").html(`<span><span>A</span><span class='piano-accidental'>♯</span></span> 
		<span><span>B</span><span class='piano-accidental'>♭</span></span>`);

	$(".Cs").html(`<span><span>C</span><span class='piano-accidental'>♯</span></span> 
		<span><span>D</span><span class='piano-accidental'>♭</span></span>`);

	$(".Ds").html(`<span><span>D</span><span class='piano-accidental'>♯</span></span> 
		<span><span>E</span><span class='piano-accidental'>♭</span></span>`);

	$(".Fs").html(`<span><span>F</span><span class='piano-accidental'>♯</span></span> 
		<span><span>G</span><span class='piano-accidental'>♭</span></span>`);

	$(".Gs").html(`<span><span>G</span><span class='piano-accidental'>♯</span></span> 
		<span><span>A</span><span class='piano-accidental'>♭</span></span>`);
}

function hideNotes(){

	var btn = document.getElementById("showHideNotes");
	btn.innerText = "Show Notes";
	btn.onclick = showNotes;

	$(".white-key").children().text("");

	$(".black-key").children().text("");
}

function playSounds(id) {
	$(`#${id}`).addClass("active");
	setTimeout(()=>{
		$(`#${id}`).removeClass("active");
	}, 200);
	var audioFile = new Audio(`./sounds/${id}.mp3`);
	audioFile.play();
}

$(".white-key, .black-key").mousedown((ev)=>{
	
	let id = ev.currentTarget.getAttribute("id");
	playSounds(id);

})

//  W E   T Y U
// A S D F G H J
let octave = 4;
let map = {
	"a": "c",
	"w": "c-",
	"s": "d",
	"e": "d-",
	"d": "e",
	"f": "f",
	"t": "f-",
	"g": "g",
	"y": "g-",
	"h": "a",
	"u": "a-",
	"j": "b"
}

$("body").keydown((ev)=>{
	if($(":focus").length==0){
		let key = ev.key.toLowerCase();
		if(key==3 | key==4 | key==5){
			octave = parseInt(key);
		}else if(map[key]){
			let id = `${map[key]}${octave}`;
			playSounds(id);
		}
	}
})

function changeColor() {
	let r_val = $("#R").val();
	let g_val = $("#G").val();
	let b_val = $("#B").val();
	$(".piano-wrapper").css("border-color", `rgb(${r_val}, ${g_val}, ${b_val})`);
	$("#R").val("");
	$("#R").attr("placeholder", r_val);
	$("#G").val("");
	$("#G").attr("placeholder", g_val);
	$("#B").val("");
	$("#B").attr("placeholder", b_val);
}

function isColor(strColor){
	var s = new Option().style;
	s.color = strColor;
	return s.color == strColor;
}

function changeColorText() {
	let color_val = $("#colorName").val();
	var RegExp = /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i;
	if(isColor(color_val.toLowerCase()) | RegExp.test(color_val)){
		console.log($(".piano-wrapper").css("border-color", color_val));
		$("#colorName").val("");
		$("#colorName").attr("placeholder", color_val);
	}else{
		$("#colorName").val("Enter a valid colour!");
	}
}
