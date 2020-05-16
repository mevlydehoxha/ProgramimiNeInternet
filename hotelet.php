 <?php
session_start();
 ?>
<html manifest="manifest.appcache">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        
        <link rel="stylesheet" href="hotelet.css">
       
        <script>
         function getVote(int){
            if(window.XMLHttpRequest){
                //for Firefox,Chrome,Opera,Safari
                xmlhttp = new XMLHttpRequest();
            }
            else
            {
                //code for IE
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
             xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("poll").innerHTML=this.responseText;
                }
             }
             xmlhttp.open("GET","poll_voto.php?vote="+int,true);
             xmlhttp.send();
          }
        </script>
    
    </head>
<body>


    <div class="titulli">
            <h1> Top Hotels in Prishtina </h1>
        </div>
        <div class="klas1">

            <img src="Fotot/swissdiamond.jpg" width="800" height="500">
            <h2>1.Swiss Diamond Hotel</h2>
            <p class="hotel">
			       The Swiss Diamond Hotel Prishtina is a luxury five star Hotel in Pristina, Kosovo. It is located on Sheshi Nëna Terezë, the main boulevard in the central district of the city. </br>
                   The Hotel is internationally awarded with the International Star Diamond Award from the American Academy of Hospitality Sciences for its luxurious ambiance and the personalized services offered.
							<mark> History </mark> : The Swiss Diamond Hotel opened on December 1, in 2011, after renovating the old existing hotel Iliria. The Iliria was privatized on 2006 by Mabetex and Union Commerce, with Albanian businessman Behgjet Pacolli as main shareholder.
			</p>

            <h2>2. Sirius Hotel</h2>
            <img src="Fotot/sirius.jpg" width="600" height="340">
            <p class="hotel">
                  Centrally located in Pristina and offering a luxurious top-floor restaurant providing unique city views, Hotel Sirius is an excellent place to hold business meetings or relax and enjoy the city.</br> Parliament and Government buildings, National Theatre and the Mother Theresa Square are within a 3-minute walk.
                  The Sirius offers a lobby bar and a snack bar where guests can catch up on daily newspapers. Breakfast buffet is served every day, while room service is also available. 
			      Dry cleaning, ironing and laundry service can all be arranged at the reception.
			</p>

            <h2>3. Semitronix Hotel Prishtina</h2>
            <img src="Fotot/semitronix.jpg" width="600" height="400">
            <p class="hotel">
                  Offering a rooftop terrace with an outdoor swimming pool, Semitronix Hotel Prishtina is set about 4 km from the city centre.</br> Free airport shuttle is available. Guests can enjoy an onsite restaurant and a bar. A sauna and fitness centre are also provided.
                  Some rooms have a seating area where you can relax. Rooms are fitted with a private bathroom.
                  Free WiFi and free private parking is available on site.
		    </p>
				
				
            <h2>4. Hotel International Prishtina and Spa </h2>
            <img src="Fotot/international.jpg" width="600" height="400">
            <p class="hotel">
                  Offering a sun terrace and spa centre, Hotel International Prishtina & Spa is located 3.2 km from the centre of Pristina. The hotel has a hot tub and sauna, and guests can enjoy a drink at the bar. Free WiFi is provided in all areas.
                  All rooms are air-conditioned and include a flat-screen TV with satellite channels. A terrace or balcony are featured in most rooms. The rooms are also fitted with a private bathroom that comprises a shower or a bathtub.
                  Guest's can enjoy a meal at <mark> the hotel restaurant that serves French and Italian cuisine.</mark> A wide selection of French, Italian and local wines is on offer as well.
                  Pristina Airport is 17 km from Hotel International Prishtina & Spa. Private parking is provided on site free of charge. The front desk can arrange shuttle service at a surcharge.
            </p>

            <h2>5. Golden Hotel</h2>
            <img src="Fotot/golden.jpg" width="600" height="300">
            <p class="hotel">
			      Providing free parking and free Wi-Fi,the centrally located Golden Hotel is within a 5-minute drive from the most of Kosovo's government institutions, UN agencies, European Commission and the Council of Europe offices.</br>
                  <mark> Pets allowed.</mark> The luxuriously decorated Golden Kitchen restaurant serves a variety of local and international specialities, as well as quality wines. The hotel has a terrace in front and another one on the top floor.
		    </p>

            <h2>6. Hotel Garden </h2>
            <img src="Fotot/garden.jpg" width="600" height="400">
            <p class="hotel"> 
			      Featuring a rooftop restaurant serving international dishes and a panoramic lift , this 5-star hotel is 2 km from the centre of Pristina.</br> Free WiFi access in public areas and free private parking are provided.
                  All rooms and suites are equipped with a flat-screen TV with an interactive system, air conditioning and a safety deposit box. An espresso machine and a minibar with a selection of drinks and snacks are as well provided.<mark> One Illy espresso is offered free of charge..</mark>Hotel spa & wellness centre is available free of charge
		    </p>

            <h2>7. Hotel Nartel</h2>
            <img src="Fotot/nartel.jpg" width="600" height="400">
            <p class="hotel">
			     Located in the town of Prishtina, this modern 4-star hotel is just a 10-minute walk from the Kosovo government buildings.</br> It offers free Wi-Fi and air-conditioned rooms.
                 Hotel Nartel features an elegant lobby bar and<mark> a stylish restaurant serving international cuisine.</mark>
                Private parking is available on site. The major roads to Prishtina Airport, Skopje and Mitrovica are easily accessible..
			</p>

            <h2>8. Hotel Gorenje</h2>
            <img src="Fotot/gorenje.jpg" width="600" height="400">
            <p class="hotel">
		       	 Located in Pristina,Hotel Gorenje provides accommodation with a restaurant,a bar and a garden.<mark> Each room comes with a balcony.</mark>
                 All units at Hotel Gorenje include air conditioning and a desk.
                 A continental breakfast is available daily at the accommodation.
                 Hotel Gorenje offers a children's playground.
		    </p>

            <h2>9. Emerald Hotel </h2>
            <img src="Fotot/emerald.jpg" width="600" height="400">
            <p class="hotel">
			  <mark> Get the celebrity treatment with world-class service at Emerald Hotel.</mark></br>
                 A 10-minute drive from the centre of Prishtina, this modern 5-star hotel offers 2 restaurants, free Wi-Fi, and 24-hour room service. The large spa area includes an indoor pool and a fitness centre.
                 Hotel Emerald’s spacious rooms are air-conditioned and soundproof.
                 Spa facilities include a sauna, a steam bath, and a hot tub. Guests benefit from a business centre, a gift shop, and a 24-hour lobby bar..</p>
 
            <h2>10. Qama Hotel</h2>
            <img src="Fotot/qama.jpg" width="600" height="350">
            <p class="hotel">
			    Situated in Pristina, Qama Hotel features accommodation with a restaurant, free private parking, a bar and a garden. Boasting family rooms, this property also provides guests with a terrace.
                The rooms are fitted with air conditioning,a fridge, a kettle, a shower, a hairdryer and a desk. At the hotel rooms have a wardrobe and a private bathroom.
                A continental breakfast is available each morning at Qama Hotel.
             </P>
            
        </div>
  
         <div id="poll">
            <h3 style= "margin-left:382px;">Is it helpful?</h3>
            <form style="margin-left:382px" >
                Yes:
                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                <br>
                No:
                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            </form>
        </div>
			<hr>
		<p style="align:center">This is an app dedicated to hotels.We created it to make the work easier.You can simply create a database for your empoyees and clients.</p>
		<h4>If you want this app for your business please contact to our team for more info.</h4>
		<p><a href="login.php" class="link2" >LOGIN</a></p>
		<p><a href="registration.php" class="link2" style="padding: 10px 84px;">REGISTER</a></p>
		
		
</body>
</html>
		