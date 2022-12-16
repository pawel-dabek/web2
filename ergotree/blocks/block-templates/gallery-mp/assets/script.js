/* eslint-disable no-unused-vars */
const obraz1 = document.querySelector('.podmiana-1 img');
const obraz2 = document.querySelector('.podmiana-2 img');
const obraz3 = document.querySelector('.podmiana-3 img');
const obraz4 = document.querySelector('.podmiana-4 img');
const obraz5 = document.querySelector('.podmiana-5 img');
const obraz6 = document.querySelector('.podmiana-6 img');
const obraz7 = document.querySelector('.podmiana-7 img');
const obraz8 = document.querySelector('.podmiana-8 img');
const obraz9 = document.querySelector('.podmiana-9 img');
const obraz10 = document.querySelector('.podmiana-10 img');

function animateImages() {
  setTimeout(() => {
    obraz1?.classList.add('to-transition');
    obraz7?.classList.add('to-transition');
    obraz9?.classList.add('to-transition');
  }, 3000);
  setTimeout(() => {
    obraz2?.classList.add('to-transition');
    obraz3?.classList.add('to-transition');
    obraz5?.classList.add('to-transition');
    obraz8?.classList.add('to-transition');
    obraz10?.classList.add('to-transition');
  }, 6000);
  setTimeout(() => {
    obraz4?.classList.add('to-transition');
    obraz6?.classList.add('to-transition');
  }, 9000);
  setTimeout(() => {
    obraz2?.classList.remove('to-transition');
    obraz6?.classList.remove('to-transition');
    obraz7?.classList.remove('to-transition');
    obraz10?.classList.remove('to-transition');
  }, 12000);
  setTimeout(() => {
    obraz4?.classList.remove('to-transition');
  }, 15500);
  setTimeout(() => {
    obraz1?.classList.remove('to-transition');
    obraz3?.classList.remove('to-transition');
    obraz5?.classList.remove('to-transition');
    obraz8?.classList.remove('to-transition');
    obraz9?.classList.remove('to-transition');
  }, 19000);
  setTimeout(() => {
    obraz1?.classList.add('to-transition');
    obraz2?.classList.add('to-transition');
    obraz3?.classList.add('to-transition');
    obraz4?.classList.add('to-transition');
    obraz6?.classList.add('to-transition');
    obraz7?.classList.add('to-transition');
    obraz9?.classList.add('to-transition');
  }, 22500);
  setTimeout(() => {
    obraz9?.classList.remove('to-transition');
    obraz10?.classList.add('to-transition');
  }, 25000);
  setTimeout(() => {
    obraz5?.classList.add('to-transition');
    obraz8?.classList.add('to-transition');
  }, 27500);
  setTimeout(() => {
    obraz2?.classList.remove('to-transition');
    obraz4?.classList.remove('to-transition');
    obraz7?.classList.remove('to-transition');
    obraz8?.classList.remove('to-transition');
    obraz10?.classList.remove('to-transition');
  }, 30000);
  setTimeout(() => {
    obraz1?.classList.remove('to-transition');
    obraz6?.classList.remove('to-transition');
  }, 33500);
  setTimeout(() => {
    obraz3?.classList.remove('to-transition');
    obraz5?.classList.remove('to-transition');
  }, 37000);
}

animateImages();

setInterval(() => {
  animateImages();
}, 40000);
