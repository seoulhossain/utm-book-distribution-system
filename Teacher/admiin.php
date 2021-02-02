<!DOCTYPE html>
<html>
    <head>
    <title> UTM BOOK DISTRIBUTION System</title>
    </head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #000;
  color: #fff;
}
.start{
    height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  letter-spacing: 0.1rem;
}
.slideshow img{
  position: absolute; 
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; 
  object-fit: cover;
  z-index:-1;
  opacity: 0;
  transition: opacity 0.75s ease-in-out;
}
.start .warn{
border-radius: 0.5rem;
  padding: 4rem 2.5rem;
  background-color: rgba(0,0,0,0.5);
}
.start h1{
    font-size: 4rem;
  margin-bottom: 0.75rem;
}
.start p{
    font-size: 1.75rem;
}
@media (max-width: 700px) {
  html { font-size: 12px; }
  .write { padding: 1.5rem 2rem; }
  .start h1 { font-size: 2.5rem; }
  .start p { font-size: 1.25rem; }
}
.side{
    width: 100%; height: 100px; text-align: left; color: white;  margin-top: 0px; padding: 40px;
}
.side button{
    font-size: 17px;
    font-weight: 200;
    color: white;
    text-transform: uppercase;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
    border-radius: 4px 4px 4px 4px;
    padding: 10px 35px ; 

}
</style>
    <body>

<header class="start">
  <div class="side">
    <a href="../Student/admin.php"> <button> Student Access </button> </a>
    <a href="admin.php"> <button> Teacher Access </button> </a>
  </div>
      
    <div class="slideshow">

        <img src="https://engineering.utm.my/computing/wp-content/uploads/sites/2/2012/09/cMqRCkLiTnhlEpFlNzCj_business-people-training-website-header.jpg">
        <img src = "https://library.utm.my/photos/wp-content/uploads/sites/2/2018/11/1A2A2062.jpg">
   
    </div>
<div class="warn">
  <h1> Admin Page </h1>
  <p> School of Computing </p>
</div>

</header>       
<script>
    const slideshow = document.querySelectorAll(".slideshow img");
    const nextImageDelay = 5000;
    let currentImageCounter = 0; // set a variable to keep track of the current image 
    // slideshow[currentImageCounter].style.display = "block";
    slideshow[currentImageCounter].style.opacity = 1;
    setInterval(nextImage, nextImageDelay);
    function nextImage() {
  // slideshow[currentImageCounter].style.display = "none";
  slideshow[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter+1) % slideshow.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshow[currentImageCounter].style.opacity = 1;
}
</script> 
    </body>
</html>