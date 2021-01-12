const costs = 
[ .25, .27, .25, .25, .25, .25,
  .33, .31, .25, .29, .27, .22,
  .31, .25, .25, .33, .21, .25,
  .25, .25, .28, .25, .24, .22,
  .20, .25, .30, .25, .24, .25,
  .25, .25, .27, .25, .26, .29
];

const scores = 
[ 60, 50, 60, 58, 54, 54, 
  58, 50, 52, 54, 58, 69, 
  34, 55, 51, 52, 44, 51, 
  69, 64, 66, 55, 52, 61,
  46, 31, 57, 52, 44, 18,
  41, 53, 55, 61, 51, 44
];

function printAndGetHighScore(scores) {
  let highScore = 0;
  let output = '';

  for(let i = 0; i < scores.length; i++) {
    output = `Bubble solution #${i} score: ${scores[i]}`;
    console.log(output);
    // se os numeros percorridos forem maior que o anterior 
    // highScore recebe o maior numero percorrido.
    if(scores[i] > highScore) {
      highScore = scores[i];
    } 
  }
  return highScore;
}

function getMostCostEffectiveSolution(scores, costs, highScore) {
  let cost = 100;
  let index;

  for(let i = 0; i < scores.length; i++) {
    if(scores[i] == highScore) {
      if(cost > scores[i]) {
        index = i;
        cost = costs;
      }
    }
  }
  return index;
}

function getBestResult(scores, highScore) {
  let bestSolutions = [];
  
  for(let i = 0; i < scores.length; i++) {
    if(scores[i] == highScore) {
      // recebe o maior numero do segundo indece
      bestSolutions.push(i);
    }  
  }
  return bestSolutions.join(', #');
}


let highScore = printAndGetHighScore(scores);
console.log('Bubbles tests: '+ scores.length);
console.log('Highest bubble score: '+highScore);

let mostCostEffective = getMostCostEffectiveSolution(scores, costs, highScore);
console.log('Bubble Solution #'+mostCostEffective+ ' is the most cost effective');

let bestSolutions = getBestResult(scores, highScore)
console.log('solutions with highest score: #'+bestSolutions);

