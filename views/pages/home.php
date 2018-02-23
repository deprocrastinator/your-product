<header>
    <a href='?'>Home</a>
    <a href='?controller=orders&action=index'>Orders</a>
</header>

<!-- header start -->
<div id="header" class="section">
    <img alt="" class="img-circle" src="https://images.hayneedle.com/mgen/master:LIV031.jpg?is=300,300,0xffffff&cvt=jpg">
    <p>A Rocking Chair</p>
</div>
<!-- header end -->

<!-- Video section start -->
<div class="section">
    <h1><span>Firm Look to my Chair<sup>*</sup></span></h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/AyqbOtqfPQ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <p class="notes"><sup>*</sup>Technically not my chair but more of a glimpse of what it would look like in the real-time :')</p>
</div>
<!-- Video section end -->

<!-- About Product section start -->
<div class="section">
    <h1><span>About Chair</span></h1>
    <p>
        Hey! I'm <i>The Creator</i> of this marvelous piece of art. Let me show you my revolutionary invention: <strong>a chair</strong>. It is a must-have furniture for anyone's home, specificly designed for you (and for anyone else in a Western culture). I believe, that if you can rock your smile - you definitely can rock my rocking chair! It is very simple to use: just sit on it and wait till it starts rocking just like in the video. It is that simple<sup>*</sup>.
    </p>
    <p class="notes"><sup>*</sup>It may start to possess your other furniture or even your whole house but it is possession free on pleople - guaranteed! I am not resposible in any of that sort of activity, use at your own risk.</p>
</div>
<!-- About Prodct section end -->

        
<!-- Specifications section start -->
<div class="section">
    <h1><span>Chair Specifications</span></h1>
    <ul>
        <li>Wood<br />
            <progress min="0" max="100" value="80"></progress>
        </li>
        <li>Paint<br />
            <progress min="0" max="100" value="1"></progress>
        </li>
        <li>Love from my heart<br />
            <progress min="0" max="100" value="19"></progress>
        </li>
    </ul>
</div>
<!-- Specifications section end -->
        
<!-- Form section start -->
<div class="section">
    <h1><span>Order</span></h1>
    <form action="submit.php" method="post">
        
        <select name="quantity" id="" required>
            <option value="" disabled selected>Quantity</option>
            <?php 
                for($num = 1; $num <= 10; $num++){
                echo '<option value"">' . $num . '</option>';
                }
            ?>
        </select>
        
        <input name="firstName" placeholder="First Name" type="text" required />
        
        <input name="lastName" placeholder="Last Name" type="text" required />
        
        <input name="email" placeholder="Email" type="email" required />
 
        <input type="submit" name="submit" value="SUBMIT">
            
    </form>
</div>        
        
<!-- Contacts section start -->
<div class="section" id="contacts">
    <h1><span>Unfollow Me</span></h1>
    
    <!-- Smiley Face -->
    <svg class="face" height="100" width="100">
        <circle cx="50" cy="50" r="50" fill="#FDD835"/>
        <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
        <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
        <circle cx="30" cy="30" r="5" fill="#000000"/>
        <circle cx="70" cy="30" r="5" fill="#000000"/>
        <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
    </svg>
    
        <div>
        <a href="https://www.facebook.com/deprocrastinator">
            <img alt="Facebook" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/1000px-F_icon.svg.png"/>
        </a>
        <a href="https://www.instagram.com/deprocrastinator/">
            <img alt="Instagram" src="http://www.pindantours.com.au/wp-content/uploads/instagram-logo-png-transparent-background-1024x1024.png" />
        </a>
    </div>
</div>
<!-- Contacts section end -->