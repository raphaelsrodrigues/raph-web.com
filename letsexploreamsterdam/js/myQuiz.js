
function myFunction() {

var bob = [1, 1, 1];

var bobg = [1, 1, 2];

var bobp = [1, 2, 1];

var bobpg = [1, 2, 2];

var bobs = [2, 1, 1]; 

var bobsg = [2, 1, 2];

var bobsp = [2, 2, 1]; 

var bobspg = [2, 2, 2];

var mary = [3, 1, 1];

var maryg = [3, 1, 2];

var maryp = [3, 2, 1];

var marypg = [3, 2, 2];


	var a = document.getElementById("alone");
    	var b = a.selectedIndex;

	var c = document.getElementById("eventorientation");
    	var d = c.selectedIndex;

	var e = document.getElementById("sexorientation");
    	var f = e.selectedIndex;

	var x = a.options[b].index + "," + c.options[d].index + "," + e.options[f].index;
	
	var ele = document.createElement("BUTTON");
	var ela = document.createTextNode("Hide Result");
	ele.appendChild(ela);
	document.getElementById("answer").appendChild(ele);
	
	var greeting;

	if (x == bob) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam by yourself gives you the benefit of only having to explore\
 the places you really want without having to ask your companion if he/she also wishes to go to the Rijksmuseum\
 or to the Anne Frank House. You do whatever you want, whenever you want, the way you want. However you might not\
 be able to enjoy your alone time for as long as you want because Amsterdam is filled with friendly expats and welcoming locals.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go.\
 The Jordaan Area is a neighborhood that you can explore for its rested atmosphere, there you'll find less beaten paths\
 with beautiful canals, coffee shops, restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a\
 fine option, the park is big so even though it gets packed during sunny days there's always a hidden bench where you can sit,\
 enjoy nature and be amused by beautiful views of lakes with ducks, swans, herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum,\
 Anne Frank House and the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city,\
 which attract almost two million visitors every year. Alongside the wealth of majestic Golden Age paintings, you'll find\
 exciting modern art, press, film, theatre and photography museums as well as some unique Dutch treats like the Heineken,\
 Ajax Arena Tour, the Houseboat Museum, the Sex Museum and the Torture Museum.\
<br>\
<br>";}

	else if (x == bobg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam by yourself gives you the benefit of only having to explore\
 the places you really want without having to ask your companion if he/she also wishes to go to the Rijksmuseum\
 or to the Anne Frank House. You do whatever you want, whenever you want, the way you want. However you might not\
 be able to enjoy your alone time for as long as you want because Amsterdam is filled with friendly expats and welcoming locals.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go.\
 The Jordaan Area is a neighborhood that you can explore  for its rested atmosphere, there you'll find less beaten paths\
 with beautiful canals, coffee shops, restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a\
 fine option, the park is big so even though it gets packed during sunny days there's always a hidden bench where you can sit,\
 enjoy nature and be amused by beautiful views of lakes with ducks, swans, herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum,\
 Anne Frank House and the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city,\
 which attract almost two million visitors every year. The gay scene in Amsterdam is located in many areas where you'll find\
 all kinds of bars and clubs, at the Reguliersdwarsstraat - popular gay street - bars are oppened on weekdays and get busy \
 during happy hours, a great place to sit by the bar and interact with expats and locals without having to stay up until late.\
<br>\
<br>";}

	else if (x == bobp) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam by yourself gives you the benefit to explore all the places you want\
 without having to ask your companion if he/she also wishes to go to the Rijksmuseum or to the Anne Frank House. You do\
 whatever you want, whenever you want, the way you want. However you might not be able to enjoy your alone time for as long\
 as you want because Amsterdam is filled with friendly expats and welcoming locals.\
<br>\
<br>\
 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The upscale Leidseplein square lies in central Amsterdam, sporting everything from restaurants and bars to dance clubs and coffee\
 shops. Also of interest is the Rembrandtplein square, with its neon signs and ample nightlife venues. The Reguliersdwarsstraat\
 connects these two famous plazas, and visitors will find even more cafes and clubs along this boisterous street. The Red Light\
 District, or Rosse Buurt, also offers some party options. Bars and adult nightclubs dot the streets along with a large number of brothels.\
<br>\
<br>";}

	else if (x == bobpg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam by yourself gives you the benefit of only having to explore the places you really\
 want without having to ask your companion if he/she also wishes to go to the Rijksmuseum or to the Anne Frank House. You do whatever\
 you want, whenever you want, the way you want. However you might have to enjoy your alone time for as long as you can because Amsterdam\
 is filled with friendly expats and welcoming locals.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Amsterdam is a very tolerant and gay friendly city. The night life is vibrant with many gay bars, cruising pubs, gay leather shops,\
 clubs and saunas. The gay scene is concentrated in the city centre of Amsterdam. The most well known gay street is the Reguliersdwarsstraat,\
 where you find the well known Soho and Taboo bars. In the Kerkstraat you find the popular gay club Church, with many fetish theme nights.\
 The other gay area is located near the Dam square, on the Warmoesstraat, where you find Amsterdam's cruising and leather scene late night.\
<br>\
<br>";}
	
	else if (x == bobs) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with your partner should be an exciting and adventurous experience. You have the benefit\
 of having someone to share all the special moments of an unforgettable trip in a city that is different from everything that you've ever\
 seen. Amsterdam has a completely free minded spirit, you'll get to see hundreds of sex-shops and clubs with sex performances spread\
 throughout the city, mainly at the Red Light Distric, an opportunity to spice things up?\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go. The Jordaan\
 Area is a neighborhood that you can explore for its rested atmosphere, there you'll find less beaten paths with beautiful canals,\
 coffee shops, restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a fine option, the park is big so even\
 though it gets packed during sunny days there's always a hidden bench where you can sit, enjoy nature and be amused by beautiful views\
 of lakes with ducks, swans, herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum, Anne Frank House\
 and the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city, which attract almost two million\
 visitors every year. Alongside the wealth of majestic Golden Age paintings, you'll find exciting modern art, press, film, theatre and\
 photography museums as well as some unique Dutch treats like the Heineken, Ajax Arena Tour, the Houseboat Museum, the Sex Museum and\
 the Torture Museum.\
<br>\
<br>";}

	else if (x == bobsp) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with your partner should be an exciting and adventurous experience. You have the benefit\
 of having someone to share all the special moments of an unforgettable trip in a city that is different from everything that you've ever\
 seen. Amsterdam has a completely free minded spirit, you'll get to see hundreds of sex-shops and clubs with sex performances spread\
 throughout the city, mainly at the Red Light Distric, an opportunity to spice things up?\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The upscale Leidseplein square lies in central Amsterdam, sporting everything from restaurants and bars to dance clubs and coffee shops.\
 Also of interest is the Rembrandtplein square, with its neon signs and ample nightlife venues. The Reguliersdwarsstraat connects these\
 two famous plazas, and visitors will find even more cafes and clubs along this boisterous street. The Red Light District, or Rosse Buurt,\
 also offers some party options. Bars and adult nightclubs dot the streets along with a large number of brothels.\
<br>\
<br>";}

	else if (x == bobsg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with your partner should be an exciting and adventurous experience. You have the benefit\
 of having someone to share all the special moments of an unforgettable trip in a city that is different from everything that you've ever seen.\
 Amsterdam has a completely free minded spirit, you'll get to see hundreds of sex-shops and clubs with sex performances spread throughout the city,\
 mainly at the Red Light Distric, an opportunity to spice things up?\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go. The Jordaan Area\
 is a neighborhood that you can explore for its rested atmosphere, there you'll find less beaten paths with beautiful canals, coffee shops,\
 restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a fine option, the park is big so even though it gets packed\
 during sunny days there's always a hidden bench where you can sit, enjoy nature and be amused by beautiful views of lakes with ducks, swans,\
 herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum, Anne Frank House and\
 the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city, which attract almost two million visitors\
 every year. The gay scene in Amsterdam is located in many areas where you'll find\
 all kinds of bars and clubs, at the Reguliersdwarsstraat - popular gay street - bars are oppened on weekdays and get busy \
 during happy hours, a great place to sit by the bar and interact with expats and locals without having to stay up until late.\
<br>\
<br>";}

	else if (x == bobspg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with your partner should be an exciting and adventurous experience. You have the benefit\
 of having someone to share all the special moments of an unforgettable trip in a city that is different from everything that you've ever\
 seen. Amsterdam has a completely free minded spirit, you'll get to see hundreds of sex-shops and clubs with sex performances spread throughout\
 the city, mainly at the Red Light Distric, an opportunity to spice things up?\
<br>\
<br>\
 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Amsterdam is a very tolerant and gay friendly city. The night life is vibrant with many gay bars, cruising pubs, gay leather shops, clubs and saunas.\
 The gay scene is concentrated in the city centre of Amsterdam. The most well known gay street is the Reguliersdwarsstraat, where you find the well\
 known Soho and Taboo bars. In the Kerkstraat you find the popular gay club Church, with many fetish theme nights. The other gay area is located\
 near the Dam square, on the Warmoesstraat, where you find Amsterdam's cruising and leather scene.\
<br>\
<br>";}
	
	else if (x == mary) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with a group of friends is a guaranteed fun way to explore the city, there's nothing like having\
 a good time with your pals during a memorable trip. The city is an adult playground with options for every taste, genuinely fun and\
 city, different from everything that you've ever seen. Watching the girls exposing themselves in the Red Light District, visiting the numerous\
 sex shops and coffee shops, it all makes the experience exciting and entertaining for everyone.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go. The Jordaan Area is\
 a neighborhood that you can explore for its rested atmosphere, there you'll find less beaten paths with beautiful canals, coffee shops,\
 restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a fine option, the park is big so even though it gets packed\
 during sunny days there's always a hidden bench where you can sit, enjoy nature and be amused by beautiful views of lakes with ducks, swans,\
 herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum, Anne Frank House and\
 the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city, which attract almost two million visitors\
 every year. Alongside the wealth of majestic Golden Age paintings, you'll find exciting modern art, press, film, theatre and photography\
 museums as well as some unique Dutch treats like the Heineken, Ajax Arena Tour, the Houseboat Museum, the Sex Museum and the Torture Museum.\
<br>\
<br>";}

	else if (x == maryg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with a group of friends is a guaranteed fun way to explore the city, there's nothing like\
 having a good time with your pals during a memorable trip. The city is an adult playground with options for every taste,\
 genuinely fun and different from everything that you've ever seen. Watching the girls exposing themselves in the Red Light District,\
 visiting the numerous sex shops and coffee shops, it all makes the experience exciting and entertaining for everyone.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city is by nature frenetic, but there's always a calm and relaxing spot if you're looking for some quite places to go. The Jordaan\
 Area is a neighborhood that you can explore for its rested atmosphere, there you'll find less beaten paths with beautiful canals, coffee\
 shops, restaurant and local stores. A walk or bicycle ride at The Vondelpark is also a fine option, the park is big so even though it gets\
 packed during sunny days there's always a hidden bench where you can sit, enjoy nature and be amused by beautiful views of lakes with ducks,\
 swans, herons and seagulls.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Those in search of a more-relaxed vibe can also visit Amsterdam's numerous museums. The Rijksmuseum, Van Gogh Museum, Anne Frank House and\
 the Stedelijk Museum are the most popular choices, but there are over fifty museums in the city, which attract almost two million visitors\
 every year. The gay scene in Amsterdam is located in many areas where you'll find\
 all kinds of bars and clubs, at the Reguliersdwarsstraat - popular gay street - bars are oppened on weekdays and get busy \
 during happy hours, a great place to sit by the bar and interact with expats and locals without having to stay up until late.\
<br>\
<br>";}

	else if (x == maryp) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with a group of friends is a guaranteed fun way to explore the city, there's nothing like\
 having a good time with your pals during a memorable trip. The city is an adult playground with options for every taste,\
 genuinely fun and different from everything that you've ever seen. Watching the girls exposing themselves in the Red Light District,\
 visiting the numerous sex shops and coffee shops, it all makes the experience exciting and entertaining for everyone.\
<br>\
<br>\
 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The upscale Leidseplein square lies in central Amsterdam, sporting everything from restaurants and bars to dance clubs and coffee shops.\
 Also of interest is the Rembrandtplein square, with its neon signs and ample nightlife venues. The Reguliersdwarsstraat connects these\
 two famous plazas, and visitors will find even more cafes and clubs along this boisterous street. The Red Light District, or Rosse Buurt,\
 also offers some party options. Bars and adult nightclubs dot the streets along with a large number of brothels.\
<br>\
<br>";}

	else if (x == marypg) { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Visiting Amsterdam with a group of friends is a guaranteed fun way to explore the city, there's nothing like\
 having a good time with your pals during a memorable trip. The city is an adult playground with options for every taste,\
 genuinely fun and different from everything that you've ever seen. Watching the girls exposing themselves in the Red Light District,\
 visiting the numerous sex shops and coffee shops, it all makes the experience exciting and entertaining for everyone.\
<br>\
<br>\
 &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;The city has a lot of party spots across its web of 160 canals and stands out as one of Europe's most popular\
 destinations for partying and nightlife. People from all over the world have long been drawn to the 'Mecca of Marijuana.'\
 Although Amsterdam's nightclubs and bars may not boast the glossy chic and opulent size of venues in London and New York City,\
 the party scene does feature impressive variety. Darkly-lit bars and dance clubs abound, and the city has a particularly strong\
 jazz pedigree, overflowing with live music establishments. Additionally, tourists can take in all kinds of shows at the cabarets and theaters.\
<br>\
<br>\
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Amsterdam is a very tolerant and gay friendly city. The night life is vibrant with many gay bars, cruising pubs, gay leather shops, clubs and\
 saunas. The gay scene is concentrated in the city centre of Amsterdam. The most well known gay street is the Reguliersdwarsstraat, where you\
 find the well known Soho and Taboo bars. In the Kerkstraat you find the popular gay club Church, with many fetish theme nights. The other gay\
 area is located near the Dam square, on the Warmoesstraat, where you find Amsterdam's cruising and leather scene.\
<br>\
<br>";}
	
	else { greeting = "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Please do not leave any option blank."; }


	document.getElementById("answer").innerHTML = greeting;


}