# Pročitaj uputstvo

Tema je rađena po ugledu na Flarum, koji je još u fazi izrade, za izgled teme je korišten Bootstrap. Da bi vam tema radila kako treba i imala sve funkcije koje koristimo na ovom forumu potrebno je da pratite sledeće uputstvo.

Za početak je potrebno da instalirate bbPress dodatak za WordPress ukoliko to već niste uradili, i da u podešavanja foruma podesite kao na slikama ispod:

Bitno je da odobrite Dozvoli korisnicima da označavaju teme kao omiljene i da vam podešavanja budu kao nama.
<img src="http://i.imgur.com/GB2fc2T.png" alt="" class="img-thumbnail" />

Jako je bitno da <strong>Forum Root</strong> bude na <strong>forum</strong> i da podesite <strong>Forum root should show</strong> na <strong>Topicks by Freshness</strong>.
<img src="http://i.imgur.com/oNZwFoX.png" alt="" class="img-thumbnail" />

Kao što ste primetili url za subscriptions nismo dirali jer ga za sada i ne koristimo u temi.
<img src="http://i.imgur.com/oB8kokb.png" alt="null" class="img-thumbnail" />

To je nešto sto se tiče stavki koje koristimo na forum, dodatke koji morate instalirati ukoliko želite da vam radi Očitavanje više kreiranih tema jeste: https://wordpress.org/plugins/bbpress-loadmore-topics/ 

Što se tiče fajla functions.php koji se nalazi u svakoj temi koju koristite potrebno je da dodate sledeći kod: http://pastebin.com/88DTFAm0

Ovo je jako bitno zbog zabrane pristupa drugim korisnicima <strong>/wp-admin</strong> i kad se vaši korisnici loguju da ih automacki prebaci na <strong>/forum</strong>

Što se tiče teme <strong>bbpress</strong> folder iz nje uploadujete u direktorijumu teme koju koristite. Tako da putanja do nje bude u <strong>wp-content/themes/vasa-tema/bbpress/</strong> 
