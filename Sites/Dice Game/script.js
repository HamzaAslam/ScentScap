"use strict";
const score0 = document.getElementById("score--0");
const score1 = document.getElementById("score--1");
const diceImg = document.querySelector(".dice-img");
const btnNewGame = document.querySelector(".btn-newgame");
const btnRoll = document.querySelector(".btn-roll");
const btnHold = document.querySelector(".btn-hold");
const current0 = document.getElementById("current--0");
const current1 = document.getElementById("current--1");
const player0 = document.querySelector(".player--0");
const player1 = document.querySelector(".player--1");

diceImg.classList.add("hidden");
player0.classList.add("player-0");
player1.classList.remove("player-1");
score0.textContent = 0;
score1.textContent = 0;

const switchPlayer = function () {
  //changing current scor of player
  document.getElementById(`current--${currentPlayer}`).textContent = 0;

  // changing active player
  currentPlayer = currentPlayer === 0 ? 1 : 0;
  if (currentPlayer === 0) {
    player0.classList.add("player-0");
    player1.classList.remove("player-1");
  } else {
    player1.classList.add("player-1");
    player0.classList.remove("player-0");
  }
  // player0.classList.toggle(`player-${currentPlayer}`);
  // player1.classList.toggle(`player-${currentPlayer}`);
  number = 0;
};

let scores = [0, 0];
let number = 0;
let currentPlayer = 0;
let playing = true;
// Dice Roll Function
btnRoll.addEventListener("click", function () {
  if (playing) {
    // generating dice roll number
    const dice = Math.trunc(Math.random() * 6) + 1;

    //   display dice
    diceImg.classList.remove("hidden");

    diceImg.src = `./Images/dice-${dice}.png`;
    // Display Current Score
    if (dice !== 1) {
      number = number + dice;
      document.getElementById(`current--${currentPlayer}`).textContent = number;
    } else {
      switchPlayer();
    }
  }
});

btnHold.addEventListener("click", function () {
  if (playing) {
    // add current score to active player
    scores[currentPlayer] = scores[currentPlayer] + number;
    document.getElementById(`score--${currentPlayer}`).textContent =
      scores[currentPlayer];

    // check if players score is greater than 100

    if (scores[currentPlayer] >= 100) {
      playing = false;
      diceImg.classList.add("hidden");

      document.querySelector(`.player${currentPlayer}`).textContent =
        "You ARE THE WINNER 🏆";
      document.querySelector(
        `.player--${currentPlayer}`
      ).style.backgroundColor = "#bbb";

      if (currentPlayer === 0) {
        player0.classList.remove("player-0");
      } else {
        player1.classList.remove("player-1");
      }
    }

    switchPlayer();
  }
});

//resetting whole game
btnNewGame.addEventListener("click", function () {
  number = 0;
  currentPlayer = 0;
  playing = true;

  diceImg.classList.add("hidden");
  player0.classList.add("player-0");
  player1.classList.remove("player-1");
  score0.textContent = 0;
  score1.textContent = 0;
  current0.textContent = 0;
  current1.textContent = 0;
  player0.style.backgroundColor = "#48c5c5";
  player1.style.backgroundColor = "#4d44cea4";
  document.querySelector(".player0").textContent = "Player 1";
  document.querySelector(".player1").textContent = "Player 2";
  scores = [0, 0];
  console.log(scores);
});
