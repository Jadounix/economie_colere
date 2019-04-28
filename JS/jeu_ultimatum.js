let arrowAudio = new Audio('audio/jeu/arrowAudio.mp3');
let smokeAudio = new Audio('audio/jeu/smokeAudio.mp3');
let moneyAudio = new Audio('audio/jeu/moneyAudio.mp3');

let moi = {
  name: 'moi',
  div : null,
  width : null,
  url : `../images/jeu/moi.png`,
  display: function(){
    $(jeu.currentSlide).append(`<div class="moi"></div>`);
    this.div = $('.moi');
    this.width = this.div.offsetWidth;
  },

  animateNormal: function(){
    this.div.css('backgroundPosition',  '0px 0px');
  },
  animateStretch: function(){
    this.div.css('backgroundPosition', '-200px 0px');
    setTimeout(() =>this.animateNormal(), 500);
  },
  animateYes: function(){
    this.div.css('backgroundPosition',  '-400px 0px');
    setTimeout(()=>this.div.css('backgroundPosition',  '-600px 0px'),150);
    setTimeout(()=>this.div.css('backgroundPosition',  '-400px 0px'),300);
    setTimeout(()=>this.div.css('backgroundPosition',  '-600px 0px'),450);
    setTimeout(()=>this.animateNormal(),600);
  },

  animateNo: function(){
    this.div.css('backgroundPosition',  '-800px 0px');
    setTimeout(()=>this.div.css('backgroundPosition',  '-1000px 0px'),200);
    setTimeout(()=>this.div.css('backgroundPosition',  '-800px 0px'),400);
    setTimeout(()=>this.div.css('backgroundPosition',  '-1000px 0px'),600);
    setTimeout(()=>this.animateNormal(),900);
  }
}


let partenaire = {
  name: 'partenaire',
  div : null,
  width : null,
  url : `../images/jeu/partenaire.png`,
  display: function(){
    $(jeu.currentSlide).append(`<div class="partenaire"></div>`);
    this.div = $('.partenaire');
    this.width = this.div.offsetWidth;
  },

  animateNormal: function(){
    this.div.css('backgroundPosition',  '0px 0px');
  },
  animateStretch: function(){
    this.div.css('backgroundPosition', '-200px 0px');
    setTimeout(() =>this.animateNormal(), 500);
  },
  animateHappy: function(){
    this.div.css('backgroundPosition',  '-400px 0px');
  },

  animateSad: function(){
    this.div.css('backgroundPosition',  '-600px 0px');
  }
}

class Questionnaire{
  constructor(){
    this.emotions =  new Array();
    this.whyThisOffer = new String();
  }

  newOfferQuestion(){
    let content=`
    <div class="questionnaire">
      <p>Pouvez vous expliquer cette offre de <b>${jeu.offer}€</b> ? </p>
      <br/>
      <textarea id="whyThisOffer" rows="7" cols="40" style="margin:auto"></textarea>
      <br/>

      <div class='button triggeringSending' style="margin:auto;">OK</div>
    </div>
    `;
    $(jeu.currentSlide).append(content);
    $(jeu.currentSlide).find('.triggeringSending').on('click', ()=>{
      if ($('#whyThisOffer').val()!=='') {
        this.whyThisOffer = $('#whyThisOffer').val();
        jeu.nextSlide();
        ajaxSend();
      }

    })
  }

  displayNewEmotionQuestionnaire(){
    let mot='';
    // if(jeu.answers[jeu.answers.length-1]){
    //   mot = 'acceptation';
    // }
    // else {
    //   mot='refus';
    // }
    let content = `
    <div class="questionnaire">
      <p>Quelles émotions avez-vous ressenti à la suite de l'offre (<em>${jeu.lastReceive}€</em>) qui vous a été faite ? </p>
      <br/>
      <div class="coteacote">
        <table>
          <tr>
            <td><input type="checkbox" name="cb" id="gratitude" /></td>
            <td><label for="gratitude">Gratitude</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="colere" /></td>
            <td><label for="colere">Colère</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="mepris" /></td>
            <td><label for="mepris">Mépris</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="envie" /></td>
            <td><label for="envie">Envie</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="irritation" /></td>
            <td><label for="irritation">Irritation</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="surprise" /></td>
            <td><label for="surprise">Surprise</label></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="cb" id="satisfaction" /></td>
            <td><label for="satisfaction">Satisfaction</label></td>
          </tr>
        </table>
        <div class='button'>OK</div>
      </div>
    </div>
    `
    $(jeu.currentSlide).append(content);
    $('.questionnaire .button').on('click', ()=>{
      if ($('.questionnaire input').is(':checked')) {
        this.saveAnswer();
        this.eraseQuestionnaire();
        moi.animateNormal();
        partenaire.animateNormal();
        $('.proposition').remove();
        $('.sac_argent').remove();
        $('.smoke').remove();
        if (jeu.round!==jeu.receives.length-1) {
          jeu.round += 1;
          receive();
        }
        else{
          offerTime();
        }
      }

    })
  }
  eraseQuestionnaire(){
    $('.questionnaire').remove();
  }
  saveAnswer(){
    let newEmotions = new Array();
    $('.questionnaire input').each(function(){
      if ($(this).is(':checked')) {
        console.log($(this));
        newEmotions.push($(this).attr('id'));
      };
    })
    this.emotions.push(newEmotions);
  }
}

class Game{
  constructor(){
    this.div = $('#game')
    this.currentSlideNumber = 0
    this.slides = $('.slide');
    this.answers = new Array();
    this.receives = shuffle([0,1,2,3,4,5]);
    this.offer =  new Number();
    this.round = 0;
    this.displaySlide(0);
  }

  get currentSlide(){
    return this.slides[this.currentSlideNumber];
  }
  get lastReceive(){
    return this.receives[this.round];
  }


  nextSlide(){
    this.currentSlideNumber += 1;
    this.displaySlide();
  }
  prevSlide(){
    this.currentSlideNumber -= 1;
    this.displaySlide()
  }
  displaySlide(slide = this.currentSlideNumber){
    for (let i = 0; i < this.slides.length; i++) {
      if (i!=slide) {
        $(this.slides[i]).hide();
      }
      else {
        $(this.slides[i]).show();
      }
    }
  }
}

function displayMoney(amount,forMe){
  let target = null;
  let source = null;
  if (forMe) {
    target = $(jeu.currentSlide).find('.myMoneyZone');
    source = $(jeu.currentSlide).find('.theirMoneyZone');
  }
  else{
    target = $(jeu.currentSlide).find('.theirMoneyZone');
    source = $(jeu.currentSlide).find('.myMoneyZone');
  }
  for(let i=0 ; i<amount; i++){
    displayBag(target);
  }
  for(let i=0 ; i<(10-amount); i++){
    displayBag(source);
  }
  function displayBag(zone){
    let position = [randomInt(0,100),randomInt(10,20)]
    let content = `
      <div class="sac_argent" style="transform:translate(${position[0]}px, ${position[1]}px)"></div>
      <div class="smoke" style="transform:translate(${position[0]}px, ${position[1]}px);display:none;"></></div>
    `
    $(zone).append(content);
  }
}

function displayAnswers(){
  $(jeu.currentSlide).find('.zone-reponse').show();
  $(jeu.currentSlide).find('.zone-reponse .button').unbind('click');
  $(jeu.currentSlide).find('.zone-reponse .button').on('click', myAnswerIs);
}

function myAnswerIs(event){
  let ans = false;
  if($(event.target).hasClass('reponse-oui')){
    ans = true;
  }
  myAnswer(ans);
}
function myAnswer(ans){
  if(ans){
    moi.animateYes();
    setTimeout(()=>{
      partenaire.animateHappy();
      animateMoneyWon();
    },500)

  }
  else{
    moi.animateNo();
    setTimeout(()=>{
      partenaire.animateSad();
      animateMoneyDisappear();
    },500)

  }
  jeu.answers.push(ans);
  $('.zone-reponse').hide();
  $('.onVousPropose').hide();
  setTimeout(function(){
    quest.displayNewEmotionQuestionnaire();
  },1200);

}
 function animateMoneyDisappear(){
   let bags = $(jeu.currentSlide).find('.sac_argent');
   let smokes = $(jeu.currentSlide).find('.smoke');
   for (let i = 0; i < bags.length; i++) {

     $(bags[i]).hide();
     $(smokes[i]).show();
     setTimeout(function(){
       $(smokes[i]).hide();
     }, 1500)

   }
   smokeAudio.play();

 }
function animateMoneyWon(){
  moneyAudio.play();
}

function ajaxSend(){
  let myEmotions = JSON.stringify(quest.emotions);
  let myReceives = JSON.stringify(jeu.receives);
  let myAnswers = JSON.stringify(jeu.answers);
  let myOffer = jeu.offer;
  let whyThisOffer = quest.whyThisOffer;

  $.ajax({
    url:'save_scores.php',
    type:'GET',
    data:{'emotions':myEmotions, 'receives':myReceives, 'answers':myAnswers, 'offer':myOffer, 'why':whyThisOffer},
    complete:function(){
      console.log(this.url)
    },
    success: function(){
      $('#loading').hide();
      $('.loading_div').append(`<p>Résultats enregistrés avec succès ! </p>`);
    }
  })
}

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

/*----------------*/

window.addEventListener('load', init);

function init(){
  jeu = new Game();
  quest = new Questionnaire();

  rightArrows = $('.rightArrow');
  for (var i = 0; i < rightArrows.length; i++) {
    rightArrows[i].addEventListener('click',()=>jeu.nextSlide());
    rightArrows[i].addEventListener('click', function(){
      arrowAudio.play();
    })
    if ($(rightArrows[i]).hasClass('triggeringReceive')) {
      rightArrows[i].addEventListener('click', receive);
    }
    else if ($(rightArrows[i]).hasClass('triggeringOffer')) {
      rightArrows[i].addEventListener('click', offerTime);
    }
    else if ($(rightArrows[i]).hasClass('triggeringSending')) {
      rightArrows[i].addEventListener('click', ajaxSend);
    }
  }
}


function receive(){
  if (!$('.moi').length) {// Au début ça le crée
    // moi = new Personnage('moi')
    moi.display();
  }
  if (!$('.partenaire').length) {
    // partenaire = new Personnage('partenaire')
    partenaire.display();
  }
  amount = jeu.lastReceive;
  setTimeout(function(){
    displayReceive(amount);
  },500)
}
function displayReceive(amount){
  let content = `
    <div class="proposition" style="font-size:3.3em">${amount}€</div>
  `
  $(jeu.currentSlide).append(content)
  partenaire.animateStretch();
  displayMoney(amount,true);
  setTimeout(displayAnswers,500);

}

function offerTime(){
  $('.proposition').hide();
  content=`
  <input class="slider" type="range" min="0" max="10" value="0">
  <h2 class="yourOfferNow"> À votre tour de faire une proposition, </h2>
  <div class="offre">0€</div>
  <div class="button makeOfferButton">
    OK !
  </div>
  <div class="theirMoneyZone"></div>
  <div class="myMoneyZone"></div>
  <div class="rightArrow triggeringSending" style="display:none;"></div>
  `

  $(jeu.currentSlide).append(content);
  $(jeu.currentSlide).find('.makeOfferButton').on('click', makeOffer);
  $(jeu.currentSlide).find('.slider').on('input',displayOffer);

}

function makeOffer(event){
  let offer = parseInt($(jeu.currentSlide).find('.slider').attr('value'));
  moi.animateStretch();
  displayMoney(offer,false);
  $('.makeOfferButton').hide();
  $('.slider').hide();
  // $(jeu.currentSlide).find('.rightArrow').show();
  jeu.offer = offer;
  setTimeout(()=>quest.newOfferQuestion(), 500);
}
function displayOffer(event){
  $(jeu.currentSlide).find('.offre').html(`${event.target.value}€`);
  $(jeu.currentSlide).find('.slider').attr('value',event.target.value);
}
function randomInt(min,max){
  return Math.floor(Math.random()*(max-min+1)+min);
}
