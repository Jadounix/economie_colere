let lines = new Array();

$.get('scores.txt', function(data){
  lines = makeArray(data);
})


function makeArray(content){
    //on sépare par retour à la ligne
    let lines = content.split('\n');

    //On filtre les lignes vides
    for(let i=lines.length-1;i>=0;i--){
        if(lines[i]==''){
            lines.splice(i,1);
        }
    }

    //on split les elements par slash
    for(let i=0;i<lines.length;i++){
        lines[i]=lines[i].split('/');
    }

    //On convertit en objet sauf le dernier élément
    for(let i=0;i<lines.length;i++){
        for(let j=0;j<lines[i].length-1;j++){
            lines[i][j] = JSON.parse(lines[i][j]);
        }
    }
    return lines;
}

//-----Hypothèse sur les seuils
function hasThreshold(guy){
    let receivesArray = getReceivesArray(guy);
    let threshold = true;
    let change = 0;
    for(let i=1; i<receivesArray.length;i++){
        if(receivesArray[i]!=receivesArray[i-1]){
            change +=1;
        }
    }
    if(change>1 || receivesArray[0]===true){
        threshold = false;
    }
    return threshold;
}

function getThreshold(guy){
    if(hasThreshold(guy)){
        let receivesArray = getReceivesArray(guy);
        let i = 1;
        while(receivesArray[i]===receivesArray[i-1]){
            i++;
        }
        return i;
    }
}

function getReceivesArray(guy){
    let associativeArray = {};
    for(let k=0 ; k<6; k++){
        associativeArray[guy[0][k]] = guy[1][k];
    }
    return associativeArray;
}

function getHasThresholdNumber(){
    let hasThresholdNumber = 0;
    for(let i=0; i< lines.length;i++ ){
        if(hasThreshold(lines[i])){
            hasThresholdNumber++;
        }
    }
    return hasThresholdNumber
}

function getHasThresholdRatio(){
    return getHasThresholdNumber()/lines.length;
}

function getAverageThreshold(){
    let sum = 0;
    for(let i = 0; i< lines.length; i++){
        if(hasThreshold(lines[i])){
            sum += getThreshold(lines[i]);
        }
    }
    return sum/getHasThresholdNumber();
}

function offerIsConformToThreshold(guy){
    let isConform = false;
    if(hasThreshold(guy)){
        if(guy[3]==getThreshold(guy)){
            isConform = true;
        }
    }
    return isConform;
}

function getIsConformNumber(){
    isConformNumber = 0;
    for(let i=0;i<lines.length;i++){
        if(hasThreshold(lines[i])){
            if(offerIsConformToThreshold(lines[i])){
                isConformNumber++;
            }
        }

    }
    return isConformNumber;
}

function getIsConformRatio(){
    return getIsConformNumber()/getHasThresholdNumber();
}

function thresholdRecap(){
  let content = ``;
  content += 'Hypothèse 1\n'
  content += `nombre de participant ayant un seuil d'acceptation : ${getHasThresholdNumber()}\n`;
  content +=`proportion: ${getHasThresholdRatio()}\n`;
  content += 'Parmi eux : \n'
  content += `\tSeuil moyen : ${getAverageThreshold()}\n`;
  content += `\tNombre de participants faisant une offre égale au seuil : ${getIsConformNumber()}\n`;
  content += `\tProportion : ${getIsConformRatio()}`;
  return content;
}

r


//-----hypothèse 2 : Emotions et réponses

function answerHasPositiveEmotion(answer){
    if(answer.includes('gratitude')||answer.includes('satisfaction')){
        return true;
    }
    return false;
}

function answerHasNegativeEmotion(answer){
    if(answer.includes('colere')||answer.includes('mepris')||answer.includes('irritation')||answer.includes('envie')){
        return true;
    }
    return false;
}

function answerHasOnlyPositiveEmotion(answer){
    return (answerHasPositiveEmotion(answer) && !answerHasNegativeEmotion(answer))
}

function answerHasOnlyNegativeEmotion(answer){
    return (!answerHasPositiveEmotion(answer) && answerHasNegativeEmotion(answer))
}

function emotionSuitAnswer(guy,receiveIndex){
    return (guy[1][receiveIndex]===true && answerHasOnlyPositiveEmotion(guy[2][receiveIndex]))||(guy[1][receiveIndex]===false && answerHasOnlyNegativeEmotion(guy[2][receiveIndex]))
}

function emotionsSuitAnswers(guy){
    let result = true;
    for(let i = 0; i<6; i++){
        if(!emotionSuitAnswer(guy,i)){
            result = false;
        }
    }
    return result;
}

function getEmotionsSuitAnswersNumber(){
    let compteur = 0;
    for(let i = 0; i<lines.length; i++){
        if(emotionsSuitAnswers(lines[i])){
            compteur++;
        }
    }
    return compteur;
}

function getEmotionsSuitAnswersRatio(){
    return getEmotionsSuitAnswersNumber()/lines.length;
}

(function hypothese2Recap(){
    console.log('\n\nHypothèse 2\n')
    console.log('Nombre de personnes respectant l\'hypothèse : '+getEmotionsSuitAnswersNumber());
    console.log('proportion  : '+getEmotionsSuitAnswersRatio());
    console.log('\n\n\n')
})()

//On essaie d'avoir des résultats malgré tout

function refusesAndHasAngerFor1_2(guy){
    let yes = true;
    for(let k = 0; k<6; k++){
        if(guy[0][k]<2){
            if(guy[1][k]==false){
                yes = answerHasAnger(guy[2][k]);
            }
        }
    }
    return yes;
}

function refusesFor1_2(guy){
    let yes = true;
    for(let k = 0; k<6; k++){
        if(guy[0][k]<2){
            if(guy[1][k]===true){
                yes = false;
            }
        }
    }
    return yes;
}

function howManyRefusesAndHasAngerFor1_2(){
    let count = 0;
    for(let i = 0; i<lines.length; i++){
        if(refusesAndHasAngerFor1_2(lines[i])){
            count++;
        }
    }
    return count;
}

function answerHasAnger(answer){
    return answer.includes('colere')
}

function howManyRefusesFor1_2(){
    let count = 0;
    for(let i = 0; i<lines.length; i++){
        if(refusesFor1_2(lines[i])){
            count++;
        }
    }
    return count;
}

(function h3Recap(){
    console.log('Remarque : ');
    console.log('Nombre de personnes ayant refusé les offres 1 et 2 : '+howManyRefusesFor1_2());
    console.log('Parmi eux,')
    console.log('\tRefus accompagné de l\'émotion colère : '+howManyRefusesAndHasAngerFor1_2());
    console.log('\tProportion : '+howManyRefusesAndHasAngerFor1_2()/howManyRefusesFor1_2())
})()
