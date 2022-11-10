@extends('layout')

@section('content')

<p class="pageTitle">Contact Us</p>

    <div>
        <div style="background-color:rgb(45, 45, 45); width:30%; height:30%;  border-radius: 20px; float:left; margin-right:2em; margin-left:3em;">
            <div style="text-align: center; padding:5px;">
                <h2> Call Us </h2>
                <i class="fa fa-phone" style="font-size:48px;color:white"></i>
                <p> Call us directiy to get direct support </p>
                <p> +966 5087554213 </p>
                <p> +966 1245665234 <p>
            </div>
        </div>
        <div style="background-color:rgb(45, 45, 45);  width:30%; height:80%; border-radius: 20px; float:left; margin-right:2em; overflow:hidden; text-align: center; padding:5px;">
                <h2> Email Us </h2>
                <i class="fa fa-envelope" style="font-size:48px;color:white"></i>
                <p styl="vertical-align: middle;"> Send us an email with your thoughts</p>
                <div style="margin-bottom:3.2em;">
                    <a id="contact" href="">Send me an Email</a>
                </div>
        </div>
        <div style="background-color:rgb(45, 45, 45); width:30%; height:30%;  border-radius: 20px; float:left;margin-bottom:6em; ">
            <div style="text-align: center; padding:5px; ">
                <h2> Location </h2>
                <i class="fa fa-map-marker-alt" style="font-size:48px;color:white"></i>
                <p> You can Find us At </p>
                <p> Jeddah, Makkah, Saudi Arabia <p>
                <p> alshatii district, king Abdulaziz Rd, building 7045 <p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/69da8dc6d3.js" crossorigin="anonymous"></script>


<script type="application/javascript">
    var encEmail = "c3VwcG9ydEBHYW1lU2hvdy5jb20=";
    const form = document.getElementById("contact");
    form.setAttribute("href", "mailto:".concat(atob(encEmail)));
    form.innerHTML = atob(encEmail);
</script>

@endsection